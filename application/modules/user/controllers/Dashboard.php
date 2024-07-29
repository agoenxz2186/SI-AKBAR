<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{


    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('logged_in') != true) {
            $url = base_url('login-admin.js');
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
            'anggota' => $this->db->query("SELECT COUNT(id) AS jumlah FROM anggota")->row(),
            'prodi' => $this->db->query("SELECT COUNT(id_prodi) AS jumlah FROM prodi")->row(),
            'userakses' => $this->db->query("SELECT COUNT(id_user) AS jumlah FROM tbl_user")->row(),
            'info' => $this->db->query("SELECT * FROM informasi_beranda WHERE status_info='1' order by id desc limit 1 ")->row(),
        );
        $this->load->view('layout/wrapper', $data);
    }

    function show_user()
    {
        $data = array(
            'title' => 'Sistem Informasi Pegawai',
            'conten' => 'v_show_user',
            'data' => $this->M_data->show_user(),
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
