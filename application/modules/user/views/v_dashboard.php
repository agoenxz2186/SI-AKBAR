<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">

            </div>

        </div>


        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fa fa-users"></i></h3>

                                    <h5 class="counter text-danger"><b>Anggota Individu</b></h5></a>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-primary"><?= $anggota->jumlah ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">

                            <h5 class="counter text-danger"><i class="fa    fa-hand-o-right"> <a
                                        href="<?= base_url() ?>anggota-admin.js" class="counter text-danger">Lihat
                                        Data</a></i></h5>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Column -->
            <!-- Column -->

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fa fa-list"></i></h3>

                                    <h5 class="counter text-info"><b>Data Prodi</b></h5></a>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-info"><?= $prodi->jumlah ?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">

                            <h5 class="counter text-info"><i class="fa    fa-hand-o-right"> <a
                                        href="<?= base_url() ?>program-studi-admin.js" class="counter text-info"> Lihat
                                        Data</a></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fa fa-user"></i></h3>

                                    <h5 class="counter text-success"><b>User & Akses</b></h5></a>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-success"><?= $userakses->jumlah ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">

                            <h5 class="counter text-success"><i class="fa    fa-hand-o-right"> <a
                                        href="<?= base_url() ?>user-akses-aptikom-admin.js"
                                        class="counter text-success"> Lihat Data</a></i></h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?php $nama = $this->session->userdata('nama_user'); ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Selamat Datang di Aplikasi <?= $title ?> &nbsp;<b
                        class='text-danger'><?= $nama ?></b></h5>

            </div>
        </div>


        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Terbaru:</h5>
                        <h6><b class='text-danger'><?php echo $info->judul; ?> </b><br><?php echo $info->deskripsi; ?>
                            <br>
                            <br>
                            <?php if ($info->file == '') { ?>


                            <?php

                            } else {
                            ?>

                            <a href="<?php echo base_url() . './assets/dokumen/' . $info->file ?>" button type="button"
                                class="btn-xs btn btn-success"><i class="fa  fa-cloud-download"></i> Download
                                File </a>
                            <?php
                            } ?>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>