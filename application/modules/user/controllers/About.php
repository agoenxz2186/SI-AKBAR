<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class About extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library( 'form_validation' );
        $this->load->model( 'M_data' );
        $this->load->library( 'upload' );
    }

    function index() {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_about',
            'data' => $this->db->query( 'select*from about_website' )->row(),

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function update_site() {

        $id = $this->input->post( 'xkode' );
        $title = $this->input->post( 'xjudul' );
        $email = $this->input->post( 'xemail' );
        $telpon = $this->input->post( 'xtelpon' );
        $alamat = $this->input->post( 'xalamat' );
        $foto_lama = $this->input->post( 'foto' );
        $fb = $this->input->post( 'xfb' );
        $ig = $this->input->post( 'xig' );
        $youtube = $this->input->post( 'xyoutube' );
        $wa = $this->input->post( 'xwa' );
        $isi = $this->input->post( 'xisi' );
        $tampil_vote = $this->input->post( 'tampil_vote' );

        $date = date( 'dmyhis' );
        $config[ 'upload_path' ] = './assets/images/';
        $config[ 'allowed_types' ] = 'jpg|png|jpeg';
        $config[ 'encrypt_name' ] = false;
        $config[ 'file_name' ] = $date . $id;

        $this->upload->initialize( $config );
        //var_dump( $this->upload->do_upload( 'filefoto' ) );
        // exit();
        if ( !empty( $_FILES[ 'filefoto' ][ 'name' ] ) ) {
            unlink( './assets/images/' . $foto_lama );
            if ( $this->upload->do_upload( 'filefoto' ) ) {
                $img_about = $this->upload->data();
                $image = $img_about[ 'file_name' ];
            }
            $where = array( 'id' => $id );
            $data = array(
                'judul' => $title,
                'email' => $email,
                'telpon' => $telpon,
                'alamat' => $alamat,
                'images' => $image,
                'facebook' => $fb,
                'instagram' => $ig,
                'whatsap' => $wa,
                'youtube' => $youtube,
                'deskripsi' => $isi,
                'tampil_vote' => $tampil_vote,
            );
            echo $this->session->set_flashdata( 'message', 'success' );
            $this->M_data->update_data( $where, $data, 'about_website' );
            redirect( 'about-aptikom-admin.js' );
        } else {
            $where = array( 'id' => $id );
            $data = array(
                'judul' => $title,
                'email' => $email,
                'telpon' => $telpon,
                'alamat' => $alamat,
                'facebook' => $fb,
                'instagram' => $ig,
                'whatsap' => $wa,
                'youtube' => $youtube,
                'deskripsi' => $isi,
                'tampil_vote' => $tampil_vote,

            );
            echo $this->session->set_flashdata( 'message', 'success' );
            $this->M_data->update_data( $where, $data, 'about_website' );
            redirect( 'about-aptikom-admin.js' );
        }
    }
}