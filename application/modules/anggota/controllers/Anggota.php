 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_data');
    }

    function index()
    {
        $iduser = $this->session->userdata('id_anggota');
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_anggota',
            'b' => $this->db->query("select*from anggota where id_anggota='$iduser'")->row(),
        );

        // var_dump( $data );
        // die;

        $this->load->view('layout/wrapper', $data);
    }

    function auth()
    {
        $username = str_replace("'", '', htmlspecialchars($this->input->post('username'), ENT_QUOTES));
        $password = str_replace("'", '', htmlspecialchars($this->input->post('password'), ENT_QUOTES));
        $cadmin =  $this->db->query("SELECT * FROM anggota WHERE id_anggota='$username' AND pass=md5('$password')");
        // var_dump( $cadmin );
        // die;
        if ($cadmin->num_rows() > 0) {
            $this->session->set_userdata('masuk', true);
            $this->session->set_userdata('username', $username);
            $xcadmin = $cadmin->row_array();
            $cek = $this->db->query("select*from anggota where id_anggota='$username'")->row();

            if ($cek->status_anggota == '1' && $cek->jns_anggota == '1') {

                $this->session->set_userdata('akses', '1');
                $idadmin = $xcadmin['id_anggota'];
                $id = $xcadmin['id'];
                $nama = $xcadmin['nama_anggota'];
                $this->session->set_userdata('id_anggota', $idadmin);
                $this->session->set_userdata('id', $id);
                $this->session->set_userdata('nama_anggota', $nama);
                echo $this->session->set_flashdata('success', 'Data Berhasil Login');

                redirect('dashboard-anggota.js');
            } else {
                $this->session->set_flashdata('message', 'warning');

                redirect('login.js');
            }
        } else {
            $this->session->set_flashdata('message', 'error');
            redirect('login.js');
        }
    }

    function verifikasi_anggota()
    {
        $data = array(
            'title' => 'Sistem Informasi Aptikom',
            'conten' => 'v_anggota_verifikasi',
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function kirimemail()
    {
        $email = $this->input->post('email');

        // Cek apakah email ada di database
        $anggota =  $this->db->query("Select * from anggota where email = '$email'")->row();

        if ($anggota) {
            $token = md5(uniqid(rand(), true));

            $data = array(
                'tokenreset' => $token,
                'statusreset' => 1,
                'reset_token_created' => date('Y-m-d H:i:s')
            );

            $this->db->where('email', $email);
            $this->db->update('anggota', $data);

            $config = array(
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_user' => 'aptikom.kalbarpnk@gmail.com',
                'smtp_pass' => 'fqbhpmcgncetgfli',
                'smtp_crypto' => 'tls',
                'smtp_port'   => 587,
                'crlf'    => "\r\n",
                'newline' => "\r\n"
            );

            $this->load->library('email', $config);


            $this->email->from('aptikom.kalbarpnk@gmail.com', 'Aptikom');
            $this->email->to($email);
            $this->email->subject('Reset Password Aptikom');
            $this->email->message('Silakan klik link berikut untuk mereset password Anda: ' . base_url() . 'home/reset_password/' . $token);

            // Kirim email
            if ($this->email->send()) {
                echo "<script>
                    alert('Email berhasil dikirim. Silakan periksa email Anda.');
                    window.location.href = '" . base_url('lupa-password.js') . "';
                </script>";
            } else {
                echo "<script>
                    alert('Gagal mengirim email. Silakan coba lagi nanti.');
                    window.location.href = '" . base_url('lupa-password.js') . "';
                </script>";
            }
        } else {
            echo "<script>
                alert('Email tidak ditemukan dalam database.');
                window.location.href = '" . base_url('lupa-password.js') . "';
            </script>";
        }
    }

    // public function kirimemail() {
    //     // Konfigurasi email
    //     $config = array(
    //         'mailtype' => 'html',
    //         'charset' => 'utf-8',
    //         'protocol' => 'smtp',
    //         'smtp_host' => 'smtp.gmail.com',
    //         'smtp_user' => 'aptikom.kalbarpnk@gmail.com',
    //         'smtp_pass' => 'fqbhpmcgncetgfli',
    //         'smtp_crypto' => 'tls',
    //         'smtp_port'   => 587,
    //         'crlf'    => "\r\n",
    //         'newline' => "\r\n"
    //     );

    //     $this->load->library( 'email', $config );
    //     $this->email->from( 'aptikom.kalbarpnk@gmail.com', 'BIPEMAS-UBSI' );
    //     $this->email->to( 'alimustopa.aop@gmail.com' );
    //     $this->email->subject( 'Informasi Pengajuan BIPEMAS-UBSI' );
    //     $this->email->message( '<p>Kepada </p>' );

    //     if ( $this->email->send() ) {
    //         echo 'Email berhasil dikirim.';
    //     } else {
    //         // Menampilkan error jika pengiriman email gagal
    //         echo 'Gagal mengirim email. Error: ' . $this->email->print_debugger();
    //     }
    // }

    public function updatepass()
    {
        $token = $this->input->post('token');
        $password = $this->input->post('password');
        $password_confirmasi = $this->input->post('password_confirmasi');

        // Validasi manual
        if (empty($password) || empty($password_confirmasi)) {
            echo "<script>
                alert('Password dan konfirmasi password harus diisi.');
                window.location.href = '" . base_url('home/reset_password/' . $token) . "';
            </script>";
            return;
        }

        if ($password !== $password_confirmasi) {
            echo "<script>
                alert('Password dan konfirmasi password tidak sama.');
                window.location.href = '" . base_url('home/reset_password/' . $token) . "';
            </script>";
            return;
        }

        if (strlen($password) < 6) {
            echo "<script>
                alert('Password harus minimal 6 karakter.');
                window.location.href = '" . base_url('home/reset_password/' . $token) . "';
            </script>";
            return;
        }

        // Cari anggota berdasarkan token
        $anggota = $this->db->get_where('anggota', array('tokenreset' => $token))->row();

        if ($anggota) {
            // Hash password baru
            $hashed_password = md5($password);
            $pass64 = base64_encode($password);

            // Update password anggota
            $this->db->where('tokenreset', $token);
            $this->db->update('anggota', array('pass' => $hashed_password, 'pass_64' => $pass64, 'statusreset' => 0, 'tokenreset' => NULL));

            // Set pesan berhasil dan redirect
            echo "<script>
                alert('Password berhasil diupdate. Silakan login dengan password baru Anda.');
                window.location.href = '" . base_url('login.js') . "';
            </script>";
        } else {
            // Jika token tidak ditemukan, kembalikan ke form dengan pesan kesalahan
            echo "<script>
                alert('Token tidak valid atau telah kedaluwarsa.');
                window.location.href = '" . base_url('home/reset_password/' . $token) . "';
            </script>";
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', 'info');
        $url = base_url('login.js');
        redirect($url);
    }
}