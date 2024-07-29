-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 02:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakbar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_website`
--

CREATE TABLE `about_website` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telpon` varchar(16) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `whatsap` varchar(150) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL,
  `tampil_vote` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_website`
--

INSERT INTO `about_website` (`id`, `judul`, `email`, `telpon`, `alamat`, `youtube`, `instagram`, `facebook`, `whatsap`, `images`, `deskripsi`, `tgl_create`, `tampil_vote`) VALUES
(1, 'Aptikom Kalbar', 'aptikom.kalbarpnk@gmail.com', '089531236123', 'Jl. Abdurahman Saleh No.18', 'https://www.youtube.com/watch?', 'aptikom.kalbar', 'Aptikom Kalbar', 'https://api.whatsapp.com/send?phone=62895618166289&text=Halo.. Saya ingin bertanya *Aptikom*, apakah bisa..!!', '2707240226561.png', 'Asosiasi Pendidikan Tinggi Informatika dan Komputer\r\n\r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        ', '2024-05-05 13:47:01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `id_anggota` varchar(30) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `lahir_tempat` varchar(50) DEFAULT NULL,
  `lahir_tanggal` date DEFAULT NULL,
  `jns_k` char(5) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `wilayah` varchar(30) DEFAULT NULL,
  `pts` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL,
  `verifikasi` char(5) DEFAULT NULL,
  `status_anggota` char(5) DEFAULT NULL,
  `file_anggota` text DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `pass_64` varchar(50) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `jns_anggota` varchar(5) DEFAULT '0',
  `tokenreset` varchar(200) DEFAULT NULL,
  `reset_token_created` datetime DEFAULT NULL,
  `statusreset` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `id_anggota`, `nama_anggota`, `lahir_tempat`, `lahir_tanggal`, `jns_k`, `nohp`, `email`, `alamat`, `wilayah`, `pts`, `prodi`, `masa_berlaku`, `verifikasi`, `status_anggota`, `file_anggota`, `pass`, `pass_64`, `create_at`, `jns_anggota`, `tokenreset`, `reset_token_created`, `statusreset`) VALUES
(32, 'AP08', 'Alfina Putri Anggraini', 'Pontianak', '2002-11-21', 'P', '0895618166289', '12210752@bsi.ac.id', NULL, NULL, 'Universitas Bina Sarana Informatika', 'Sistem Informasi', '2025-12-21', '1', '1', 'IDcar-AP08.jpeg', '010d83b22492cc5c22856394e7242585', 'MjFOb3ZlbWJlcg==', '2024-07-09 08:49:54', '1', '3382e1efd838cbe699939fe2cef0dd03', '2024-07-25 07:00:10', '1'),
(35, 'AP02', 'Fira Rahmi', 'Jungkat', '2024-06-01', 'P', '11111222222', 'dataanggota@gmail.com', NULL, NULL, 'Politeknik Negeri Pontianak', 'Teknik Informatika', '2024-08-31', '1', '1', 'IDcar-AP02.png', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', '2024-07-15 06:06:32', '1', NULL, NULL, NULL),
(36, 'AP03', 'Surti Ayu', 'Sungai Raya', '2024-05-15', 'L', '22332442626', 'dataanggota@gmail.com', NULL, NULL, 'Universitas Tanjung Pura', 'Rekayasa Perangkat Lunak', '2024-07-18', '1', '2', 'IDcar-AP03.png', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', '2024-07-15 06:09:05', '1', NULL, NULL, NULL),
(37, 'AP04', 'Listia Priwida', 'Sungai Kunyit', '2024-07-06', 'P', '999880007765', 'dataanggota@gmail.com', NULL, NULL, 'Universitas Panca Bhakti Pontianak', 'Ilmu Komputer', '2024-07-30', '1', '2', 'IDcar-AP04.jpg', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', '2024-07-15 06:11:54', '1', NULL, NULL, NULL),
(50, 'AP09', 'Salma', 'Pontianak', '1999-09-08', 'P', '086338283', 'salma@gmail.com', NULL, NULL, 'UMP', 'Teknik Informatika', '2024-01-07', '2', '1', 'IDcar-AP09.pdf', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', '2024-07-27 02:54:53', '1', NULL, NULL, NULL),
(51, 'PS13', 'Hj.Desyka Shalu M.H', 'ambangah', '2022-07-04', 'P', '08349874782', '12210869@bsi.ac.id', NULL, NULL, 'Universitas Bina Sarana Informatika', 'sistem informasi', '2024-07-27', '2', '1', 'IDcar-PS13.pdf', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', '2024-07-27 06:08:40', '1', '3bb52893cda2206eee4224f015c9c905', '2024-07-27 10:05:40', '1'),
(52, 'AP14', 'Ayu Surti', 'Jungkat', '2003-06-01', 'P', '088937389389', 'surtiayyu@gmail.com', NULL, NULL, 'Universitas Panca Bhakti Pontianak', 'Informatika - S1', '2024-12-31', '2', '1', 'IDcar-AP14.pdf', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', '2024-07-27 10:36:06', '1', 'a7e1f2928357af849e57fb75e1cbec07', '2024-07-27 06:12:27', '1');

-- --------------------------------------------------------

--
-- Table structure for table `anggotaxxxx`
--

CREATE TABLE `anggotaxxxx` (
  `id` int(11) NOT NULL,
  `id_anggota` varchar(30) DEFAULT NULL,
  `nama_anggota` varchar(50) DEFAULT NULL,
  `lahir_tempat` varchar(50) DEFAULT NULL,
  `lahir_tanggal` date DEFAULT NULL,
  `jns_k` char(5) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `wilayah` varchar(30) DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL,
  `verifikasi` char(5) DEFAULT NULL,
  `status_anggota` char(5) DEFAULT NULL,
  `file_anggota` text DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `pass_64` varchar(50) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `jns_anggota` varchar(5) DEFAULT '0',
  `token_reset` varchar(200) DEFAULT NULL,
  `date_reset` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggotaxxxx`
--

