<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Prodi extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library( 'form_validation' );
        $this->load->model( 'M_data' );
    }

    function index() {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_prodi',
            'data' => $this->M_data->show_prodi(),

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function add_prodi() {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'prodi/v_add_prodi',

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function edit_prodi( $id ) {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'prodi/v_edit_prodi',
            'data' => $this->db->query( "select*from prodi where id_prodi='$id'" )->row(),

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    public function save_prodi() {

        $no_anggota = $this->input->post( 'xno_anggota', TRUE );
        $masa_berlaku = $this->input->post( 'xmasa_berlaku', TRUE );
        $nama = $this->input->post( 'xnama', TRUE );
        $jenjang = $this->input->post( 'xjenjang', TRUE );
        $pts = $this->input->post( 'xpts', TRUE );
        $status = $this->input->post( 'xstatus', TRUE );
        $iduser = $this->session->userdata( 'id_user' );

        $tgl = date( 'Y-m-d H:i:s' );
        $data = [

            'nama_prodi' => $nama,
            'masa_berlaku' => $masa_berlaku,
            'no_anggota' => $no_anggota,
            'jenjang' => $jenjang,
            'status_prodi' => $status,
            'pts' => $pts,
            'tgl_create' => $tgl,
            'id_user' => $iduser,
        ];
        $this->M_data->insert_data( $data, 'prodi' );
        echo $this->session->set_flashdata( 'message', 'success' );
        redirect( 'program-studi-admin.js' );
    }

    public function update_prodi() {

        $id = $this->input->post( 'xid', TRUE );
        $no_anggota = $this->input->post( 'xno_anggota', TRUE );
        $masa_berlaku = $this->input->post( 'xmasa_berlaku', TRUE );
        $nama = $this->input->post( 'xnama', TRUE );
        $jenjang = $this->input->post( 'xjenjang', TRUE );
        $pts = $this->input->post( 'xpts', TRUE );
        $status = $this->input->post( 'xstatus', TRUE );
        $iduser = $this->session->userdata( 'id_user' );

        $tgl = date( 'Y-m-d H:i:s' );
        $where = array( 'id_prodi' => $id );
        $data = array(
            'nama_prodi' => $nama,
            'masa_berlaku' => $masa_berlaku,
            'no_anggota' => $no_anggota,
            'jenjang' => $jenjang,
            'status_prodi' => $status,
            'pts' => $pts,
            'tgl_create' => $tgl,
            'id_user' => $iduser,
        );
        $this->M_data->update_data( $where, $data, 'prodi' );
        echo $this->session->set_flashdata( 'message', 'success' );
        redirect( 'program-studi-admin.js' );
    }

    function update_status() {
        $kode = $this->input->post( 'xkode' );
        $status = $this->input->post( 'xstatus' );
        $where = array( 'id_prodi' => $kode );
        $data = array(
            'status_prodi' => $status
        );
        echo $this->session->set_flashdata( 'message', 'info' );
        $this->M_data->update_data( $where, $data, 'prodi' );
        redirect( 'program-studi-admin.js' );
    }

    public function hapus_prodi() {
        $kode = $this->input->post( 'xkode' );
        $this->db->query( "DELETE FROM prodi where id_prodi='$kode'" );
        $this->session->set_flashdata( 'message', 'warning' );
        redirect( 'program-studi-admin.js' );
    }
}