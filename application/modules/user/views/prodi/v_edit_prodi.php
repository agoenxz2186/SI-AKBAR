<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Edit Data Prodi</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Prodi</a></li>
                        <li class="breadcrumb-item active">Add Prodi</li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Program Studi</h4>
                        <form action="<?= base_url() ?>user/Prodi/update_prodi" method="post">
                            <div class="form-group m-t-40 row">
                                <label for="example-text-input" class="col-2 col-form-label">No SK</label>
                                <div class="col-10">
                                    <input class="form-control" value="<?= $data->no_sk ?>" type="text" name="xno_sk"
                                        placeholder="Masukan No SK" required>
                                </div>
                            </div>
                            <div class="form-group m-t-40 row">
                                <label for="example-text-input" class="col-2 col-form-label">Tanggal SK</label>
                                <div class="col-10">
                                    <input class="form-control" value="<?= $data->tgl_sk ?>" type="date" name="xtgl_sk"
                                        placeholder="Masukan Tanggal SK" required>
                                </div>
                            </div>
                            <div class="form-group m-t-40 row">
                                <input type="hidden" name="xid" value="<?= $data->id_prodi ?>">
                                <label for="example-text-input" class="col-2 col-form-label">Nama Prodi</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?= $data->nama_prodi ?>"
                                        name="xnama" placeholder="masukan nama Prodi" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Jenjang</label>
                                <div class="col-10">
                                    <select class="form-control" name="xjenjang">
                                        <option>--Pilih Jenjang--</option>
                                        <option value="D3" <?= ($data->jenjang == 'D3') ? 'selected' : '' ?>>D3</option>
                                        <option value="S1" <?= ($data->jenjang == 'S1') ? 'selected' : '' ?>>S1</option>
                                        <option value="S2" <?= ($data->jenjang == 'S2') ? 'selected' : '' ?>>S2</option>
                                        <option value="S3" <?= ($data->jenjang == 'S3') ? 'selected' : '' ?>>S3</option>
                                    </select>
                                </div>
                            </div>

                            <?= $data->jenjang ?>


                            <div class="form-group row">
                                <label for="example-url-input" class="col-2 col-form-label">Perguruan Tinggi</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?= $data->pts ?>" name="xpts"
                                        placeholder="masukan perguruan tinggi" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Status Prodi</label>
                                <div class="col-10">
                                    <select class="form-control" name="xstatus" required>
                                        <option value="1">Aktif</option>
                                        <option value="2">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
                                    Update</button>
                                <a href="<?= base_url() ?>program-studi-admin.js" button type="button"
                                    class="btn btn-danger">Batal </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>