INSERT INTO `anggotaxxxx` (`id`, `id_anggota`, `nama_anggota`, `lahir_tempat`, `lahir_tanggal`, `jns_k`, `nohp`, `email`, `alamat`, `wilayah`, `masa_berlaku`, `verifikasi`, `status_anggota`, `file_anggota`, `pass`, `pass_64`, `create_at`, `jns_anggota`, `token_reset`, `date_reset`) VALUES
(23, 'asdfasd', 'asdfasd', NULL, NULL, NULL, '2323', 'aa@gmail.com', NULL, NULL, NULL, '1', '1', 'IDcar-asdfasd.png', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', '2024-07-08 07:33:01', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `tgl_post` date DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `lihat` int(11) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status_artikel` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi_artikel`, `tgl_post`, `id_kategori`, `slug`, `lihat`, `gambar`, `id_user`, `status_artikel`) VALUES
(18, 'APTIKOM Kalbar hadirkan sertifikasi BNSP ukur lulusan informatika', '<p>sosiasi Pendidikan Tinggi Informatika dan Komputer (APTIKOM) Kalbar bekerjasama dengan Jurusan Informatika Fakultas Teknik Universitas Tanjungpura (Untan) Pontianak menghadirkan kegiatan sertifikasi BNSP kompetensi untuk mahasiswa Prodi informatika, dosen dan umum sebagai upaya mengukur pencapaian lulusan jurusan informatika.</p>\r\n<p>&ldquo;Kegiatan sertifikasi kompetensi yang telah sukses digelar selama dua hari ini bersertifikat BNSP. Sertifikasi ini tujuannya untuk mengukur pencapaian lulusan mahasiswa jurusan &nbsp;informatika,&rdquo; ujar Ketua APTIOM Kalbar, di Pontianak, Muhammad Sony Maulana, ST, M.Kom di Pontianak, Senin.</p>\r\n<p>Ia mengatakan dalam kegiatan yang berlangsung &nbsp;di Ruang Rapat Fakultas Teknik Untan Pontianak tersebut terdapat empat skema kompetensi yang dihadirkan bagi para asesi di antaranya &nbsp;junior web developer, programmer, network administrator dan web developer.</p>\r\n<p>\"Kegiatan ini dihadiri oleh 55 peserta yang terdiri dari mahasiswa, dosen dan umum. Diharapkan dengan terselenggaranya kegiatan ini dapat menciptakan tenaga kerja unggul dan berkompetensi di Kalbar yang dibuktikan dengan kepemilikan sertifikat kompetensi dari BNSP,\" harap dia.</p>\r\n<p>Sementara itu, Dr. Yus sholva, ST., MT selaku Ketua Jurusan Informatika Fakultas Teknik Untan Pontianak menyampaikan bahwa kegiatan ini merupakan kegiatan tahunan dari jurusan yang didukung Fakultas Teknik Untan&nbsp;Pontianak.</p>\r\n<p>&rdquo;Kegiatan ini merupakan agenda tahunan dari jurusan yang didukung oleh Fakultas Teknik dan Informatika Untan Pontianak dengan tujuan mengukur pencapaian lulusan mahasiswa jurusan &nbsp;Informatika. Kami juga bekerja sama dengan APTIKOM Kalbar dan Universitas BSI untuk peserta dosen dan umum. Asesor kegiatan ini merupakan asesor BNSP dari LSP Informatika dan salah satunya merupakan Ketua APTIKOM Kalbar,&rdquo; jelas dia.</p>', '2024-07-25', 3, 'aptikom-kalbar-hadirkan-sertifikasi-bnsp-ukur-lulusan-informatika', 0, 'c08eb3593a8c8acd19f0f735e949ecf0.jpg', NULL, '1'),
(19, 'Aptikom Kalbar Gelar Serfikasi Kompetensi Dosen PTN/PTS Se Kalimantan Barat', '<div class=\"tribun-mark\">\r\n<p>APTIKOM (Asosiasi Pendidikan Tinggi Informatika dan Komputer) Kalimantan Barat bekerja sama dengan Universitas Bina Sarana Informatika (UBSI) dan Universitas Tanjungpura dan didukung oleh LSP Informatika sukses menggelar kegiatan &ldquo;Sertifikasi Kompetensi untuk Dosen PTN/PTS Se-Kalimantan Barat&rdquo;.</p>\r\n<div class=\"tribun-mark\">\r\n<div class=\"side-article txt-article multi-fontsize editcontent\">\r\n<p>Kegiatan sertifikasi tahap I ini berlangsung pada 08 Februari s.d. 09 Februari 2020 di Kampus UBSI Kota Pontianak.Kegiatan yang digelar untuk melakukan sertifikasi kompetensi (serkom) bidang TIK ini diikuti oleh 29 peserta dari tiga universitas yaitu Universitas Tanjungpura, UBSI Kampus Pontianak dan IKIP Pontianak.</p>\r\n</div>\r\n<p><br /><br /></p>\r\n</div>\r\n</div>', '2024-07-25', 1, 'aptikom-kalbar-gelar-serfikasi-kompetensi-dosen-ptn-pts-se-kalimantan-barat', 0, '76c89b08b973b66415e5ee04afd23b70.jpg', 8, '1'),
(20, 'APTIKOM gelar workshop penjaminan mutu Prodi Infokom Kalbar', '<p>Asosiasi Pendidikan Tinggi Informatika dan Komputer (APTIKOM) Kalbar bersama dengan Prodi Sistem Informasi Universitas Tanjungpura Pontianak menggelar workshop penjaminan mutu program studi informatika dan komputer pada perguruan Tinggi Kalimantan Barat selama dua hari 6-7 Maret 2023.<br /> <br /> \"Penjaminan mutu itu sangat penting dilakukan di dalam perguruan tinggi bukan hanya oleh program studi tetapi seluruh civitas akademika baik di tingkat Fakultas maupun Universitas untuk menuju akreditasi unggul,\" ujar Ketua APTIKOM Kalbar, Muhammad Sony Maulana di Pontianak, Senin.</p>', '2024-07-25', 2, 'aptikom-gelar-workshop-penjaminan-mutu-prodi-infokom-kalbar', 0, '2306db17df13534b9f99bb12f2d9ee67.jpeg', NULL, '1'),
(21, 'Tes Artikel Baru1', '<p>tttttttt bbbb</p>', '2024-07-27', 1, 'tes-artikel-baru1', 0, '5a2a217d4ca7880d7ce91633635fbd86.jpg', 8, '1');

-- --------------------------------------------------------

--
-- Table structure for table `calon_ketua`
--

CREATE TABLE `calon_ketua` (
  `id` int(11) NOT NULL,
  `no_urut` varchar(30) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `status` char(5) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_ketua`
--

INSERT INTO `calon_ketua` (`id`, `no_urut`, `nama`, `visi`, `misi`, `images`, `status`, `tgl_create`, `id_user`) VALUES
(5, '01', 'Calonxxx', '<p>Ini visi</p>', '<p>Ini Misi</p>', '2707240227325.png', '1', '2024-07-27 02:27:32', 8),
(7, '02', 'Calonxxx', '<p>visiku</p>', '<p>misiku</p>', '2707240227497.png', '1', '2024-07-27 02:27:49', 8),
(8, '03', 'Calonxxx', '<p>Visi ku menjadi</p>', '<p>Misi Ku Menjadikan</p>', '2707240228088.png', '1', '2024-07-27 02:28:08', 8);

-- --------------------------------------------------------

--
-- Table structure for table `detail_votting`
--

CREATE TABLE `detail_votting` (
  `id` int(11) NOT NULL,
  `id_calon` int(11) DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `jumlah_vot` int(11) DEFAULT NULL,
  `tgl_vot` date DEFAULT NULL,
  `status_vot` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_votting`
--

INSERT INTO `detail_votting` (`id`, `id_calon`, `id_anggota`, `jumlah_vot`, `tgl_vot`, `status_vot`) VALUES
(9, 8, 32, 1, '2024-07-12', '2'),
(10, 7, 34, 1, '2024-07-15', '2'),
(11, 5, 35, 1, '2024-07-15', '2'),
(12, 8, 36, 1, '2024-07-15', '2'),
(13, 5, 37, 1, '2024-07-15', '2'),
(14, 5, 43, 1, '2024-07-20', '2'),
(15, 5, 45, 1, '2024-07-27', '2'),
(16, 5, 49, 1, '2024-07-27', '2'),
(17, 7, 51, 1, '2024-07-27', '2'),
(18, 8, 52, 1, '2024-07-27', '2');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isipesan` text DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `nama`, `email`, `judul`, `isipesan`, `tgl_create`) VALUES
(3, 'Sarii', 'sari@gmail.com', 'sertifikasi Kompetensi', 'halo,Aptikom Kalbar', '2024-07-25 02:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_beranda`
--

CREATE TABLE `informasi_beranda` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `status_info` char(5) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi_beranda`
--

INSERT INTO `informasi_beranda` (`id`, `judul`, `deskripsi`, `file`, `status_info`, `tgl_create`) VALUES
(1, 'panduan sertifikasi anggota', ' ini isi deskripsi', '010624083616.pdf', '1', '2024-06-01 08:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `kategorixxx`
--

CREATE TABLE `kategorixxx` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategorixxx`
--

INSERT INTO `kategorixxx` (`id_kategori`, `nama_kategori`, `slug`, `tgl_create`) VALUES
(2, 'kerja sama', NULL, '2024-05-04 09:21:51'),
(3, 'MOU1', NULL, '2024-05-05 07:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_konfrens`
--

CREATE TABLE `kategori_konfrens` (
  `id_konfrens` int(11) NOT NULL,
  `nama_konfrens` varchar(30) DEFAULT NULL,
  `slug` varchar(40) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_konfrens`
--

INSERT INTO `kategori_konfrens` (`id_konfrens`, `nama_konfrens`, `slug`, `tgl_create`) VALUES
(2, 'Kerja sama ', 'kerja-sama-', '2024-05-26 08:57:58'),
(3, 'seminar aptikom', 'seminar-aptikom', '2024-05-26 08:57:41'),
(4, 'Musyawarah', 'musyawarah', '2024-07-25 01:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_prodi`
--

CREATE TABLE `kategori_prodi` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `jenjang` varchar(10) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_prodi`
--

INSERT INTO `kategori_prodi` (`id_kategori`, `nama_kategori`, `jenjang`, `tgl_create`) VALUES
(1, 'Sistem Informasi', 'S1', '2024-05-07 20:00:30'),
(2, 'Ilmu Komputer', 'S1', '2024-05-07 20:00:45'),
(3, 'Data Sains', 'S1', '2024-05-07 20:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `konferensi`
--

CREATE TABLE `konferensi` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `tgl_post` date DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `lihat` int(11) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `status_artikel` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konferensi`
--

INSERT INTO `konferensi` (`id_artikel`, `judul`, `isi_artikel`, `tgl_post`, `id_kategori`, `slug`, `lihat`, `gambar`, `id_user`, `status_artikel`) VALUES
(4, 'MUSYAWARAH WILAYAH PERTAMA PEMBENTUKAN KEPENGURUSAN APTIKOM KALBAR', '<p align=\"justify\">Asosiasi Pendidikan Tinggi Informatika dan Komputer (APTIKOM) Wilayah Provinsi Kalimantan Barat melaksanakan Musyawarah Wilayah (Muswil) pertama, di Ruang Aula kampus BSI Kalimantan Barat, Jalan Abdurrahman Saleh No 18 A, Pontianak, Sabtu (22/10/16). Muswil tersebut dalam rangka pemilihan Ketua Umum baru APTIKOM Wilayah Provinsi Kalimantan Barat untuk periode 2016-2020. Muswil dihadiri oleh 33 peserta dari 8 perguruan tinggi yang berada di wilayah Kalimantan Barat yaitu BSI Pontianak,Universitas Tanjungpura Pontianak, STMIK Widya Darma Pontianak, Politeknik Negeri Pontianak, Universitas Muhammadiyah Pontianak, STMIK Pontianak, Universitas Nahdlatul Ulama Pontianak dan Politeknik Negeri Ketapang.</p>\r\n<p align=\"justify\">Acara pemilihan Ketua APTIKOM Wilayah Provinsi Kalimantan Barat periode 2016-2020 dilaksanakan dengan melakukan voting dari seluruh peserta Muswil yang dipimpin oleh Muhammad Sony Maulana, S.T., M.Kom (Prodi Manajemen Informatika BSI Pontianak). Dari hasil voting Novi Safriadi, S.T., M.T. (Prodi Informatika Universitas Tanjungpura Pontianak) sehingga Ketua Umum APTIKOM Wilayah Provinsi Kalimantan Barat untuk periode 2016-2020 terpilih dijabat Oleh Novi Safriadi, S.T., M.T. dari Prodi Informatika Universitas Tanjungpura Pontianak.</p>\r\n<p align=\"justify\">Adapun untuk pemilihan Sekretaris APTIKOM Wilayah Provinsi Kalimantan Barat periode 2016-2020 dilaksanakan dengan melakukan voting dari seluruh peserta Muswil. Dari hasil voting Muhammad Sony Maulana, S.T., M.Kom (Prodi Manajemen Informatika BSI Pontianak) sehingga Sektretaris APTIKOM Wilayah Provinsi Kalimantan Barat untuk periode 2016-2020 terpilih dijabat Oleh Muhammad Sony Maulana, S.T., M.Kom. dari Prodi Manajemen Informatika BSI Pontianak.</p>', '2024-06-05', 4, 'musyawarah-wilayah-pertama-pembentukan-kepengurusan-aptikom-kalbar', 6, 'fbf5c5176c8fbad370cbe7921693c0ed.jpg', 8, '1'),
(6, 'Workshop Strategi dan penyusunan LKPS & LED LAM INFOKOM MENUJU AKREDITASI UNGGUL ', '<p>Workshop Strategi dan penyusunan LKPS &amp; LED LAM INFOKOM MENUJU AKREDITASI UNGGUL, Waktu Pelaksanaan :Senin 6 -7 Maret 2023 ,Lokasi Ruang E-learning Gedung Konferensi Untan</p>', '2024-07-24', 3, 'workshop-strategi-dan-penyusunan-lkps---led-lam-infokom-menuju-akreditasi-unggul-', 0, 'a85f31f810dfa98f2bbf0529e5859eb5.jpg', 8, '1'),
(8, 'Bimtek penyusunan buku kurikulum 2024', '<p>Acara ini diselenggarakan sebagai bentuk tanggung jawab Aptikom agar Prodi di bawah INFOKOM dapat membuat kurikulum OBE yang sesuai dengan panduan yang telah disediakan, dan sebagai wadah bagi prodi prodi untuk menyusun bersama Buku Panduan Kurikulum yang akan digunakan oleh Prodi di bawah Infokom. kegiatan dilaksanakan secara paralel yaitu Bimbingan Teknis Penyusunan Kurikulum OBE APTIKOM untuk Prodi Informatika dan Sistem Informasi&nbsp; dan Rapat Kerja penyusunan Kurikulum OBE untuk Prodi selain Informatika dan Sistem Informasi (SK, TI, Vokasi, Data Sains, RPL)&nbsp;</p>', '2024-07-25', 2, 'bimtek-penyusunan-buku-kurikulum-2024', 1, '0f4282e351c96600cfd9952469beb807.jpg', 8, '1'),
(14, 'Penguatan Operator SDP Di bidang Pengamanan dan Pemeliharaan TI Wilayah Kalimantan Barat', '<p>Penguatan Operator SDP Di bidang Pengamanan dan Pemeliharaan TI Wilayah Kalimantan Barat ,Tempat Pelaksanaan Kegiatan di Aula Kantor Wilayah KEMENKUMHAM Kalimantan Barat mulai dari pukul 13.00 - 15.00 Wib ,Tanggal 2 Mei 2024</p>', '2024-07-27', 3, 'penguatan-operator-sdp-di-bidang-pengamanan-dan-pemeliharaan-ti-wilayah-kalimantan-barat', 2, 'a39a9bdefe4c0d38527f9b13fa941b7c.jpg', 8, '1');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(40) DEFAULT NULL,
  `jenjang` varchar(15) DEFAULT NULL,
  `status_prodi` char(5) DEFAULT NULL,
  `pts` varchar(50) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_anggota` varchar(100) DEFAULT NULL,
  `masa_berlaku` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `jenjang`, `status_prodi`, `pts`, `tgl_create`, `id_user`, `no_anggota`, `masa_berlaku`) VALUES
(9, 'Teknik Informatika', 'D3', '1', 'Politeknik Negeri Pontianak', '2024-07-12 17:20:21', 1, '122211212', '2024-07-06'),
(11, 'Rekayasa Perangkat Lunak', 'S1', '1', 'Universitas Tanjungpura', '2024-07-15 06:17:46', 1, '88777665', '2024-07-14'),
(14, 'Teknologi Komputer', 'S3', '1', 'Universitas Gajahmada', '2024-07-19 08:47:34', 1, 'APS-01', '2024-07-22'),
(15, 'tES', 'D3', '2', 'TES', '2024-07-19 08:52:31', 1, 'APS-02', '2024-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`, `create_at`) VALUES
(1, 'administrator', '2024-05-02 20:23:56'),
(2, 'ketua aptikom', '2024-05-02 20:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_aptikom`
--

CREATE TABLE `sejarah_aptikom` (
  `idsj` int(11) NOT NULL,
  `sejarah_aptikom` text DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarah_aptikom`
--

INSERT INTO `sejarah_aptikom` (`idsj`, `sejarah_aptikom`, `tgl_create`) VALUES
(1, '<p>Semuanya bermula pada tahun 1983, yaitu ketika 8 (delapan) perguruan tinggi penggagas pendirian Program Studi  informatika dan komputer membentuk sebuah forum yang diberi nama <strong>Badan Kerja Sama Perguruan Tinggi Sejenis Ilmu Komputer (BKS PERTINIS I-K).</strong> Sejalan dengan perkembangan pesat ilmu komputer dan informatika, anggota BKS PERTINIS I-K bertambah menjadi 78 (Tujuh Puluh Delapan) anggota pada tahun 1987.</p>\r\n<p>Puncaknya adalah pada tahun 1996, ketika BKS PERTINIS I-K berubah nama menjadi <strong>Perguruan Tinggi Informatika dan Komputer (PERTIKOM)</strong> jumlah anggota menjadi lebih dari 250 Program Studi dari seluruh wilayah tanah air.</p>\r\n<p>Sesuai dengan kebutuhan dan perkembangan jaman, maka pada Rapat Koordinasi Nasional (Rakornas) 2002 di kota Malang, diusulkanlah perubahan bentuk organisasi dari PERTIKOM menjadi <strong>Asosiasi Perguruan Tinggi Informatika dan Komputer (APTIKOM).</strong></p>\r\n<p>Memperhatikan Perkembangan Ilmu Pengetahuan dan Teknologi, khususnya Ilmu Pengetahuan dan Teknologi Informatika dan Komputer serta memperhatikan hasil rapat Pengurus Pusat Aptikom pada tanggal 04 Januari 2015 di Universitas Indonesia maka pada  acara pelantikan Pengurus Pusat Aptikom periode 2014-2018 pada hari Sabtu 10 Januari 2015 di Jakarta. secara resmi diputuskan untuk mengubah singkatan APTIKOM dari ASOSIASI PERGURUAN TINGGI INFORMATIKA DAN KOMPUTER menjadi <strong>ASOSIASI PENDIDIKAN TINGGI INFORMATIKA DAN KOMPUTER disingkat APTIKOM.</strong></p>', '2024-06-02 09:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `status_images` char(5) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `judul`, `isi`, `images`, `status_images`, `tgl_create`) VALUES
(4, 'Raker putaran 10 dan Bimtek putaran ke 5 ', '      Bimbingan Teknis dan Rapat Kerja punyusunan Buku Kurikulum Prodi Informatika dan Sistem Informasi, serta peluncuran Buku Panduan Kurikulum KKNI/SKKNI/OBE Prodi Teknologi Informasi', 'ce142b88914776785d4639434a509468.jpg', '1', '2024-07-27 02:23:24'),
(5, 'APTIKOM SUMBAR : Pelatihan Senior Office Operator ', '       Pelatihan ini adalah even LSP (Lembaga Sertifikasi Profesi) Informatika yang diamanahkan untuk melakukan pelatihan bagi Staf bagian umum dari FST UIN Syarif Hidayatullah Jakarta Bidang Senior Office Operator guna persiapan untuk mengikuti Uji Kompetensi dengan sertifikasi dari BNSP Aptikom Sumbar dipercaya sebagai narasumber dalam kegiatan pelatihan yang diadakan secara hybrid (online dan offline) selama 3 hari di Kota Bukittinggi. ', 'a6f26dba68dc97aadc322edf0f7b2c20.jpg', '1', '2024-07-27 06:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_aptikom`
--

CREATE TABLE `struktur_aptikom` (
  `id` int(11) NOT NULL,
  `images` varchar(100) DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_aptikom`
--

INSERT INTO `struktur_aptikom` (`id`, `images`, `tgl_create`) VALUES
(1, '2707240248201.png', '2024-05-05 13:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_name` varchar(50) DEFAULT NULL,
  `inbox_email` varchar(80) DEFAULT NULL,
  `inbox_subject` varchar(200) DEFAULT NULL,
  `inbox_message` text DEFAULT NULL,
  `inbox_created_at` datetime DEFAULT NULL,
  `inbox_status` varchar(2) DEFAULT '0' COMMENT '0=Unread, 1=Read'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_name`, `inbox_email`, `inbox_subject`, `inbox_message`, `inbox_created_at`, `inbox_status`) VALUES
(84, 'Libby Evans', 'libbyevans461@gmail.com', 'Get Noticed on Instagram: Gain 300-1000 New Followers Each Month', 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers both safely and practically. \r\n\r\n- We guarantee to gain you 300-1000+ followers per month.\r\n- People follow you because they are interested in you, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any &#039;bots&#039;.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you&#039;d like to see some of our previous work, let me know, and we can discuss it further.\r\n\r\nKind Regards,\r\nLibby', '2024-01-02 17:34:49', '1'),
(85, 'Georgina Haynes', 'georginahaynes620@gmail.com', 'Video Promotion', 'Hi,\r\n\r\nWe&#039;d like to introduce to you our explainer video service, which we feel can benefit your site phpcode.id.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=bWz-ELfJVEI\r\nhttps://www.youtube.com/watch?v=Y46aNG-Y3rM\r\nhttps://www.youtube.com/watch?v=hJCFX1AjHKk\r\n\r\nAll of our videos are in a similar animated format as the above examples, and we have voice over artists with US/UK/Australian accents. We can also produce voice overs in languages other than English.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video sites such as YouTube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\nUp to 1 minute = $259\r\n1-2 minutes = $379\r\n2-3 minutes = $489\r\n\r\n*All prices above are in USD and include a full script, voice-over and video.\r\n\r\nIf this is something you would like to discuss further, don&#039;t hesitate to reply.\r\n\r\nKind Regards,\r\nGeorgina\r\n\r\nIf you are not interested, unsubscribe here: https://removeme.click/unsubscribe.php?d=phpcode.id', '2024-01-04 09:43:11', '1'),
(86, 'BitcoinSystem', 'bitcoinsystem@hotmail.com', '€1.000 in 60 minuten', 'http://go.vemaqaov.com/0m3k Het enige wat u hoeft te doen is uw software nu GRATIS aan te schaffen.', '2024-01-08 15:31:46', '1'),
(87, 'Libby Evans', 'libbyevans461@gmail.com', 'Get Noticed on Instagram: Gain 300-1000 New Followers Each Month', 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers both safely and practically. \r\n\r\n- We guarantee to gain you 300-1000+ followers per month.\r\n- People follow you because they are interested in you, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any &#039;bots&#039;.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nLibby', '2024-01-14 11:54:51', '1'),
(88, 'Georgina Haynes', 'georginahaynes620@gmail.com', 'Explainer Video for your website?', 'Hi,\r\n\r\nWe&#039;d like to introduce to you our explainer video service, which we feel can benefit your site phpcode.id.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=8S4l8_bgcnc\r\nhttps://www.youtube.com/watch?v=bWz-ELfJVEI\r\nhttps://www.youtube.com/watch?v=Y46aNG-Y3rM\r\nhttps://www.youtube.com/watch?v=hJCFX1AjHKk\r\n\r\nAll of our videos are in a similar animated format as the above examples, and we have voice over artists with US/UK/Australian accents. We can also produce voice overs in languages other than English.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video sites such as YouTube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\nUp to 1 minute = $259\r\n1-2 minutes = $379\r\n2-3 minutes = $489\r\n\r\n*All prices above are in USD and include a full script, voice-over and video.\r\n\r\nIf this is something you would like to discuss further, don&#039;t hesitate to reply.\r\n\r\nKind Regards,\r\nGeorgina', '2024-01-24 09:31:12', '1'),
(89, 'Amelia Brown', 'ameliabrown0325@gmail.com', 'YouTube Promotion: Grow your subscribers by 700-1500 each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers safely and practically. \r\n\r\nWe aim to gain you 700-1500+ real human subscribers per month, with all actions safe as they are made manually (no bots).\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nLet me know if you wish to see some of our previous work.\r\n\r\nKind Regards,\r\nAmelia', '2024-02-04 06:36:41', '1'),
(90, 'Georgina Haynes', 'georginahaynes620@gmail.com', 'Explainer Video for phpcode.id', 'Hi,\r\n\r\nWe&#039;d like to introduce to you our explainer video service, which we feel can benefit your site phpcode.id.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=8S4l8_bgcnc\r\nhttps://www.youtube.com/watch?v=bWz-ELfJVEI\r\nhttps://www.youtube.com/watch?v=Y46aNG-Y3rM\r\nhttps://www.youtube.com/watch?v=hJCFX1AjHKk\r\n\r\nOur prices start from as little as $195 and include a professional script and voice-over.\r\n\r\nIf this is something you would like to discuss further, don&#039;t hesitate to reply.\r\n\r\nKind Regards,\r\nGeorgina', '2024-02-17 20:40:27', '1'),
(91, 'Homer Littler', 'homer.littler@hotmail.com', 'Hello Webmaster. Earn Extra Money $0.20 per click from your site https://phpcode.id', 'Hi Admin! Earn Extra Money from your site https://phpcode.id\r\n\r\nHello Buddy\r\n\r\nEarn Extra Money from your site https://phpcode.id\r\n\r\nPer Click Rate = Upto $0.25\r\n\r\nYou can Earn Extra Money from https://phpcode.id by posting banner.\r\n\r\nLow Traffic, No Issue,Each Site Acceptable\r\n\r\nNo Tension of Ban like as Adsense\r\nAlready earning with Adsense? You can use it for extra Income \r\n\r\nMore site mean more earning\r\n\r\n\r\nFor more  information  Visit here and Sign UP at: https://bit.ly/47BuOgq', '2024-02-19 03:48:44', '1'),
(92, 'Adriana Wannemaker', 'adriana.wannemaker@googlemail.com', 'To the Admin. ZapAI - NexusAI WhatsApp Autoresponder Only $17 for lifetime http://phpcode.id', 'Hello Friend\r\n\r\n      ZapAI - NexusAI WhatsApp Autoresponder Only $17 for lifetime http://phpcode.id\r\n\r\n      Creates &amp; Blasts UNLIMITED “BULK Messages”\r\n       \r\n      To “UNLIMITED Contacts” For MAXIMUM PROFITS\r\n\r\n      AI-Powered Messages: Instantly craft compelling WhatsApp messages with just a keyword\r\n\r\n      Instant or Scheduled Whatsapp Campaigns:\r\n\r\n      Broadcast WhatsApp Messages to Unsaved Contacts and Groups With Ease!\r\n\r\n      Import/export contacts without any restrictions.      \r\n\r\n      No Monthly fee!\r\n      \r\n      only $17 OneTime Payment     \r\n     \r\n      30 Days 100% Money Back Guarantee\r\n\r\n      \r\n\r\nFor more  information  Visit at: https://bit.ly/3IaAlA8\r\n', '2024-02-23 04:15:52', '1'),
(93, 'Darren Dowden', 'dowden.darren@googlemail.com', 'Dear Admin! SmartSEO: 20 SEO Tool Keyword &amp; Backlink creator Only $17 for lifetime http://phpcode.id', 'Hi Dear\r\n\r\n      20 Different SEO Services For #1 Rankings Only $17 for lifetime http://phpcode.id\r\n\r\n      Sell SEO Service to your Client\r\n       \r\n      Keyword Research Tool = \r\n      1-click generate THOUSANDS of high-converting keywords!\r\n\r\n      \r\n      Backlink Maker\r\n      Bored of manually creating backlinks to your website? The Backlink Maker will handle that for you. Set it and forget about it.\r\n\r\n      Search Engine Spider Simulator\r\n\r\n      Backlinks Extractor\r\n      Use this tool to spy on your competitors&#039; backlinks and get useful insights into their link building activities.  \r\n\r\n      Keyword Density Checker\r\n      It is one of the ways search engines determine where your website should rank for a particular keyword. Check what&#039;s your keyword density.\r\n\r\n      No Monthly fee!\r\n      \r\n      only $17 OneTime Payment     \r\n     \r\n      30 Days 100% Money Back Guarantee\r\n\r\n      \r\n\r\nFor other  information  Visit at: https://bit.ly/3SUwdcJ\r\n', '2024-02-25 06:09:01', '1'),
(94, 'Abi', 'contentwriting011994@outlook.com', 'Content Writing Service Provider', 'Hello,\r\n\r\nI&#039;m Abi, an English SEO copywriter and content writer. I excel in crafting blogs, articles, e-commerce product descriptions, SEO content, website content, business service descriptions, newsletter content, brochures, proofreading, social media captions, LinkedIn content, and SOPs.\r\n\r\nMy rate is USD 40 for every 1000 words of content. If you don&#039;t have time to plan out your content, we can help you with that. \r\n\r\nFeel free to email me at Contentwriting011994@outlook.com with any current requirements.\r\n\r\nThanks,\r\n\r\nAbi\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '2024-02-26 05:45:41', '1'),
(95, 'Leonard Schweizer', 'schweizer.leonard95@gmail.com', 'Hello Administrator! SelfDrive Get upto 1000GB Storage OneTime Payment Only $19 http://phpcode.id', 'Hi Dear\r\n\r\n      Hello Owner. SelfDrive Get upto 1000GB Storage OneTime Payment Only $19 http://phpcode.id\r\n\r\n       \r\n      Just OneTime Payment for Lifetime\r\n      No Monthly Payment\r\n\r\n      $19 Only OneTime Payment     \r\n     \r\n      30 Days Money Back Guarantee\r\n\r\n      Free Storage Upto 1000 GB Storage\r\n\r\n      Access Files Anytime, Anywhere Directly From The Cloud On Any Device!\r\n\r\n      Easily Copy, Move Or Migrate Your Files From One Cloud To Another From A Single Dashboard\r\n\r\n      Stop Paying Huge Money Monthly To Big Cloud Storage Platforms Like One Drive, iCloud, Dropbox, Google Drive \r\n\r\n      Get More Online Storage Space Without Paying Single Penny Extra  \r\n\r\nFor more  information  Visit at: https://bit.ly/3u2c0t3\r\n', '2024-02-29 04:11:54', '1'),
(96, 'Shona Braden', 'shona.braden@msn.com', 'WarriorPlus -- AI Platform Creator - Ultimate Set N\' Forget AI Platform Creator -- 54', 'Hi Buddy\r\n\r\n      Create Your Very Own AI Platforms Like JasperAI, Mid-Journey &amp; ChatGPT...\r\n      \r\n      Charge Your Customers Weekly, Monthly or Annually &amp; Easily Profit $500-1000...\r\n       \r\n      Built-In 200+ Top-Notch AI Tools For Maximum AI Content Generation &amp; Maximum Profits...\r\n\r\n      1-Click Domain Integration: Easily Integrate Your Domains &amp; Launch Your AI Platform With 1-Click…\r\n\r\n      Start Your Own AI Content Agency &amp; Profit Heavily Selling AI Contents On Fiverr Like - Images, Videos, Voice-Overs &amp; More...\r\n\r\n   \r\n      No Monthly fee!\r\n      \r\n      only $17 OneTime Payment     \r\n     \r\n      30 Days 100% Money Back Guarantee\r\n\r\n      \r\n\r\nFor extra info  Visit at: https://bit.ly/4acCYxB', '2024-03-01 05:52:47', '1'),
(97, 'Joel Whitehouse', 'joel.whitehouse68@gmail.com', 'Hello Administrator. 1400 Niche Sites - Guest Posting at only $10 for ur Site http://phpcode.id', 'To the Admin! 1400 Niche Sites - Guest Posting at only $10 for ur Site http://phpcode.id\r\n\r\nHI Friend\r\n\r\n\r\nI have found that you are purchasing guest posting links for your site http://phpcode.id. I am also link seller and doing guest bloging for many clients.\r\nYou will get high DA niche sites guest posting at only $10.\r\n\r\n    High DA\r\n    Niches Sites \r\n    Quality Sites\r\n    Fixed Price\r\n    Payment Paypal\r\n\r\nEmail mention in Sheet\r\n\r\nI have attached my google sheets of sites\r\n\r\nVisit: https://bit.ly/3tRldUT\r\nHi Owner. 1400 Niche Sites - Guest Posting at only $10 for ur Site http://phpcode.id\r\n\r\nHello Buddy\r\n\r\n\r\nI have come to that you are buying guest posting links for your site http://phpcode.id. I am also link seller and doing guest bloging for many clients.\r\nYou will get high DA niche sites guest posting at only $10.\r\n\r\n    High DA\r\n    Niches Sites \r\n    Quality Sites\r\n    Fixed Price\r\n    Payment Paypal\r\n\r\nEmail mention in Sheet\r\n\r\nI have attached my google sheets of sites\r\n\r\nVisit: https://bit.ly/3tRldUT\r\n', '2024-03-03 04:54:29', '1'),
(98, 'Megan Atkinson', 'meganatkinson149@gmail.com', 'Instagram Promotion: 300-1000 new followers each month', 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers both safely and practically. \r\n\r\n- We guarantee to gain you 300-1000+ followers per month.\r\n- People follow you because they are interested in you, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any &#039;bots&#039;.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nMegan\r\n\r\nUnsubscribe here: https://removeme.click/unsubscribe.php?d=phpcode.id', '2024-03-03 06:07:46', '1'),
(99, 'Una Bermudez', 'una.bermudez@googlemail.com', 'Hi Admin. Get UNLIMITED REAL HQ WEB 3.0 Sites BACKLINKS for your site http://phpcode.id', 'Hi Buddy\r\n\r\n      Get UNLIMITED REAL HQ WEB 3.0 Sites BACKLINKS for your site http://phpcode.id\r\n\r\n      Generate Unlimited HQ Backlinks For Your Blogs, Websites Etc On Autopilot\r\n      \r\n      Get Faster Indexing For Your All Webpages\r\n\r\n      Get More Real Traffic for Sale \r\n \r\n      Only $11.97 One time Payment - Coupon Code = BLINK3\r\n\r\n      No Special Skills or Experience Required\r\n\r\n      Money Back Gurantee\r\n\r\n\r\nFor more info  Go at: https://bit.ly/42k0yWs\r\n\r\n', '2024-03-04 05:15:43', '1'),
(100, 'MasonWab', 'kaenquirynicholls@gmail.com', 'Hello    write about your the prices', 'Hi, I wanted to know your price.', '2024-03-09 04:49:14', '1'),
(101, 'Amelia Brown', 'ameliabrown0325@gmail.com', 'YouTube Promotion: 700-1500 new subscribers each month', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically. \r\n\r\n- We guarantee to gain you 700-1500 new subscribers per month.\r\n- People subscribe because they are interested in your videos/channel, increasing video likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any &#039;bots&#039;.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you&#039;d like to see some of our previous work, let me know, and we can discuss it further.\r\n\r\nKind Regards,\r\nAmelia', '2024-03-11 22:02:35', '1'),
(102, 'Lashawn Mares', 'lashawn.mares@gmail.com', 'Hi Owner! Get Unlimited Hosting Lifetime Only $3 http://phpcode.id', 'Hi Dear\r\n\r\n      Get Unlimited Hosting Lifetime Only $3 http://phpcode.id\r\n      \r\n      No Monthly Fees Ever... \r\n       \r\n      100% Newbie-Friendly Interface... \r\n\r\n      Host Unlimited Websites.... \r\n\r\n      No yearly Payment\r\n\r\n   \r\n      No Monthly fee!\r\n      \r\n      only $17 OneTime Payment     \r\n     \r\n      30 Days 100% Money Back Guarantee\r\n\r\n      \r\n\r\nFor extra info  Visit at: https://bit.ly/3TBQu7h\r\n', '2024-03-14 17:06:39', '1'),
(103, 'Ted Kroll', 'ted.kroll@googlemail.com', 'Hello Owner! 250 Niche Sites - Guest Posting at only $3-5 for ur Site http://phpcode.id/', 'I have found that you are getting guest posting links for your site http://phpcode.id/. I am also link seller and doing guest bloging for many clients.\r\nYou will get high DR niche sites guest posting at only $3.\r\n\r\n\r\n    $5 per Post\r\n    $3 for 10+ post order \r\n    Fixed Price\r\n    Payment Paypal\r\n\r\nEmail mention in Sheet\r\n\r\nI have attached my google sheets of sites\r\n\r\nVisit: https://bit.ly/48upKvD\r\n', '2024-03-16 07:19:58', '1'),
(104, 'Danielle Simpson', 'simpsondanielle800@gmail.com', 'Explainer Video for phpcode.id', 'Hi,\r\n\r\nWe&#039;d like to introduce to you our explainer video service, which we feel can benefit your site phpcode.id.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=8S4l8_bgcnc\r\nhttps://www.youtube.com/watch?v=bWz-ELfJVEI\r\nhttps://www.youtube.com/watch?v=Y46aNG-Y3rM\r\nhttps://www.youtube.com/watch?v=hJCFX1AjHKk\r\n\r\nOur prices start from as little as $195 and include a professional script and voice-over.\r\n\r\nIf this is something you would like to discuss further, don&#039;t hesitate to reply.\r\n\r\nKind Regards,\r\nDanielle', '2024-03-16 09:38:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(35) DEFAULT NULL,
  `slug_kategori` varchar(50) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `slug_kategori`, `create_date`) VALUES
(1, 'tips dan trick', 'tips-dan-trick', '2024-07-25 01:25:37'),
(2, 'artificial intelligence', 'artificial-intelligence', '2024-07-25 01:27:27'),
(3, 'teknologi', 'teknologi', '2024-07-25 01:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `pass_64` varchar(40) NOT NULL,
  `status_user` int(11) NOT NULL,
  `tgl_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `role_id`, `nama_user`, `username`, `password`, `pass_64`, `status_user`, `tgl_create`) VALUES
(1, 1, 'administrator', 'admin', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', 1, '2024-07-25 06:38:45'),
(5, 1, 'admin5', 'admin5', '26a91342190d515231d7238b0c5438e1', 'YWRtaW41', 1, '2024-05-03 16:16:12'),
(7, 2, 'admin4', 'admin4', '32250170a0dca92d53ec9624f336ca24', 'cGFzczEyMw==', 1, '2024-05-03 16:29:08'),
(8, 2, 'aptikom', 'aptikom', '926e30725fc4944d16afa079031825cc', 'YXB0aWtvbQ==', 1, '2024-06-02 10:26:17'),
(9, 1, 'admin', 'admin', 'aptikom', '', 1, '2024-07-08 23:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `tujuanft_aptikom`
--

CREATE TABLE `tujuanft_aptikom` (
  `id` int(11) NOT NULL,
  `tujuan` text DEFAULT NULL,
  `fungsi` text DEFAULT NULL,
  `tugas` text DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tujuanft_aptikom`
--

INSERT INTO `tujuanft_aptikom` (`id`, `tujuan`, `fungsi`, `tugas`, `tgl_create`) VALUES
(1, '<ol>\r\n<li>Mengembangkan serta meningkatkan kemampuan anggota untuk menyiapkan peserta didik menjadi manusia Indonesia yang memiliki kemampuan utama dalam bidang informatika dan komputer, yang dilandasi oleh keimanan dan ketakwaan kepada Tuhan Yang Maha Esa, berbudi luhur serta berwawasan kebangsaan;</li>\r\n<li>Mengembangkan serta meningkatkan kemampuan anggota agar dapat berperan sebagai agen pembangunan terdepan dalam usaha meneliti, mengembangkan, dan menerapkan ilmu pengetahuan dan teknologi dalam bidang informatika dan komputer, seni dan budaya bangsa untuk meningkatkan taraf kehidupan bangsa;</li>\r\n<li>Memelihara dan menegakkan kredibilitas dan akuntabilitas anggota di masyarakat;</li>\r\n<li>Mengembangkan persatuan dan kesatuan anggota dalam usaha menyumbangkan darma baktinya bagi masyarakat, nusa dan bangsa.</li>\r\n</ol>', '<p><strong>Internal</strong></p>\r\n<ol>\r\n<li>Pembinaan dan pemberdayaan kemampuan anggota.</li>\r\n<li>Pertumbuhan dan pengembangan untuk meningkatkan kinerja anggota.</li>\r\n<li>Evaluasi dan penilaian untuk meningkatkan kualitas masing-masing anggota.</li>\r\n</ol>\r\n<p><strong>Eksternal</strong></p>\r\n<ol>\r\n<li>Mitra dalam pengembangan, pemberdayaan dan pemanfaatan dari informatika dan komputer dilingkungan pemerintah, masyarakat, dan industri.</li>\r\n<li>Representasi komunitas akademis dalam kancah regional dan internasional.</li>\r\n<li>Institusi advokasi pengembangan dan pemanfaatan bidang informatika dan komputer bagi setiap jenjang pendidikan lainnya di Indonesia</li>\r\n</ol>', '<ol>\r\n<li>Menghimpun dan mempersatukan institusi penyelenggara pendidikan bidang informatika dan komputer untuk menjadi anggota Aptikom.</li>\r\n<li>Merumuskan visi dan misi serta arah pendidikan tinggi dalam bidang informatika dan komputer sebagai masukan untuk menentukan kebijakan pendidikan tinggi nasional;</li>\r\n<li>Menampung aspirasi dan memperjuangkan kepentingan anggota;</li>\r\n<li>Membina anggota dalam melaksanakan pengelolaan dan pengembangan perguruan tinggi penyelenggara pendidikan informatika dan komputer secara efisien dan efektif.</li>\r\n<li>Melakukan usaha-usaha dan kegiatan-kegiatan lain yang perlu dan bermanfaat bagi anggota dalam menjalankan tugas profesinya.</li>\r\n</ol>', '2024-07-12 18:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi_aptikom`
--

CREATE TABLE `visimisi_aptikom` (
  `idvm` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `tgl_create` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visimisi_aptikom`
--

INSERT INTO `visimisi_aptikom` (`idvm`, `visi`, `misi`, `tgl_create`) VALUES
(1, '<p>Pada tahun 2026 menjadi Asosiasi terkemuka yang bereputasi internasional, memiliki jejaring global, dan memberikan kontribusi signifikan bagi peningkatan kualitas Pendidikan Tinggi Informatika dan Komputer di Indonesia</p>', '<div class=\"elementor-element elementor-element-e4edd5f elementor-widget elementor-widget-text-editor\" data-id=\"e4edd5f\" data-element_type=\"widget\" data-widget_type=\"text-editor.default\">\r\n<div class=\"elementor-widget-container\">\r\n<ol>\r\n<li>Membina dan mengembangkan kapasitas Perguruan Tinggi pada umumnya dan Program Studi bidang Informatika dan Komputer pada khususnya.</li>\r\n<li>Meningkatkan mutu pendidikan, penelitian dan pengembangan di bidang InformaInforma-tika dan Komputer.</li>\r\n<li>Membantu pemerintah dalam rangka pengembangan standar standar terkait penyelenggaraan pendidikan tinggi di bidang Informatika dan Komputer.</li>\r\n<li>Merintis dan melakukan upaya kerjasama dengan berbagai pihak, pemerintah, industri, asosiasi lain, lembaga lembaga baik dalam maupun luar negeri dalam bidang Informatika dan Komputer.</li>\r\n</ol>\r\n</div>\r\n</div>', '2024-07-12 18:02:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_website`
--
ALTER TABLE `about_website`
  ADD KEY `id` (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD KEY `id` (`id`);

--
-- Indexes for table `anggotaxxxx`
--
ALTER TABLE `anggotaxxxx`
  ADD KEY `id` (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `calon_ketua`
--
ALTER TABLE `calon_ketua`
  ADD KEY `id` (`id`);

--
-- Indexes for table `detail_votting`
--
ALTER TABLE `detail_votting`
  ADD KEY `id` (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD KEY `id` (`id`);

--
-- Indexes for table `informasi_beranda`
--
ALTER TABLE `informasi_beranda`
  ADD KEY `id` (`id`);

--
-- Indexes for table `kategorixxx`
--
ALTER TABLE `kategorixxx`
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_konfrens`
--
ALTER TABLE `kategori_konfrens`
  ADD KEY `id_konfrens` (`id_konfrens`);

--
-- Indexes for table `kategori_prodi`
--
ALTER TABLE `kategori_prodi`
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `konferensi`
--
ALTER TABLE `konferensi`
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `sejarah_aptikom`
--
ALTER TABLE `sejarah_aptikom`
  ADD KEY `idsj` (`idsj`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD KEY `id` (`id`);

--
-- Indexes for table `struktur_aptikom`
--
ALTER TABLE `struktur_aptikom`
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tujuanft_aptikom`
--
ALTER TABLE `tujuanft_aptikom`
  ADD KEY `id` (`id`);

--
-- Indexes for table `visimisi_aptikom`
--
ALTER TABLE `visimisi_aptikom`
  ADD KEY `idvm` (`idvm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_website`
--
ALTER TABLE `about_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `anggotaxxxx`
--
ALTER TABLE `anggotaxxxx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `calon_ketua`
--
ALTER TABLE `calon_ketua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail_votting`
--
ALTER TABLE `detail_votting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `informasi_beranda`
--
ALTER TABLE `informasi_beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategorixxx`
--
ALTER TABLE `kategorixxx`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_konfrens`
--
ALTER TABLE `kategori_konfrens`
  MODIFY `id_konfrens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_prodi`
--
ALTER TABLE `kategori_prodi`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `konferensi`
--
ALTER TABLE `konferensi`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sejarah_aptikom`
--
ALTER TABLE `sejarah_aptikom`
  MODIFY `idsj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `struktur_aptikom`
--
ALTER TABLE `struktur_aptikom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tujuanft_aptikom`
--
ALTER TABLE `tujuanft_aptikom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visimisi_aptikom`
--
ALTER TABLE `visimisi_aptikom`
  MODIFY `idvm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
