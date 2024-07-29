<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilAptikom extends MX_Controller
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
            'conten' => 'v_sejarah',
            'data' => $this->db->query("select*from sejarah_aptikom")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function update_sejarah()
    {

        $id = $this->input->post('xid', TRUE);
        $nama = $this->input->post('xsejarah', TRUE);
        $tgl = date('Y-m-d H:i:s');
        $where = array('idsj' => $id);
        $data = array(
            "sejarah_aptikom" => $nama,
            "tgl_create" => $tgl,
        );
        $this->M_data->update_data($where, $data, 'sejarah_aptikom');
        echo $this->session->set_flashdata('message', 'success');
        redirect('sejarah-aptikom-admin.js');
    }

    function visimisi()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_visimisi',
            'data' => $this->db->query("select*from visimisi_aptikom")->row(),
        );
        $this->load->view('layout/wrapper', $data);
    }
    public function update_visimisi()
    {

        $id = $this->input->post('xid', TRUE);
        $visi = $this->input->post('xvisi', TRUE);
        $misi = $this->input->post('xmisi', TRUE);
        $tgl = date('Y-m-d H:i:s');
        $where = array('idvm' => $id);
        $data = array(
            "visi" => $visi,
            "misi" => $misi,
            "tgl_create" => $tgl,
        );
        $this->M_data->update_data($where, $data, 'visimisi_aptikom');
        echo $this->session->set_flashdata('message', 'success');
        redirect('visi-misi-aptikom-admin.js');
    }

    function tugasfungsi()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_tugasfungsi',
            'data' => $this->db->query("select*from tujuanft_aptikom")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }
    public function update_tujuanft()
    {

        $id = $this->input->post('xid', TRUE);
        $tujuan = $this->input->post('xtujuan', TRUE);
        $tugas = $this->input->post('xtugas', TRUE);
        $fungsi = $this->input->post('xfungsi', TRUE);
        $tgl = date('Y-m-d H:i:s');
        $where = array('id' => $id);
        $data = array(
            "tujuan" => $tujuan,
            "fungsi" => $fungsi,
            "tugas" => $tugas,
            "tgl_create" => $tgl,
        );
        $this->M_data->update_data($where, $data, 'tujuanft_aptikom');
        echo $this->session->set_flashdata('message', 'success');
        redirect('tujuan-fungsi-tugas-aptikom-admin.js');
    }
    function struktur()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_struktur',
            'data' => $this->db->query("select*from struktur_aptikom")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    function update_struktur()
    {

        $id = $this->input->post('kode');
        $foto_lama = $this->input->post('foto');
        $date = date('dmyhis');
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
                "images" => $image,
            );
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->update_data($where, $data, 'struktur_aptikom');
            redirect('struktur-aptikom-admin.js');
        }
    }
}
