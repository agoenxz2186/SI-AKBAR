<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Struktur Organisasi Aptikom</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profil</a></li>
                        <li class="breadcrumb-item active">Struktur</li>
                    </ol>
                </div>
            </div>
        </div>

        <section id="horizontal-form-layouts">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3><b class='text-danger'>Update Kontak Website</b></h3>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collpase show">
                            <div class="card-body">


                                <form action="<?php echo base_url() . 'user/About/update_site' ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <input type="hidden" name="xkode" value="<?= $data->id ?>" />

                                        <div class="form-group row">
                                            <input type="hidden" name="kode" />

                                            <label class="col-md-3 label-control" for="projectinput1"> Judul
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <input type="text" id="projectinput1" class="form-control" placeholder="Masukan nama" value="<?= $data->judul ?>" name="xjudul">
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput4">E-Mail
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <input type="text" id="projectinput4" class="form-control" placeholder="Masukan Nama Koordinator" value="<?= $data->email ?>" name="xemail">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput4">Telpon
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <input type="text" id="projectinput4" class="form-control" placeholder="Masukan Nomor Telpon" value="<?= $data->telpon ?>" name="xtelpon">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput9">Address
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <textarea id="projectinput9" rows="5" class="form-control" name="xalamat" placeholder=" Masukan Deskripsi"><?= $data->alamat ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput4">Link
                                                Chanel Youtube
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <input type="text" id="projectinput4" class="form-control" placeholder="Masukan link youtube" value="<?= $data->youtube ?>" name="xyoutube">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput4">Facebook
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <input type="text" id="projectinput4" class="form-control" placeholder="Masukan facebook" value="<?= $data->facebook ?>" name="xfb">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput4">Instagram
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <input type="text" id="projectinput4" class="form-control" placeholder="Masukan Nomor Instagram" value="<?= $data->instagram ?>" name="xig">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput4">Whatshap
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <input type="text" id="projectinput4" class="form-control" placeholder="Masukan Nomor wahatshapp" value="<?= $data->whatsap ?>" name="xwa">
                                            </div>
                                        </div>





                                        <div class="form-group row">
                                            <label class="col-md-3 label-control"> Site Logo</label>
                                            <div class="col-md-9 mx-auto">
                                                <label id="projectinput8" class="file center-block">
                                                    <?php if (file_exists("assets/images/" . $data->images)) { ?>
                                                        <img src="<?php echo base_url() . 'assets/images/' . $data->images; ?>" alt="" lass="dropify" width="200" height="200">
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <input type="hidden" id="special" name="foto" class="form-control" placeholder="Foto" value="<?php echo $data->images; ?>">
                                                    <?php
                                                    } ?>
                                                    <input type="file" id="input-file-now" name="filefoto" accept="application/jpg" />
                                                    <small class="form-text text-muted"></small>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput9">Tentang Kami
                                                :</label>
                                            <div class="col-md-9 mx-auto">
                                                <textarea id="classic-editor" rows="10" class="form-control" name="xisi" placeholder="Isi tentang kami"><?= $data->deskripsi ?>

                                                        </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="projectinput4">Tampil Vote
                                            </label>
                                            <div class="col-md-9 mx-auto">
                                                <select name="tampil_vote" class="form-control" id="">
                                                    <option value="2" <?= ($data->tampil_vote == 2) ? 'selected' : '' ?>>Tidak Aktif
                                                    </option>
                                                    <option value="1" <?= ($data->tampil_vote == 1) ? 'selected' : '' ?>>Aktif
                                                    </option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="form-actions">

                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>

</div>