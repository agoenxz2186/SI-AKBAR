<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Tujuang Fungsi Tugas Aptikom</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profil</a></li>
                        <li class="breadcrumb-item active">Tujuang Fungsi Tugas</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tujuang Fungsi Tugas Aptikom</h4>
                        <form method="post" action="<?= base_url() ?>user/ProfilAptikom/update_tujuanft">
                            <input type="hidden" name="xid" value="<?= $data->id ?>">

                            <div class="form-group">
                                <label class="col-md-12" for="bdate">Tujuan</span>
                                </label>
                                <textarea id="mymce" name="xtujuan"><?= $data->tujuan ?></textarea>

                            </div>


                            <div class="form-group">
                                <label class="col-md-12" for="bdate">Fungsi</span>
                                </label>
                                <textarea id="mymce" name="xfungsi"><?= $data->fungsi ?></textarea>

                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="bdate">Tugas</span>
                                </label>
                                <textarea id="mymce" name="xtugas"><?= $data->fungsi ?></textarea>

                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success btn-rounded" type="button"><i class="fa fa-check"></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>