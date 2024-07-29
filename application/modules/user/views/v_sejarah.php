<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Sejarah Aptikom</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profil</a></li>
                        <li class="breadcrumb-item active">Sejarah</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sejarah Aptikom</h4>
                        <form method="post" action="<?= base_url() ?>user/ProfilAptikom/update_sejarah">
                            <input type="hidden" name="xid" value="<?= $data->idsj ?>">
                            <textarea id="mymce" name="xsejarah"> <?= $data->sejarah_aptikom ?></textarea>


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