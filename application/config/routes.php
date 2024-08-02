<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

//home
$route[ 'default_controller' ] = 'Home';
$route[ '404_override' ] = '';

$modules_path = APPPATH.'modules/';     
$modules = scandir($modules_path);

foreach($modules as $module)
{
    if($module === '.' || $module === '..') continue;
    if(is_dir($modules_path) . '/' . $module)
    {
        $routes_path = $modules_path . $module . '/config/routes.php';
        if(file_exists($routes_path))
        {
            require($routes_path);
        }
        else
        {
            continue;
        }
    }
}


$route[ 'translate_uri_dashes' ] = false;
$route[ 'index.js' ] = 'Home';
$route[ 'sejarah-singkat.js' ] = 'Home/sejarah';
$route[ 'search.js' ] = 'Home/search/';
$route[ 'visi-misi.js' ] = 'Home/visimisi';
$route[ 'tujuan-fungsi-tugas.js' ] = 'Home/tugasfungsi';
$route[ 'struktur-organisasi.js' ] = 'Home/struktur';
$route[ 'keanggotaan.js' ] = 'Home/keanggotaan';
$route[ 'keanggotaan-prodi.js' ] = 'Home/keanggotaanprodi';
$route[ 'grafik-anggota.js' ] = 'Home/Data_anggota';
$route[ 'data-prodi.js' ] = 'Home/data_prodi';
$route[ 'data-grafik-prodi.js' ] = 'Home/data_grafik';
$route[ 'e-votting-calon.js' ] = 'Home/evotting';
$route[ 'login.js' ] = 'Home/login';
$route[ 'daftar-anggota.js' ] = 'Home/daftar_anggota';
$route[ 'kontak.js' ] = 'Home/kontak';

$route[ 'artikel.js' ] = 'Home/berita';
$route[ 'artikel-detail-(:any).js' ] = 'Home/berita_detail/$1';
$route[ 'kategori-artikel-(:any).js' ] = 'Home/kategori_berita/$1';

$route[ 'agenda.js' ] = 'Home/agenda';
$route[ 'agenda-detail-(:any).js' ] = 'Home/agenda_detail/$1';
$route[ 'kategori-agenda-(:any).js' ] = 'Home/kategori_agenda/$1';

$route[ 'detail-voting-(:any).js' ] = 'Home/detail_voting/$1';

//anggota
$route[ 'dashboard-anggota.js' ] = 'Anggota/dashboard';
$route[ 'data-pribadi-anggota.js' ] = 'Anggota';
$route[ 'lupa-password.js' ] = 'Home/lupapassword';
$route[ 'data-calon-ketua-anggota.js' ] = 'Anggota/Votting';
//folder->controller->function
$route[ 'detail-votting-anggota.js' ] = 'Anggota/Votting/hasil_votting';
//folder->controller->function

$route[ 'logout-anggota.js' ] = 'Anggota/logout';

//user
$route[ 'login-admin.js' ] = 'User';
$route[ 'logout-admin.js' ] = 'User/logout';
$route[ 'dashboard-admin.js' ] = 'User/dashboard';
$route[ 'images-slider-admin.js' ] = 'User/slider';

$route[ 'anggota-admin.js' ] = 'User/anggota';
$route[ 'anggota-verifikasi-admin.js' ] = 'User/anggota/verifikasi_anggota';

$route[ 'anggota-prodi-admin.js' ] = 'User/anggotaProdi';
$route[ 'anggota-prodi-verifikasi-admin.js' ] = 'User/anggotaProdi/verifikasi_anggota';

$route[ 'calon-ketua-admin.js' ] = 'User/votting';
$route[ 'tambah-calon-ketua-admin.js' ] = 'User/votting/add';

$route[ 'hasil-votting-admin.js' ] = 'User/votting/hasil_votting';
$route[ 'program-studi-admin.js' ] = 'User/prodi';
$route[ 'artikel-admin.js' ] = 'User/Artikel';
$route[ 'kategori-artikel-admin.js' ] = 'User/Artikel/kategori_artikel';
$route[ 'konferensi-admin.js' ] = 'User/konferensi';
$route[ 'kategori-konferensi-admin.js' ] = 'User/konferensi/kategori_konferensi';
$route[ 'sejarah-aptikom-admin.js' ] = 'User/ProfilAptikom';
$route[ 'visi-misi-aptikom-admin.js' ] = 'User/ProfilAptikom/visimisi';
$route[ 'tujuan-fungsi-tugas-aptikom-admin.js' ] = 'User/ProfilAptikom/tugasfungsi';
$route[ 'struktur-aptikom-admin.js' ] = 'User/ProfilAptikom/struktur';
$route[ 'about-aptikom-admin.js' ] = 'User/About';
$route[ 'inbox-aptikom-admin.js' ] = 'User/Inbox';
$route[ 'informasi-beranda.js' ] = 'User/Info';

$route[ 'user-akses-aptikom-admin.js' ] = 'User/show_user';
$route[ 'add-user-admin.js' ] = 'User/add_user';
$route[ 'edit-data-user-admin-(:any).js' ] = 'User/edit_user/$1';
$route[ 'add-prodi-admin.js' ] = 'User/Prodi/add_prodi';
$route[ 'edit-data-prodi-admin-(:any).js' ] = 'User/prodi/edit_prodi/$1';
$route[ 'add-kategori-admin.js' ] = 'User/Artikel/add_kategori';
$route[ 'edit-data-kategori-admin-(:any).js' ] = 'User/artikel/edit_kategori/$1';

$route[ 'add-kategori-konferensi-admin.js' ] = 'User/konferensi/add_kategori';
$route[ 'edit-data-kategori-konferensi-admin-(:any).js' ] = 'User/konferensi/edit_kategori/$1';