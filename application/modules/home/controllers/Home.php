<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->library('upload');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),

            'conten' => 'index',
            'slider' => $this->db->query("select*from slider where status_images='1'"),
            'artikel' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
			FROM artikel AS a
			LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
			LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel desc limit 3 "),

            'konferensi' => $this->db->query("SELECT a.*, b.nama_konfrens,c.nama_user
            FROM konferensi AS a
            LEFT JOIN kategori_konfrens AS b ON a.id_kategori=b.id_konfrens 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel desc limit 3 "),

            'latepost_artikel' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
            FROM artikel AS a
            LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel asc limit 3 "),

            'brand' => $this->db->query("SELECT DISTINCT gambar FROM artikel WHERE status_artikel='1' AND gambar IS NOT NULL GROUP BY gambar")->result()
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function search()
    {
        $query = strip_tags(htmlspecialchars($this->input->get('search_query', true), ENT_QUOTES));

        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_search',
            'judul' => $query,
            'data' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
			FROM artikel AS a
			LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
			LEFT JOIN tbl_user AS c ON a.id_user=c.id_user
			WHERE a.judul LIKE '%$query%' OR b.nama_kategori LIKE '%$query%' LIMIT 12"),
            'latepost_artikel' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
            FROM artikel AS a
            LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel asc limit 5 "),
                    );

        $this->load->view('layout/wrapper', $data);
    }

    public function sejarah()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_sejarah',
            'data' => $this->db->query('select*from sejarah_aptikom')->row(),
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function visimisi()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_visimisi',
            'data' => $this->db->query('select*from visimisi_aptikom')->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function tugasfungsi()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_tugasfungsi',
            'data' => $this->db->query('select*from tujuanft_aptikom')->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function Struktur()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_struktur',
            'data' => $this->db->query('select*from struktur_aptikom')->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function keanggotaan()
    {
        $about = $this->db->query('select * from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select * from about_website')->row(),
            'conten' => 'v_keanggotaan',
            'data' => $this->db->query("select * from anggota"),
        );
        $this->load->view('layout/wrapper', $data);
    }
    

    public function keanggotaanprodi()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_keanggotaan_prodi',
            'data' => $this->db->query('select*from prodi'),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function Data_prodi()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_data_prodi',
            'data' => $this->db->query('select*from prodi'),
            'aktif' => $this->db->query("select count(id_prodi) as jumlah from prodi where status_prodi='1'")->row(),
            'nonaktif' => $this->db->query("select count(id_prodi) as jumlah from prodi where status_prodi='2'")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function Data_grafik()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_data_grafik',
            'aktif' => $this->db->query("select count(id_prodi) as jumlah from prodi where status_prodi='1'")->row(),
            'nonaktif' => $this->db->query("select count(id_prodi) as jumlah from prodi where status_prodi='2'")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function Data_anggota()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_grafik_Anggota',
            'aktifanggota' => $this->db->query("select count(id) as jumlah from anggota where status_anggota='1'")->row(),
            'nonaktifanggota' => $this->db->query("select count(id) as jumlah from anggota where status_anggota='2'")->row(),

            'aktifprodi' => $this->db->query("select count(id_prodi) as jumlah from prodi where status_prodi='1'")->row(),
            'nonaktifprodi' => $this->db->query("select count(id_prodi) as jumlah from prodi where status_prodi='2'")->row(),

            'hasil' => $this->db->query('SELECT * FROM calon_ketua ')->result(),
            'hasil11' =>  $this->db->query('SELECT nama FROM calon_ketua')->result()

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function evotting()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_evotting',
            'calon' => $this->db->query("select*from calon_ketua where status='1'"),
            'hasil' => $this->db->query('SELECT * FROM calon_ketua ')->result(),
            'hasil11' =>  $this->db->query('SELECT nama FROM calon_ketua')->result()

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function detail_voting($no)
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_detail_voting',
            'calon' => $this->db->query("select*from calon_ketua where no_urut='$no'")->row(),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function daftar_anggota()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_daftar_anggota',
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function login()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_login',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function lupapassword()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_lupapassword',
        );
        $this->load->view('layout/wrapper', $data);
    }


    public function reset_password($id)
    {
        if (!$id) {
            echo "<script>
                alert('Token tidak ditemukan.');
                window.location.href = '" . base_url('login.js') . "';
            </script>";
            return;
        }

        // Cari anggota berdasarkan token
        $anggota = $this->db->get_where('anggota', array('tokenreset' => $id))->row();

        if (!$anggota) {
            echo "<script>
                alert('Token tidak valid atau telah kedaluwarsa.');
                window.location.href = '" . base_url('login.js') . "';
            </script>";
            return;
        }
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'id' => $id,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_updatepassword',
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function kontak()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_kontak',
        );
        $this->load->view('layout/wrapper', $data);
    }

    function register_anggota()
    {
        $id = $this->input->post('xid', true);
        $nama = strip_tags(htmlspecialchars($this->input->post('xnama', true), ENT_QUOTES));
        $nohp = $this->input->post('xnohp', true);
        $email = $this->input->post('xemail', true);
        $tgl = date('Y-m-d H:i:s');
        $password_user = 'aptikom';
        $pass_md5 = md5($password_user);
        $pass_64 = base64_encode($password_user);
        $cek = $this->db->query("SELECT * FROM anggota WHERE id_anggota='$id'")->row();
    
        if ($cek) {
            $this->session->set_flashdata('message', 'info');
            redirect(base_url() . 'daftar-anggota.js');
            die;
        }
        
        $config['upload_path'] = './assets/dokumen/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
        $config['max_size'] = '1048'; // Maximum file size in kilobytes
        $config['encrypt_name'] = false;
        $config['file_name'] = 'IDcar-' . $id;
    
        $this->upload->initialize($config);
        
        $file = ''; // Initialize file variable
        
        if (!empty($_FILES['filedokumen']['name'])) {
            if ($this->upload->do_upload('filedokumen')) {
                $img_about = $this->upload->data();
                
                // Check file size (size is in bytes)
                if ($img_about['file_size'] > 1048) { // 1048 KB = 1 MB
                    $this->session->set_flashdata('message', 'File size exceeds 1 MB.');
                    redirect('daftar-anggota.js');
                    die;
                }
                
                $file = $img_about['file_name'];
            } else {
                $this->session->set_flashdata('message', $this->upload->display_errors());
                redirect('daftar-anggota.js');
                die;
            }
        }
    
        // Prepare data for insertion
        $data = [
            'id_anggota' => $id,
            'nama_anggota' => $nama,
            'nohp' => $nohp,
            'email' => $email,
            'verifikasi' => '2',
            'status_anggota' => '2',
            'pass' => $pass_md5,
            'pass_64' => $pass_64,
            'file_anggota' => $file,
            'create_at' => $tgl,
            'jns_anggota' => '1',
        ];
        
        $this->M_data->insert_data($data, 'anggota');
        $this->session->set_flashdata('message', 'success');
        redirect('login.js');
    }
    

    function register_anggotaProdi()
    {
        $id = $this->input->post('xid', true);
        $nama = strip_tags(htmlspecialchars($this->input->post('xnama', true), ENT_QUOTES));
        $nohp = $this->input->post('xnohp', true);
        $email = $this->input->post('xemail', true);
        $pts = $this->input->post('xpts', true);
        $prodi = $this->input->post('xprodi', true);
        $tgl = date('Y-m-d H:i:s');
        $password_user = 'aptikom';
        $pass_md5 = md5($password_user);
        $pass_64 = base64_encode($password_user);
        $cek = $this->db->query("SELECT * FROM anggota WHERE id_anggota='$id'")->row();

        if ($cek->id_anggota > 0) {
            $this->session->set_flashdata('message', 'info');
            redirect(base_url() . 'login.js');
        }
        $config['upload_path'] = './assets/dokumen/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf';
        $config['max_size'] = '2048';
        $config['encrypt_name'] = false;
        $config['file_name'] = 'IDcar-' . $id;

        $this->upload->initialize($config);
        if (!empty($_FILES['filedokumen']['name'])) {
            if ($this->upload->do_upload('filedokumen')) {
                $img_about = $this->upload->data();
                $file = $img_about['file_name'];
            }
            $data = [
                'id_anggota' => $id,
                'nama_anggota' => $nama,
                'nohp' => $nohp,
                'email' => $email,
                'pts' => $pts,
                'prodi' => $prodi,
                'verifikasi' => '2',
                'status_anggota' => '2',
                'pass' => $pass_md5,
                'pass_64' => $pass_64,
                'file_anggota' => $file,
                'create_at' => $tgl,
                'jns_anggota' => '2',
            ];
            // var_dump( $data );
            // die;
            echo $this->session->set_flashdata('message', 'success');
            $this->M_data->insert_data($data, 'anggota');
            redirect('login.js');
        }

        echo $this->session->set_flashdata('message', 'error');
        redirect('daftar-anggota.js');
    }

    function sendinbox()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('xname', 'Name', 'required|min_length[3]|max_length[40]|htmlspecialchars');
        $this->form_validation->set_rules('xemail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('xjudul', 'Subject', 'required|min_length[3]|max_length[100]|htmlspecialchars');
        $this->form_validation->set_rules('xpesan', 'Message', 'required');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', 'info');

            redirect('index.js');
        } else {
            $xname = $this->input->post('xname', true);
            $email = $this->input->post('xemail', true);
            $subject = $this->input->post('xjudul', true);
            $message = strip_tags(htmlspecialchars($this->input->post('xpesan', true), ENT_QUOTES));
            $tgl = date('Y-m-d H:i:s');

            $data = [
                'nama' => $xname,
                'email' => $email,
                'judul' => $subject,
                'isipesan' => $message,
                'tgl_create' => $tgl,
            ];
            $this->session->set_flashdata('message', 'success');
            $this->M_data->insert_data($data, 'inbox');
            redirect('index.js');
        }
    }

    public function berita()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_berita',
            'data' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
			FROM artikel AS a
            WHERE a.status_artikel = '1'
			LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
			LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel desc limit 5 "),

            'latepost_artikel' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
			FROM artikel AS a
            WHERE a.status_artikel = '1'
			LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
			LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel asc limit 5 ")
           
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function berita_detail($id)
    {
        $about = $this->db->query('select*from about_website')->row();
        $this->db->query("UPDATE artikel SET lihat=lihat+1 where slug='$id'");
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_berita_detail',
            'data' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
			FROM artikel AS a
			LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
			LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.slug='$id'")->row(),

            'latepost_artikel' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
			FROM artikel AS a
			LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
			LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel asc limit 5 "),
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function kategori_berita($slug)
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_berita_kategori',
            'data' => $this->db->query("SELECT a.*, b.*,c.nama_user
			FROM artikel AS a
			LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
			LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where b.slug_kategori='$slug' "),

            'latepost_artikel' => $this->db->query("SELECT a.*, b.nama_kategori,c.nama_user
			FROM artikel AS a
			LEFT JOIN tbl_kategori AS b ON a.id_kategori=b.id_kategori 
			LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel asc limit 5 "),
        );
        $this->load->view('layout/wrapper', $data);
    }

    public function agenda()
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_agenda',
            'data' =>  $this->db->query("SELECT a.*, b.nama_konfrens,c.nama_user
            FROM konferensi AS a
            LEFT JOIN kategori_konfrens AS b ON a.id_kategori=b.id_konfrens 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel desc limit 5 "),

            'latepost_artikel' =>  $this->db->query("SELECT a.*, b.nama_konfrens,c.nama_user
            FROM konferensi AS a
            LEFT JOIN kategori_konfrens AS b ON a.id_kategori=b.id_konfrens 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel asc limit 5 "),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function agenda_detail($slug)
    {
        $about = $this->db->query('select*from about_website')->row();
        $this->db->query("UPDATE konferensi SET lihat=lihat+1 where slug='$slug'");
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_agenda_detail',
            'data' =>  $this->db->query("SELECT a.*, b.nama_konfrens,b.slug as slugkat,c.nama_user
            FROM konferensi AS a
            LEFT JOIN kategori_konfrens AS b ON a.id_kategori=b.id_konfrens 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.slug='$slug' ")->row(),

            'latepost_artikel' =>  $this->db->query("SELECT a.*, b.nama_konfrens,c.nama_user
            FROM konferensi AS a
            LEFT JOIN kategori_konfrens AS b ON a.id_kategori=b.id_konfrens 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel asc limit 5 "),

        );
        $this->load->view('layout/wrapper', $data);
    }

    public function kategori_agenda($slug)
    {
        $about = $this->db->query('select*from about_website')->row();
        $data = array(
            'title' => $about->judul,
            'about' => $this->db->query('select*from about_website')->row(),
            'conten' => 'v_agenda_kategori',
            'data' =>  $this->db->query("SELECT a.*, b.nama_konfrens,b.slug as slugkat,c.nama_user
            FROM konferensi AS a
            LEFT JOIN kategori_konfrens AS b ON a.id_kategori=b.id_konfrens 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where b.slug='$slug' "),

            'latepost_artikel' =>  $this->db->query("SELECT a.*, b.nama_konfrens,c.nama_user
            FROM konferensi AS a
            LEFT JOIN kategori_konfrens AS b ON a.id_kategori=b.id_konfrens 
            LEFT JOIN tbl_user AS c ON a.id_user=c.id_user where a.status_artikel='1' order by a.id_artikel asc limit 5 "),

        );
        $this->load->view('layout/wrapper', $data);
    }
}