<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">

            </div>

        </div>




        <?php $nama = $this->session->userdata('nama_anggota'); ?>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Selamat Datang di Aplikasi <?= $title ?> &nbsp; Kalbar<b
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