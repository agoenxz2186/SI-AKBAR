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

                        <div class="card-content collpase show">
                            <div class="card-body">


                                <form action="<?php echo base_url() . 'user/ProfilAptikom/update_struktur' ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-body">

                                        <input type="hidden" name="kode" value="<?= $data->id ?>" />



                                        <div class="form-group row">
                                            <label class="col-md-3 label-control"> Gambar Struktur</label>

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