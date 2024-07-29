<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konferensi extends MX_Controller
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
            'conten' => 'v_konferensi',
            'data' => $this->db->query("SELECT a.*, b.nama_konfrens,c.nama_user
            FROM konferensi AS a
            LEFT JOIN kategori_konfrens AS b ON a.id_kategori=b.id_konfrens 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user ")
        );
        $this->load->view('layout/wrapper', $data);
    }

    function kategori_konferensi()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_kategori_konferensi',
            'data' => $this->db->query(" select*from kategori_konfrens "),

        );
        $this->load->view('layout/wrapper', $data);
    }

    function add_kategori()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'kategori_konfrens/v_add_kategori',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function edit_kategori($id)
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'kategori_konfrens/v_edit_kategori',
            'data' => $this->db->query(" select*from kategori_konfrens where id_konfrens='$id' ")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function save_kategori()
    {

        $nama = $this->input->post('xnama', TRUE);
        $slug = $this->input->post('xslug', TRUE);
        $tgl = date('Y-m-d H:i:s');
        $data = [
            "nama_konfrens" => $nama,
            "slug" => $slug,
            "tgl_create" => $tgl,
        ];
        $this->M_data->insert_data($data, 'kategori_konfrens');
        echo $this->session->set_flashdata('message', 'success');
        redirect('kategori-konferensi-admin.js');
    }

    public function update_kategori()
    {

        $id = $this->input->post('xid', TRUE);
        $nama = $this->input->post('xnama', TRUE);
        $slug = $this->input->post('xslug', TRUE);
        $tgl = date('Y-m-d H:i:s');
        $where = array('id_konfrens' => $id);
        $data = array(
            "nama_konfrens" => $nama,
            "slug" => $slug,
            "tgl_create" => $tgl,
        );
        $this->M_data->update_data($where, $data, 'kategori_konfrens');
        echo $this->session->set_flashdata('message', 'success');
        redirect('kategori-konferensi-admin.js');
    }
    public function hapus_kategori()
    {
        $kode = $this->input->post('xkode');
        $this->db->query("DELETE FROM kategori_konfrens where id_konfrens='$kode'");
        $this->session->set_flashdata('message', 'warning');
        redirect('kategori-konferensi-admin.js');
    }


    function add_artikel()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'konferensi/v_add_data',
        );
        $this->load->view('layout/wrapper', $data);
    }
    function edit_artikel($id)
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'konferensi/v_edit_data',
            'data' => $this->db->query("select*from konferensi where id_artikel='$id'")->row(),
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
                $query = $this->db->get_where('konferensi', array('slug' => $praslug));
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
                $this->M_data->insert_data($data, 'konferensi');
                redirect('konferensi-admin.js');
            } else {
                echo $this->session->set_flashdata('message', 'error');
                redirect('konferensi-admin.js');
            }
        } else {
            redirect('konferensi-admin.js');
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

                $query = $this->db->get_where('konferensi', array('slug' => $praslug));
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
                $this->M_data->update_data($where, $data, 'konferensi');
                redirect('konferensi-admin.js');
            } else {
                echo $this->session->set_flashdata('message', 'error');
                redirect('konferensi-admin.js');
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

            $query = $this->db->get_where('konferensi', array('slug' => $praslug));
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
            $this->M_data->update_data($where, $data, 'konferensi');
            redirect('konferensi-admin.js');
        }
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
    function hapus_artikel()
    {
        $kode = $this->input->post('xkode');
        $data = $this->input->post('file');
        $path = './assets/images/' . $data;
        unlink($path);
        $this->db->query(" DELETE FROM konferensi where id_artikel='$kode' ");
        echo $this->session->set_flashdata('message', 'warning');
        redirect('konferensi-admin.js');
    }
}
