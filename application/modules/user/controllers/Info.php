<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends MX_Controller
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
            'conten' => 'info/v_info',
            'data' => $this->db->query("select*from informasi_beranda"),
        );
        $this->load->view('layout/wrapper', $data);
    }

    function save()
    {
        $id = $this->input->post('xkode');
        $title = $this->input->post('xjudul');
        $isi = $this->input->post('xisi');
        $status = $this->input->post('xstatus');
        $foto_lama = $this->input->post('foto');
        $date = date('dmyhis');
        $tgl = date('Y-m-d H:i:s');
        $config['upload_path'] = './assets/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name'] = false;
        $config['file_name'] = $date . $id;

        $this->upload->initialize($config);
        //var_dump($this->upload->do_upload('filefoto'));exit();
        if (!empty($_FILES['filedokumen']['name'])) {
            unlink('./assets/dokumen/' . $foto_lama);
            if ($this->upload->do_upload('filedokumen')) {
                $img_about = $this->upload->data();
                $image = $img_about['file_name'];
            }
            $data = array(
                "judul" => $title,
                "deskripsi" => $isi,
                "file" => $image,
                "status_info" => $status,
                "tgl_create" => $tgl,

            );
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->insert_data($data, 'informasi_beranda');
            redirect('informasi-beranda.js');
        }
    }
    function update()
    {
        $id = $this->input->post('xkode');
        $title = $this->input->post('xjudul');
        $isi = $this->input->post('xisi');
        $status = $this->input->post('xstatus');
        $foto_lama = $this->input->post('file1');
        $date = date('dmyhis');
        $tgl = date('Y-m-d H:i:s');
        $config['upload_path'] = './assets/dokumen/';
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name'] = false;
        $config['file_name'] = $date . $id;

        $this->upload->initialize($config);
        //var_dump($this->upload->do_upload('filefoto'));exit();
        if (!empty($_FILES['filedokumen']['name'])) {
            unlink('./assets/dokumen/' . $foto_lama);
            if ($this->upload->do_upload('filedokumen')) {
                $img_about = $this->upload->data();
                $image = $img_about['file_name'];
            }
            $where = array('id' => $id);
            $data = array(
                "judul" => $title,
                "deskripsi" => $isi,
                "file" => $image,
                "status_info" => $status,
                "tgl_create" => $tgl,

            );
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->update_data($where, $data, 'informasi_beranda');
            redirect('informasi-beranda.js');
        } else {
            $where = array('id' => $id);
            $data = array(
                "judul" => $title,
                "deskripsi" => $isi,
                "status_info" => $status,
                "tgl_create" => $tgl,

            );
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->update_data($where, $data, 'informasi_beranda');
            redirect('informasi-beranda.js');
        }
    }

    function update_status()
    {
        $kode = $this->input->post('xkode');
        $status = $this->input->post('xstatus');
        $where = array('id' => $kode);
        $data = array(
            'status_info' => $status
        );
        echo $this->session->set_flashdata('message', 'info');
        $this->M_data->update_data($where, $data, 'informasi_beranda');
        redirect('informasi-beranda.js');
    }

    function hapus()
    {
        $kode = $this->input->post('xkode');
        $data = $this->input->post('file');
        $path = './assets/dokumen/' . $data;
        unlink($path);
        $this->db->query(" DELETE FROM informasi_beranda where id='$kode' ");
        echo $this->session->set_flashdata('message', 'warning');
        redirect('informasi-beranda.js');
    }
}
