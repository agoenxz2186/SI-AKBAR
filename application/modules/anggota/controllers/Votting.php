<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Votting extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library( 'form_validation' );
        $this->load->model( 'M_data' );
    }

    function index() {
        $id = $this->session->userdata( 'id_anggota' );
        $pe             = $this->db->query( "SELECT * FROM anggota WHERE id_anggota='$id'" )->row();
        if ( $pe->lahir_tempat == '' || $pe->lahir_tanggal == '' || $pe->jns_k == '' || $pe->nohp == '' || $pe->email == '' || $pe->masa_berlaku == '' ) {
            $this->session->set_flashdata( 'error', 'Pengisian data belum lengkap' );
            redirect( base_url() . 'data-pribadi-anggota.js' );
            die;
        } else if ( $pe->verifikasi == '1' ) {
            $this->session->set_flashdata( 'error', 'Data Anda Belum Diverifikasi Oleh Admin' );
            redirect( base_url() . 'data-pribadi-anggota.js' );
            die;
        }
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_calonketua',
            'datacalon' => $this->db->query( "SELECT * FROM calon_ketua WHERE status='1'" ),
        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function vottingcalon() {
        $iduser = $this->session->userdata( 'id' );
        $idvoting = $this->input->post( 'xkode', TRUE );
        $tgl = date( 'Y-m-d H:i:s' );
        $cek = $this->db->get_where( 'detail_votting', array( 'id_anggota' => $iduser ) );
        if ( $cek->num_rows() <= 0 ) {

            $data = [
                'id_calon' => $idvoting,
                'id_anggota' => $iduser,
                'jumlah_vot' => 1,
                'tgl_vot' => $tgl,
                'status_vot' => 2,
            ];
            $this->M_data->insert_data( $data, 'detail_votting' );
            echo $this->session->set_flashdata( 'message', 'success' );
            redirect( 'data-calon-ketua-anggota.js' );
        } else {
            echo $this->session->set_flashdata( 'message', 'info' );
            redirect( 'data-calon-ketua-anggota.js' );
        }
    }

    function hasil_votting() {
        $iduser = $this->session->userdata( 'id' );

        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_detail_vot',
            'hasilvoting' => $this->db->query( "SELECT a.id_calon,a.jumlah_vot,a.tgl_vot,
            b.nama,b.no_urut,b.images,c.nama_anggota,c.id_anggota
                        
                        FROM detail_votting a
                         LEFT JOIN calon_ketua b ON a.id_calon = b.id
                          LEFT JOIN anggota  c ON a.id_anggota=c.id_anggota
                        WHERE a.id_anggota='$iduser'" )->row(),

        );

        $this->load->view( 'layout/wrapper', $data );
    }

    public function updatepribadi() {
        $id = $this->session->userdata( 'id' );

        $data = array(
            'nama_anggota' => $this->input->post( 'xnama', true ),
            'email' => $this->input->post( 'xemail', true ),
            'nohp' => $this->input->post( 'xnohp', true ),
            'lahir_tempat' => $this->input->post( 'xtmplh', true ),
            'lahir_tanggal' => $this->input->post( 'xtgllh', true ),
            'jns_k' => $this->input->post( 'xjk', true ),
            'masa_berlaku' => $this->input->post( 'xmasa', true ),
            'pts' => $this->input->post( 'xkmpus', true ),
            'prodi' => $this->input->post( 'xilmu', true ),
            'create_at' => date( 'Y-m-d H:i:s' ),
        );

        $result = $this->db->where( 'id', $id )->update( 'anggota', $data );

        if ( $result ) {
            $this->session->set_flashdata( 'message', 'Data berhasil diupdate' );
        } else {
            $this->session->set_flashdata( 'error', 'Gagal update data: ' . $this->db->error()[ 'message' ] );
        }

        redirect( 'data-pribadi-anggota.js' );
    }
}