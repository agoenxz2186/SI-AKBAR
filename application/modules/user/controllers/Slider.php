<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends MX_Controller
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
            'conten' => 'v_slider',
            'data' => $this->db->query("select*from slider"),
        );
        $this->load->view('layout/wrapper', $data);
    }




    function save()
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
                $config['width'] = 1920;
                $config['height'] = 780;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $this->_create_thumbs($img['file_name']);


                $image = $img['file_name'];
                $id = $this->input->post('xkode');
                $title = $this->input->post('xjudul');
                $isi = $this->input->post('xisi');
                $status = $this->input->post('xstatus');
                $foto_lama = $this->input->post('foto');
                $tgl = date('Y-m-d H:i:s');


                $data = [
                    "judul" => $title,
                    "isi" => $isi,
                    "images" => $image,
                    "status_images" => $status,
                    "tgl_create" => $tgl,
                ];
                echo $this->session->set_flashdata('message', 'success');
                $this->M_data->insert_data($data, 'slider');
                redirect('images-slider-admin.js');
            } else {
                echo $this->session->set_flashdata('message', 'error');
                redirect('images-slider-admin.js');
            }
        } else {
            redirect('images-slider-admin.js');
        }
    }


    function update()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;
        $this->upload->initialize($config);

        $id = $this->input->post('xkode');
        $title = $this->input->post('xjudul');
        $isi = $this->input->post('xisi');
        $status = $this->input->post('xstatus');
        $foto_lama = $this->input->post('foto');
        $tgl = date('Y-m-d H:i:s');

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img = $this->upload->data();

                // Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $img['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '60%';
                $config['width'] = 1920;
                $config['height'] = 780;
                $config['new_image'] = './assets/images/' . $img['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $image = $img['file_name'];

                // Hapus gambar lama jika ada
                if ($foto_lama) {
                    $path = './assets/images/' . $foto_lama;
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }

                // Update data dengan gambar baru
                $data = array(
                    "judul" => $title,
                    "isi" => $isi,
                    "status_images" => $status,
                    "tgl_create" => $tgl,
                    "images" => $image
                );
            } else {
                echo $this->session->set_flashdata('message', 'error');
                redirect('images-slider-admin.js');
                return;
            }
        } else {
            // Update data tanpa gambar baru
            $data = array(
                "judul" => $title,
                "isi" => $isi,
                "status_images" => $status,
                "tgl_create" => $tgl,
                "images" => $foto_lama
            );
        }

        $where = array('id' => $id);
        $this->M_data->update_data($where, $data, 'slider');
        echo $this->session->set_flashdata('message', 'success');
        redirect('images-slider-admin.js');
    }

    function update_status()
    {
        $kode = $this->input->post('xkode');
        $status = $this->input->post('xstatus');
        $where = array('id' => $kode);
        $data = array(
            'status_images' => $status
        );
        echo $this->session->set_flashdata('message', 'info');
        $this->M_data->update_data($where, $data, 'slider');
        redirect('images-slider-admin.js');
    }

    function hapus()
    {
        $kode = $this->input->post('xkode');
        $data = $this->input->post('file');
        $path = './assets/images/' . $data;
        unlink($path);
        $this->db->query(" DELETE FROM slider where id='$kode' ");
        echo $this->session->set_flashdata('message', 'warning');
        redirect('images-slider-admin.js');
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
                $config['width'] = 1920;
                $config['height'] = 780;
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
                'width'         => 1920,
                'height'        => 780,
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
