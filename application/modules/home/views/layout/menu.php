<header>
    <div id="header2" class="header2-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-left">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:<?= $about->telpon ?>"> <?= $about->telpon ?> </a></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?= $about->email ?>"><?= $about->email ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-right">
                            <ul>
                                <li><a href="<?= $about->youtube ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>

                                <li><a href="<?= $about->facebook ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                                <li><a href="<?= $about->instagram ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                                <li><a href="<?= $about->whatsap ?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg-textPrimary" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-3">
                        <div class="logo-area">
                            <a href="<?= base_url() ?>index.js"><img class="img-responsive" src="<?php echo base_url() . './assets/images/' . $about->images ?>" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <nav id="desktop-nav">
                            <ul>
                                <li class="active"><a href="<?= base_url() ?>index.js">Beranda</a>

                                </li>

                                <li><a href="#">Profil</a>
                                    <ul>
                                        <li><a href="<?= base_url() ?>sejarah-singkat.js">Sejarah Singkat</a></li>
                                        <li><a href="<?= base_url() ?>visi-misi.js">Visi Misi</a></li>
                                        <li><a href="<?= base_url() ?>tujuan-fungsi-tugas.js">Tujuan, Fungsi dan Tugas</a></li>
                                        <li><a href="<?= base_url() ?>struktur-organisasi.js">Struktur Organisasi</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Anggota</a>
                                    <ul>
                                        <li><a href="<?= base_url() ?>keanggotaan.js">Keanggotaan Individu</a></li>
                                        <li><a href="<?= base_url() ?>keanggotaan-prodi.js">Keanggotaan Prodi</a></li>
                                        <li><a href="<?= base_url() ?>e-votting-calon.js">E-Votting</a></li>
                                        <li><a href="<?= base_url() ?>grafik-anggota.js">Grafik Anggota</a></li>
                                        <li><a href="<?= base_url() ?>login.js">Login</a></li>

                                    </ul>
                                </li>

                                <li><a href="#">Artikel</a>
                                    <ul>
                                        <?php
                                        $query = $this->db->get('tbl_kategori');
                                        foreach ($query->result() as $row) :
                                        ?>
                                            <li><a href="<?php echo base_url() . 'kategori-artikel-' . $row->slug_kategori . '.js' ?>">
                                                    <?php echo strtoupper($row->nama_kategori); ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>

                                <li><a href="#">Konferensi</a>
                                    <ul>
                                        <?php
                                        $query = $this->db->get('kategori_konfrens');
                                        foreach ($query->result() as $row) :
                                        ?>
                                            <li><a href="<?php echo base_url() . 'kategori-agenda-' . $row->slug . '.js' ?>">
                                                    <?php echo strtoupper($row->nama_konfrens); ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>

                                <li><a href="<?= base_url() ?>kontak.js">Kontak</a>

                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-1 col-md-1 hidden-sm">
                        <div class="header-search">
                            <form class="top-search-form" method="get" action="<?php echo site_url('search.js'); ?>">
                                <input type="text" class="search-form" name="search_query" placeholder="Search...." required="">
                                <a href="#" class="search-button" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="#">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index2.html">Home 2</a></li>
                                        <li><a href="index3.html">Home 3</a></li>
                                        <li><a href="index4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about1.html">About 1</a></li>
                                        <li><a href="about2.html">About 2</a></li>
                                        <li><a href="about3.html">About 3</a></li>
                                        <li><a href="about4.html">About 4</a></li>
                                        <li><a href="lecturers1.html">lecturers 1</a></li>
                                        <li><a href="lecturers2.html">lecturers 2</a></li>
                                        <li><a href="single-lecturers.html">lecturers Details</a></li>
                                        <li><a href="pricing1.html">Pricing Plan 1</a></li>
                                        <li><a href="pricing2.html">Pricing Plan 2</a></li>
                                        <li><a href="shop1.html">Shop 1</a></li>
                                        <li><a href="shop2.html">Shop 2</a></li>
                                        <li><a href="single-shop.html">Shop Details</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Courses</a>
                                    <ul>
                                        <li><a href="courses1.html">Courses 1</a></li>
                                        <li><a href="courses2.html">Courses 2</a></li>
                                        <li><a href="courses3.html">Courses 3</a></li>
                                        <li><a href="single-courses1.html">Course Details 1</a></li>
                                        <li><a href="single-courses2.html">Course Details 2</a></li>
                                        <li><a href="single-courses3.html">Course Details 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Research</a>
                                    <ul>
                                        <li><a href="research1.html">Research 1</a></li>
                                        <li><a href="research2.html">Research 2</a></li>
                                        <li><a href="research3.html">Research 3</a></li>
                                        <li><a href="single-research.html">Research Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">News</a>
                                    <ul>
                                        <li class="has-child-menu"><a href="#">News</a>
                                            <ul class="thired-level">
                                                <li><a href="news1.html">News 1</a></li>
                                                <li><a href="news2.html">News 2</a></li>
                                                <li><a href="single-news.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child-menu"><a href="#">Event</a>
                                            <ul class="thired-level">
                                                <li><a href="event.html">Event</a></li>
                                                <li><a href="single-event.html">Event Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery1.html">Gallery 1</a></li>
                                        <li><a href="gallery2.html">Gallery 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a>
                                    <ul>
                                        <li><a href="contact1.html">Contact 1</a></li>
                                        <li><a href="contact2.html">Contact 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End -->
</header>