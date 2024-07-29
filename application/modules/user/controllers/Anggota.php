<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Anggota extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library( 'form_validation' );
        $this->load->model( 'M_data' );
    }

    function index() {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_anggota',
            'data' => $this->M_data->show_anggota(),

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function verifikasi_anggota() {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_anggota_verifikasi',
            'data' => $this->M_data->show_anggota_verifikasi(),

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function update_status() {
        $kode = $this->input->post('xkode');
        $status = $this->input->post('xstatus');
        $where = array('id' => $kode);
        $data = array(
            'status_anggota' => $status
        );
        $this->M_data->update_data($where, $data, 'anggota');
        $this->session->set_flashdata('message', 'info');
        redirect('anggota-admin.js');
    }
    

    public function hapus_anggota() {
        $kode = $this->input->post( 'xkode' );
        $this->db->query( "DELETE FROM anggota where id='$kode'" );
        $this->session->set_flashdata( 'message', 'warning' );
        redirect( 'anggota-admin.js' );
    }

    function update_status1() {
        $kode = $this->input->post( 'xkode' );
        $status = $this->input->post( 'xstatus' );
        $where = array( 'id' => $kode );
        $data = array(
            'status_anggota' => $status
        );
        echo $this->session->set_flashdata( 'message', 'info' );
        $this->M_data->update_data( $where, $data, 'anggota' );
        redirect( 'anggota-verifikasi-admin.js' );
    }

    function update_verifikasi() {
        $kode = $this->input->post( 'xkode' );
        $status = $this->input->post( 'xstatus' );
        $where = array( 'id' => $kode );
        $data = array(
            'verifikasi' => $status
        );
        echo $this->session->set_flashdata( 'message', 'info' );
        $this->M_data->update_data( $where, $data, 'anggota' );
        redirect( 'anggota-admin.js' );
    }

    public function hapus_anggota1() {
        $kode = $this->input->post( 'xkode' );
        $this->db->query( "DELETE FROM anggota where id='$kode'" );
        $this->session->set_flashdata( 'message', 'warning' );
        redirect( 'anggota-verifikasi-admin.js' );
    }

    
}