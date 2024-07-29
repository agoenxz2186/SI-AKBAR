<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Tambah Data</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Calon Ketua</a></li>
                        <li class="breadcrumb-item active">Add Calon Ketua</li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Tambah Data</h4>
                        <form action="<?= base_url() ?>user/Votting/save_calon" method="post" enctype="multipart/form-data">
                            <div class="form-group m-t-40 row">
                                <label for="example-text-input" class="col-2 col-form-label">Nomor Urut</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="Masukan Nomor Urut Calon Ketua" name="xnomor" required>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Nama Calon Ketua Aptikom</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" placeholder="Masukan Nama Calon Ketua" name="xnama" required>
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
                                    <textarea id="mymce" name="xvisi" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Misi</label>
                                <div class="col-10">
                                    <textarea id="mymce" name="xmisi" rows="8"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Images Calon</label>
                                <div class="col-10">
                                    <input class="form-control" type="file" name="filefoto" required>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                <a href="<?= base_url() ?>/calon-ketua-admin.js" button type="button" class="btn btn-danger">Batal </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>