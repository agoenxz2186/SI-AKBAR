<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends MX_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_data');
        $this->load->library('upload');
    }


    function index()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_artikel',
            'data' => $this->M_data->show_artikel(),

        );
        $this->load->view('layout/wrapper', $data);
    }
    function add_artikel()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'artikel/v_add_artikel',
        );
        $this->load->view('layout/wrapper', $data);
    }
    function edit_artikel($id)
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'artikel/v_edit_artikel',
            'data' => $this->db->query("select*from artikel where id_artikel='$id'")->row(),
        );

        $this->load->view('layout/wrapper', $data);
    }



    function save_artikel()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $this->_create_thumbs($img['file_name']);


                $image = $img['file_name'];
                $judul = $this->input->post('xjudul');
                $slug = $this->input->post('slug');
                $kat = $this->input->post('xkategori');
                $tanggal = $this->input->post('xtanggal');
                $status = $this->input->post('xstatus');
                $isi = $this->input->post('xisi');
                $iduser = $this->session->userdata('id_user');


                $preslug  = strip_tags(htmlspecialchars($this->input->post('slug', TRUE), ENT_QUOTES));
                $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim     = trim($string);
                $praslug  = strtolower(str_replace(" ", "-", $trim));
                $query = $this->db->get_where('artikel', array('slug' => $praslug));
                if ($query->num_rows() > 0) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $xtags[] = $this->input->post('tag');
                foreach ($xtags as $tag) {
                    $tags = @implode(",", $tag);
                }


                $data = [
                    "judul" => $judul,
                    "isi_artikel" => $isi,
                    "tgl_post" => $tanggal,
                    "id_kategori" => $kat,
                    "slug" => $slug,
                    "lihat" => '0',
                    "gambar" => $image,
                    "id_user" => $iduser,
                    "status_artikel" => $status,
                ];
                echo $this->session->set_flashdata('message', 'success');
                $this->M_data->insert_data($data, 'artikel');
                redirect('artikel-admin.js');
            } else {
                echo $this->session->set_flashdata('message', 'error');
                redirect('artikel-admin.js');
            }
        } else {
            redirect('artikel-admin.js');
        }
    }



    function update_artikel()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;
        // $foto_lama = $this->input->post('foto');
        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 500;
                $config['height'] = 320;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $this->_create_thumbs($img['file_name']);

                $image = $img['file_name'];
                $xid = $this->input->post('xid');
                $judul = $this->input->post('xjudul');
                $slug = $this->input->post('slug');
                $kat = $this->input->post('xkategori');
                $tanggal = $this->input->post('xtanggal');
                $status = $this->input->post('xstatus');
                $isi = $this->input->post('xisi');
                $iduser = $this->session->userdata('id_user');
                $foto_lama = $this->input->post('foto');


                $preslug  = strip_tags(htmlspecialchars($this->input->post('slug', TRUE), ENT_QUOTES));
                $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
                $trim     = trim($string);
                $praslug  = strtolower(str_replace(" ", "-", $trim));

                $query = $this->db->get_where('artikel', array('slug' => $praslug));
                if ($query->num_rows() > 1) {
                    $uniqe_string = rand();
                    $slug = $praslug . '-' . $uniqe_string;
                } else {
                    $slug = $praslug;
                }

                $xtags[] = $this->input->post('tag');
                foreach ($xtags as $tag) {
                    $tags = @implode(",", $tag);
                }

                $where = array('id_artikel' => $xid);
                $data = array(
                    "judul" => $judul,
                    "isi_artikel" => $isi,
                    "tgl_post" => $tanggal,
                    "id_kategori" => $kat,
                    "slug" => $slug,
                    // "lihat" => '0',
                    "gambar" => $image,
                    "id_user" => $iduser,
                    "status_artikel" => $status,

                );
                echo $this->session->set_flashdata('message', 'success');
                $this->M_data->update_data($where, $data, 'artikel');
                redirect('artikel-admin.js');
            } else {
                echo $this->session->set_flashdata('message', 'error');
                redirect('artikel-admin.js');
            }
        } else {
            $xid = $this->input->post('xid');
            $judul = $this->input->post('xjudul');
            $slug = $this->input->post('slug');
            $kat = $this->input->post('xkategori');
            $tanggal = $this->input->post('xtanggal');
            $status = $this->input->post('xstatus');
            $isi = $this->input->post('xisi');
            $iduser = $this->session->userdata('id_user');
            $foto_lama = $this->input->post('foto');

            $preslug  = strip_tags(htmlspecialchars($this->input->post('slug', TRUE), ENT_QUOTES));
            $string   = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $preslug);
            $trim     = trim($string);
            $praslug  = strtolower(str_replace(" ", "-", $trim));

            $query = $this->db->get_where('artikel', array('slug' => $praslug));
            if ($query->num_rows() > 1) {
                $uniqe_string = rand();
                $slug = $praslug . '-' . $uniqe_string;
            } else {
                $slug = $praslug;
            }

            $xtags[] = $this->input->post('tag');
            foreach ($xtags as $tag) {
                $tags = @implode(",", $tag);
            }
            $where = array('id_artikel' => $xid);
            $data = array(
                "judul" => $judul,
                "isi_artikel" => $isi,
                "tgl_post" => $tanggal,
                "id_kategori" => $kat,
                "slug" => $slug,
                // "lihat" => '0',
                // "gambar" => $image,
                "id_user" => $iduser,
                "status_artikel" => $status,


            );
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->update_data($where, $data, 'artikel');
            redirect('artikel-admin.js');
        }
    }
    function kategori_artikel()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_kategori_artikel',
            'data' => $this->db->query(" select*from tbl_kategori "),

        );
        $this->load->view('layout/wrapper', $data);
    }


    function add_kategori()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'kategori/v_add_kategori',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function edit_kategori($id)
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'kategori/v_edit_kategori',
            'data' => $this->db->query(" select*from tbl_kategori where id_kategori='$id' ")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function save_kategori()
    {

        $nama = $this->input->post('xnama', TRUE);
        $slug = $this->input->post('slug', TRUE);
        $tgl = date('Y-m-d H:i:s');
        $data = [
            "nama_kategori" => $nama,
            "slug_kategori" => $slug,
            "create_date" => $tgl,
        ];
        $this->M_data->insert_data($data, 'tbl_kategori');
        echo $this->session->set_flashdata('message', 'success');
        redirect('kategori-artikel-admin.js');
    }

    public function update_kategori()
    {

        $id = $this->input->post('xid', TRUE);
        $nama = $this->input->post('xnama', TRUE);
        $slug = $this->input->post('slug', TRUE);
        $tgl = date('Y-m-d H:i:s');
        $where = array('id_kategori' => $id);
        $data = array(
            "nama_kategori" => $nama,
            "slug_kategori" => $slug,
            "create_date" => $tgl,
        );
        $this->M_data->update_data($where, $data, 'tbl_kategori');
        echo $this->session->set_flashdata('message', 'success');
        redirect('kategori-artikel-admin.js');
    }
    public function hapus_kategori()
    {
        $kode = $this->input->post('xkode');
        $this->db->query("DELETE FROM tbl_kategori where id_kategori='$kode'");
        $this->session->set_flashdata('message', 'warning');
        redirect('kategori-artikel-admin.js');
    }

    function hapus_artikel()
    {
        $kode = $this->input->post('xkode');
        $data = $this->input->post('file');
        $path = './assets/images/' . $data;
        unlink($path);
        $this->db->query(" DELETE FROM artikel where id_artikel='$kode' ");
        echo $this->session->set_flashdata('message', 'warning');
        redirect('artikel-admin.js');
    }
    function upload_image()
    {
        if (isset($_FILES["file"]["name"])) {
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('file')) {
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $data['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 800;
                $config['new_image'] = './assets/images/' . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url() . 'assets/images/' . $data['file_name'];
            }
        }
    }
    function _create_thumbs($file_name)
    {
        // Image resizing config
        $config = array(
            array(
                'image_library' => 'GD2',
                'source_image'  => './assets/images/' . $file_name,
                'maintain_ratio' => FALSE,
                'width'         => 370,
                'height'        => 237,
                'new_image'     => './assets/images/thumb' . $file_name
            )
        );

        $this->load->library('image_lib', $config[0]);
        foreach ($config as $item) {
            $this->image_lib->initialize($item);
            if (!$this->image_lib->resize()) {
                return false;
            }
            $this->image_lib->clear();
        }
    }
}
