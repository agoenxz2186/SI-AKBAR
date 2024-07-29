<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akses extends MX_Controller
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
            'conten' => 'v_user',
        );
        $this->load->view('layout/wrapper', $data);
    }
}
