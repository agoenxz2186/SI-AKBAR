<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Visi Misi Aptikom</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profil</a></li>
                        <li class="breadcrumb-item active">Visi Misi</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visi Misi Aptikom</h4>
                        <form method="post" action="<?= base_url() ?>user/ProfilAptikom/update_visimisi">
                            <input type="hidden" name="xid" value="<?= $data->idvm ?>">

                            <div class="form-group">
                                <label class="col-md-12" for="bdate">Visi</span>
                                </label>
                                <textarea id="mymce" name="xvisi"> <?= $data->visi ?> </textarea>

                            </div>


                            <div class="form-group">
                                <label class="col-md-12" for="bdate">Misi</span>
                                </label>
                                <textarea id="mymce" name="xmisi"> <?= $data->misi ?> </textarea>

                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success btn-rounded" type="button"> <i class="fa fa-check"></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>