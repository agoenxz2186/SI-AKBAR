<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Pribadi</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Anggota</a></li>
                        <li class="breadcrumb-item active">verifikasi Pribadi</li>
                    </ol>

                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#pribadi"
                                    role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span
                                        class="hidden-xs-down">Identitas Anggota</span></a> </li>

                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="pribadi" role="tabpanel">
                                <div class="row">


                                    <div class="col-sm-12">
                                        <div class="card">

                                            <div class="card-body">
                                                <div class="card text-white bg-danger">
                                                    <div class="card-body">
                                                        <h3 class="card-title">Catatan :</h3>
                                                        <p class="card-text"><b>1. Pastikan data Anda sudah
                                                                benar. Jika data Anda masih salah atau kosong,
                                                                silakan Anda perbarui data Anda</b></p>




                                                    </div>
                                                </div>


                                                <!-- Progress Bar -->

                                                <font style="font-size:15px; color:red;"> <i>*Data telah
                                                        Update pada tanggal
                                                        <?php echo $b->create_at;




                                                        ?></i></font>

                                                <div class="card-header bg-info">
                                                    <h4 class="m-b-0 text-white">IDENTITAS ANGGOTA </h4>
                                                </div>

                                                <form
                                                    action="<?php echo base_url() . 'anggota/Votting/updatepribadi' ?>"
                                                    method="post">
                                                    <div class="form-group m-t-40 row">

                                                        <label for="example-text-input" class="col-2 col-form-label">ID
                                                            Anggota</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="text" name="xidanggota"
                                                                value="<?php echo $b->id_anggota ?>" readonly>
                                                        </div>
                                                    </div>



                                                    <div class="form-group row">
                                                        <label for="example-email-input"
                                                            class="col-2 col-form-label">Nama</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="text"
                                                                value="<?php echo  $b->nama_anggota ?>" name="xnama"
                                                                id="example-text-input">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label for="example-search-input"
                                                            class="col-2 col-form-label">Email</label>
                                                        <div class="col-10">
                                                            <input class="form-control" name="xemail" type="text"
                                                                value="<?php echo  $b->email ?>" required><br>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-search-input"
                                                            class="col-2 col-form-label">NO HP</label>
                                                        <div class="col-10">
                                                            <input class="form-control" name="xnohp" type="text"
                                                                value="<?php echo $b->nohp ?>" required><br>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input"
                                                            class="col-2 col-form-label">Tempat Lahir</label>
                                                        <div class="col-10">
                                                            <input class="form-control" name="xtmplh" type="text"
                                                                value="<?php echo  $b->lahir_tempat ?>"
                                                                id="example-text-input">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="example-email-input"
                                                            class="col-2 col-form-label">Tanggal Lahir</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="date" name="xtgllh"
                                                                value="<?php echo  $b->lahir_tanggal ?>"
                                                                id="example-text-input">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="example-email-input"
                                                            class="col-2 col-form-label">Jenis Kelamin</label>


                                                        <div class="col-10">
                                                            <select name="xjk" class="form-control custom-select"
                                                                data-placeholder="Choose a Category" tabindex="1"
                                                                required>
                                                                <option value="" disabled selected hidden>Click to
                                                                    Choose...</option>
                                                                <?php
                                                                if ($b->jns_k == 'L') {
                                                                ?>

                                                                <option value="L" selected> Laki-Laki </option>
                                                                <option value="P"> Perempuan </option>


                                                                <?php

                                                                } else {
                                                                ?>

                                                                <option value="L"> Laki-Laki </option>
                                                                <option value="P" selected> Perempuan </option>
                                                                <?php

                                                                }
                                                                ?>


                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="example-email-input"
                                                            class="col-2 col-form-label">Masa Berlaku Anggota</label>
                                                        <div class="col-10">
                                                            <input class="form-control" type="date" name="xmasa"
                                                                value="<?php echo  $b->masa_berlaku ?>"
                                                                id="example-text-input">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="example-email-input"
                                                            class="col-2 col-form-label">Universitas Pendidikan</label>
                                                        <div class="col-10">
                                                            <input class="form-control" name="xkmpus" type="text"
                                                                value="<?php echo $b->pts; ?>" id="example-text-input">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="example-email-input"
                                                            class="col-2 col-form-label">Program Studi</label>
                                                        <div class="col-10">
                                                            <input class="form-control" name="xilmu" type="text"
                                                                value="<?php echo $b->prodi; ?>"
                                                                id="example-text-input">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"> File Anggota</label>
                                                        <div class="col-md-9 mx-auto">
                                                            <label for="projectinput8" class="file center-block">
                                                                <a href="<?php echo base_url('assets/dokumen/' . $b->file_anggota); ?>"
                                                                    class="btn btn-success">
                                                                    <i class="fa fa-cloud-download"></i> Lihat File
                                                                    Lampiran
                                                                </a>
                                                            </label>
                                                        </div>
                                                    </div>







                                                    <button type="submit"
                                                        class="btn btn-info waves-effect text-right">Update
                                                        Data</button>




                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>






                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>