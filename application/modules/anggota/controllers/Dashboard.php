<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != true) {
            $url = base_url('login.js');
            redirect($url);
        };

        $this->load->library('form_validation');
        $this->load->model('M_data');
    }


    function index()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_dashboard',
            'info' => $this->db->query("SELECT * FROM informasi_beranda WHERE status_info='1' order by id desc limit 1 ")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }


    function show_anggota()
    {
        $id = $this->session->userdata('id_anggota');
        // var_dump($id);
        // die;
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_anggota',
            'b' => $this->db->query("select*from anggota_prodi where id_anggota='$id'")->row(),
        );

        $this->load->view('layout/wrapper', $data);
    }


    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', 'info');
        $url = base_url('login.js');
        redirect($url);
    }
}
