<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Edit Data</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Calon Ketua</a></li>
                        <li class="breadcrumb-item active">Edit Calon Ketua</li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Data</h4>
                        <form action="<?= base_url() ?>user/Votting/update" method="post" enctype="multipart/form-data">
                            <div class="form-group m-t-40 row">
                                <input type="hidden" value="<?= $data->id ?>" name="xid">
                                <label for="example-text-input" class="col-2 col-form-label">Nomor Urut</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" value="<?= $data->no_urut ?>" placeholder="Masukan Nomor Urut Calon Ketua" name="xnomor" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Nama Calon Ketua Aptikom</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" value="<?= $data->nama ?>" placeholder="Masukan Nama Calon Ketua" name="xnama" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Status </label>
                                <div class="col-10">
                                    <select class="form-control" name="xstatus" required>
                                        <option value="1">Publish</option>
                                        <option value="2">Unpublish</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Visi</label>
                                <div class="col-10">
                                    <textarea id="mymce" name="xvisi" rows="8"><?= $data->visi ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Misi</label>
                                <div class="col-10">
                                    <textarea id="mymce" name="xmisi" rows="8"><?= $data->misi ?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Images Calon</label>
                                <div class="col-10">
                                    <?php if (file_exists("assets/images/" . $data->images)) { ?>
                                        <img src="<?php echo base_url() . 'assets/images/' . $data->images; ?>" alt="" lass="dropify" width="200" height="200">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="hidden" id="special" name="foto" class="form-control" placeholder="Foto" value="<?php echo $data->images; ?>" required>
                                    <?php
                                    } ?>
                                    <input type="file" id="input-file-now" name="filefoto" accept="application/jpg" />
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                <a href="<?= base_url() ?>/calon-ketua-admin.js" button type="button" class="btn btn-danger">Batal </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>