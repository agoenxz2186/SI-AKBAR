<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inbox extends MX_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_data');
    }


    function index()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_inbox',
            'data' => $this->db->query("select*from inbox"),

        );
        $this->load->view('layout/wrapper', $data);
    }
    public function hapus_pesan()
    {
        $kode = $this->input->post('xkode');
        $this->db->query("DELETE FROM inbox where id='$kode'");
        $this->session->set_flashdata('message', 'warning');
        redirect('inbox-aptikom-admin.js');
    }
}
