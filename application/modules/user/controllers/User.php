<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MX_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_data');
    }
    function index()
    {

        if ($this->session->userdata('username') != '' && $this->session->userdata('id_role') == '1') {
            echo "<script>window.location='" . base_url('dashboard.js') . "';</script>";
        } else if ($this->session->userdata('username') != '' && $this->session->userdata('id_role') == '2') {
            echo "<script>window.location='" . base_url('halaman-pegawai.js') . "';</script>";
        } else if ($this->session->userdata('username') != '' && $this->session->userdata('id_role') == '3') {
            echo "<script>window.location='" . base_url('halaman-pegawai.js') . "';</script>";
        } else if ($this->session->userdata('username') != '' && $this->session->userdata('id_role') == '4') {
            echo "<script>window.location='" . base_url('halaman-pegawai.js') . "';</script>";
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username Harus diisi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            $this->auth();
        }
    }

    function auth()
    {
        $username = str_replace("'", "", htmlspecialchars($this->input->post('username'), ENT_QUOTES));
        $password = str_replace("'", "", htmlspecialchars($this->input->post('password'), ENT_QUOTES));
        $cadmin =  $this->db->query("SELECT * FROM tbl_user WHERE username='$username' AND password=md5('$password')");

        if ($cadmin->num_rows() > 0) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('username', $username);
            $xcadmin = $cadmin->row_array();
            $cek = $this->db->query("select*from tbl_user where username='$username'")->row();
            if ($cek->status_user == '1') {

                if ($xcadmin['role_id'] == '1' || $xcadmin['role_id'] == '2') {
                    $this->session->set_userdata('akses', '1');
                    $idadmin = $xcadmin['id_user'];
                    $username = $xcadmin['username'];
                    $nama = $xcadmin['nama_user'];
                    $pt = $xcadmin['role_id'];
                    $this->session->set_userdata('role_id', $pt);
                    $this->session->set_userdata('id_user', $idadmin);
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('nama_user', $nama);
                    redirect('dashboard-admin.js');
                }
            } else {
                $this->session->set_flashdata('message', 'warning');

                redirect('login-admin.js');
            }
        } else {
            $this->session->set_flashdata('message', 'error');
            redirect('login-admin.js');
        }
    }

    function gagallogin()
    {
        echo $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
        redirect('login.js');
    }


    public function reset_password()
    {

        $iduser = $this->session->userdata('id_user');
        $password = $this->input->post('xpassword');
        $konfirm_password = $this->input->post('xpassword1');
        if (empty($password) && empty($konfirm_password)) {
            $this->session->set_flashdata('message', 'error');
            redirect('dashboard.js');
        } elseif ($password != $konfirm_password) {
            $this->session->set_flashdata('message', 'error');
            redirect('dashboard.js');
        } else {
            $data = array(
                'password' => md5($password),
                'pass_64' => base64_encode($password),
            );
            $where = array('id_user' => $iduser);
            $this->db->where($where);
            $this->db->update('users', $data);

            $this->session->set_flashdata('message', 'info');
            redirect('dashboard.js');
        }
    }


    function show_user()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_user',
            'data' => $this->M_data->show_user(),
        );
        $this->load->view('layout/wrapper', $data);
    }

    function add_user()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'user/v_add_user',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function edit_user($id)
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'user/v_edit_user',
            'data' => $this->db->query("select*from tbl_user where id_user='$id'")->row(),
        );

        $this->load->view('layout/wrapper', $data);
    }
    public function save_user()
    {
        $nama = $this->input->post('xnama', TRUE);
        $username = $this->input->post('xusername', TRUE);
        $xrole = $this->input->post('xrole', TRUE);
        $pass = $this->input->post('xpassword', TRUE);
        $status = $this->input->post('xstatus', TRUE);
        $password_user = $pass;
        $pass_64 = base64_encode($password_user);
        $pass_md5 = md5($password_user);
        $tgl = date('Y-m-d H:i:s');
        $data = [
            "role_id" => $xrole,
            "nama_user" => $nama,
            "username" => $username,
            "password" => $pass_md5,
            "pass_64" => $pass_64,
            "status_user" => $status,
            "tgl_create" => $tgl,
        ];
        $this->M_data->insert_data($data, 'tbl_user');
        echo $this->session->set_flashdata('message', 'success');
        redirect('user-akses-aptikom-admin.js');
    }

    function update_user()
    {

        $id = $this->input->post('xid');
        $nama = $this->input->post('xnama', TRUE);
        $username = $this->input->post('xusername', TRUE);
        $xrole = $this->input->post('xrole', TRUE);
        $pass = $this->input->post('xpassword', TRUE);
        $status = $this->input->post('xstatus', TRUE);
        $password_user = $pass;
        $pass_64 = base64_encode($password_user);
        $pass_md5 = md5($password_user);
        $tgl = date('Y-m-d H:i:s');

        $where1 = array('id_user' => $id);
        $data1 = array(
            "role_id" => $xrole,
            "nama_user" => $nama,
            "username" => $username,
            "password" => $pass_md5,
            "pass_64" => $pass_64,
            "status_user" => $status,
            "tgl_create" => $tgl,
        );
        $this->M_data->update_data($where1, $data1, 'tbl_user');
        echo $this->session->set_flashdata('message', 'info');
        redirect('user-akses-aptikom-admin.js');
    }

    function resetpassuser()
    {
        $kode = $this->input->post('xkode');
        $password_user = 'aptikom';
        // $password_user = $kode;
        $pass_64 = base64_encode($password_user);
        $pass_md5 = md5($password_user);
        $where = array('id_user' => $kode);
        $data = array(
            'password' => $pass_md5,
            'pass_64' => $pass_64,
        );
        echo $this->session->set_flashdata('message', 'info');
        $this->M_data->update_data($where, $data, 'tbl_user');
        redirect('user-akses-aptikom-admin.js');
    }
    function update_status()
    {
        $kode = $this->input->post('xkode');
        $status = $this->input->post('xstatus');
        $where = array('id_user' => $kode);
        $data = array(
            'status_user' => $status
        );
        echo $this->session->set_flashdata('message', 'info');
        $this->M_data->update_data($where, $data, 'tbl_user');
        redirect('user-akses-aptikom-admin.js');
    }
    public function hapus_user()
    {
        $kode = $this->input->post('xkode');
        $this->db->query("DELETE FROM tbl_user where id_user='$kode'");
        $this->session->set_flashdata('message', 'warning');
        redirect('user-akses-aptikom-admin.js');
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', 'info');
        $url = base_url('login-admin.js');
        redirect($url);
    }
}
