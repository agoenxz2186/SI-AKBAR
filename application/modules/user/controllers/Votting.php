<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Votting extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library( 'form_validation' );
        $this->load->model( 'M_data' );
        $this->load->library( 'upload' );
    }

    function index() {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_calonketua',
            'data' => $this->db->query( 'select*from calon_ketua' ),

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function add() {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'calonketua/v_add_calon',
            'data' => $this->db->query( 'select*from calon_ketua' ),

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function edit( $id ) {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'calonketua/v_edit_calon',
            'data' => $this->db->query( "select*from calon_ketua where id='$id'" )->row(),

        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function hasil_votting() {

        $hasil = $this->db->query( "
                 SELECT 
                    a.`id_calon`,
                    COUNT(*) AS total_votes,
                    b.`nama`,
                    b.`no_urut`,
                    b.`images`
                    FROM 
                    detail_votting a
                    LEFT JOIN 
                    calon_ketua b
                    ON 
                    a.`id_calon` = b.`id`
                    GROUP BY 
                    a.`id_calon`, b.`nama`, b.`no_urut`, b.`images`
                    ORDER BY  total_votes  desc
                    

                            " )->result();

        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_hasil_votting',
            'data'=>$hasil,
        );
        $this->load->view( 'layout/wrapper', $data );
    }

    function save_calon()
    {


        $nomor = $this->input->post('xnomor');
        $nama = $this->input->post('xnama');
        $visi = $this->input->post('xvisi');
        $misi = $this->input->post('xmisi');
        $status = $this->input->post('xstatus');
        $iduser = $this->session->userdata('id_user');

        $date = date('dmyhis');
        $tgl = date('Y-m-d H:i:s');
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = false;
        $config['file_name'] = $date;
        $this->upload->initialize($config);
        //var_dump($this->upload->do_upload('filefoto'));exit();
        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $img_about = $this->upload->data();
                $image = $img_about['file_name'];
            }
            $data = array(
                "no_urut" => $nomor,
                "nama" => $nama,
                "visi" => $visi,
                "misi" => $misi,
                "images" => $image,
                "status" => $status,
                "tgl_create" => $tgl,
                "id_user" => $iduser,


            );
            // var_dump($data);
            // die;
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->insert_data($data, 'calon_ketua');
            redirect('calon-ketua-admin.js');
        }
    }
    function update()
    {
        $id = $this->input->post('xid');
        $nomor = $this->input->post('xnomor');
        $nama = $this->input->post('xnama');
        $visi = $this->input->post('xvisi');
        $misi = $this->input->post('xmisi');
        $status = $this->input->post('xstatus');
        $iduser = $this->session->userdata('id_user');
        $foto_lama = $this->input->post('foto');
        $date = date('dmyhis');
        $tgl = date('Y-m-d H:i:s');
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['encrypt_name'] = false;
        $config['file_name'] = $date . $id;

        $this->upload->initialize($config);
        //var_dump($this->upload->do_upload('filefoto'));exit();
        if (!empty($_FILES['filefoto']['name'])) {
            unlink('./assets/images/' . $foto_lama);
            if ($this->upload->do_upload('filefoto')) {
                $img_about = $this->upload->data();
                $image = $img_about['file_name'];
            }
            $where = array('id' => $id);
            $data = array(
                "no_urut" => $nomor,
                "nama" => $nama,
                "visi" => $visi,
                "misi" => $misi,
                "images" => $image,
                "status" => $status,
                "tgl_create" => $tgl,
                "id_user" => $iduser,

            );
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->update_data($where, $data, 'calon_ketua');
            redirect('calon-ketua-admin.js');
        } else {
            $where = array('id' => $id);
            $data = array(
                "no_urut" => $nomor,
                "nama" => $nama,
                "visi" => $visi,
                "misi" => $misi,
                // "images" => $image,
                "tgl_create" => $tgl,

            );
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->update_data($where, $data, 'calon_ketua');
            redirect('calon-ketua-admin.js');
        }
    }

    function update_status() {
        $kode = $this->input->post( 'xkode' );
        $status = $this->input->post( 'xstatus' );
        $where = array( 'id' => $kode );
        $data = array(
            'status' => $status
        );
        echo $this->session->set_flashdata( 'message', 'info' );
        $this->M_data->update_data( $where, $data, 'calon_ketua' );
        redirect( 'calon-ketua-admin.js' );
    }

    function hapus() {
        $kode = $this->input->post( 'xkode' );
        $data = $this->input->post( 'file' );
        $path = './assets/images/' . $data;
        unlink( $path );
        $this->db->query( " DELETE FROM calon_ketua where id='$kode' " );
        echo $this->session->set_flashdata( 'message', 'warning' );
        redirect( 'calon-ketua-admin.js' );
    }
}