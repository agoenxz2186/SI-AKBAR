<aside class="left-sidebar">
    <div class="scroll-sidebar">

        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro">

                    <?php $nama = $this->session->userdata('nama_user'); ?>

                    <a href="javascript:void(0)" aria-expanded="false"><img
                            src="<?php echo base_url() . 'assets/img/profile.png' ?>" alt="user-img"
                            class="img-circle"><span class="hide-menu"><?= $nama ?></span><BR><small
                            class="text-success">online</small></a>


                </li>
                <li> <a class="waves-effect waves-dark" href="<?= base_url() ?>dashboard-admin.js"
                        aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu"> Beranda</span></a></li>


                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-image"></i><span class="hide-menu">Slider Home <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>images-slider-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Image Slider </a></li>

                    </ul>
                </li>


                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-users"></i><span class="hide-menu">Data Anggota <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>anggota-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Anggota </a></li>
                        <li><a href="<?= base_url() ?>anggota-verifikasi-admin.js"><i
                                    class="fa  fa-angle-double-right"></i>
                                Verifikasi Anggota </a></li>
                    </ul>
                </li>

                <!--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-building"></i><span class="hide-menu">Data Anggota Prodi <span class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>anggota-prodi-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Anggota </a></li>
                        <li><a href="<?= base_url() ?>anggota-prodi-verifikasi-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Verifikasi Anggota </a></li>
                    </ul>
                </li> -->


                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-bar-chart-o"></i><span class="hide-menu">Data E-Votting <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>calon-ketua-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Data Calon </a></li>

                        <li><a href="<?= base_url() ?>hasil-votting-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Hasil E-Votting</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-list"></i><span class="hide-menu">Program Studi <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>program-studi-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Program Studi </a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-edit (alias)"></i><span class="hide-menu">Artikel <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>artikel-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Artikel </a></li>

                        <li><a href="<?= base_url() ?>kategori-artikel-admin.js"><i
                                    class="fa  fa-angle-double-right"></i>
                                Kategori</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa  fa-calendar-o"></i><span class="hide-menu">Konferensi <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>konferensi-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Konferensi </a></li>

                        <li><a href="<?= base_url() ?>kategori-konferensi-admin.js"><i
                                    class="fa  fa-angle-double-right"></i>
                                Kategori</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa  fa-institution"></i><span class="hide-menu">Profil Aptikom<span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>sejarah-aptikom-admin.js"><i
                                    class="fa  fa-angle-double-right"></i>
                                Sejarah Aptikom</a></li>

                        <li><a href="<?= base_url() ?>visi-misi-aptikom-admin.js"><i
                                    class="fa  fa-angle-double-right"></i>
                                Visi & Misi</a></li>

                        <li><a href="<?= base_url() ?>tujuan-fungsi-tugas-aptikom-admin.js"><i
                                    class="fa  fa-angle-double-right"></i>
                                Tujuan, Fungsi & Tugas</a></li>

                        <li><a href="struktur-aptikom-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Struktur Organisasi</a></li>

                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-cogs"></i><span class="hide-menu">Setting <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="about-aptikom-admin.js"><i class="fa  fa-angle-double-right"></i>
                                About Website</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-envelope-o"></i><span class="hide-menu">Inbox <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>inbox-aptikom-admin.js"><i class="fa  fa-angle-double-right"></i>
                                Inbox</a></li>

                    </ul>
                </li>


                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-bullhorn"></i><span class="hide-menu">Info Beranda <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="<?= base_url() ?>informasi-beranda.js"><i class="fa  fa-angle-double-right"></i>
                                Informasi Beranda</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class=" icon-user-follow  "></i><span class="hide-menu">Data User & Akses <span
                                class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="user-akses-aptikom-admin.js"><i class="fa  fa-angle-double-right"></i> User & Akses
                            </a></li>
                    </ul>
                </li>



                <li> <a class="waves-effect waves-dark" onclick="return confirm('Are you sure you want to log out')"
                        href="<?php echo base_url() . 'logout-admin.js' ?>" aria-expanded="false"><i
                            class=" fa fa-lg fa-fw fa-sign-out"></i><span class="hide-menu"> Keluar</span></a></li>


        </nav>
    </div>
</aside>