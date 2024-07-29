<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Edit Data Kategori</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Kategori</a></li>
                        <li class="breadcrumb-item active">Edit Kategori</li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Kategori</h4>
                        <form action="<?= base_url() ?>user/Konferensi/update_kategori" method="post">

                            <div class="form-group m-t-40 row">

                                <input type="hidden" name="xid" value="<?= $data->id_konfrens ?>">
                                <label for="example-text-input" class="col-2 col-form-label">Nama Kategori</label>
                                <div class="col-10">
                                    <input class="form-control title" type="text" value="<?= $data->nama_konfrens ?>" name="xnama" placeholder="masukan nama kategori" required>
                                    <br>
                                    <br>
                                    <input class="form-control slug" type="text" value="<?= $data->slug ?>" name="xslug" placeholder="masukan slug kategori" required>
                                </div>
                            </div>



                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                <a href="<?= base_url() ?>kategori-konferensi-admin.js" button type="button" class="btn btn-danger">Batal </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>