<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Tambah Data Konferensi</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Konferensi</a></li>
                        <li class="breadcrumb-item active">Add Konferensi</li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Konferensi Baru</h4>
                        <form action="<?= base_url() ?>user/Konferensi/save_artikel" method="post" enctype="multipart/form-data">
                            <div class="form-group m-t-40 row">
                                <label for="example-text-input" class="col-2 col-form-label">Judul</label>
                                <div class="col-10">
                                    <input class="form-control title" type="text" name="xjudul" placeholder="masukan nama judul" required>
                                    <br>
                                    <br>
                                    <input type="text" name="slug" class="form-control slug" placeholder="Permalink" style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Kategori Artikel</label>
                                <div class="col-10">
                                    <select class="form-control" name="xkategori" required>

                                        <?php

                                        $ambilrole = $this->db->query('select*from kategori_konfrens');

                                        foreach ($ambilrole->result() as $row) :
                                        ?>
                                            <option value="<?= $row->id_konfrens ?>"><?= $row->nama_konfrens ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Tanggal Posting</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" name="xtanggal" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Status Artikel</label>
                                <div class="col-10">
                                    <select class="form-control" name="xstatus" required>
                                        <option value="1">Publish</option>
                                        <option value="2">Unpublish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Images Artikel</label>
                                <div class="col-10">
                                    <input class="form-control" type="file" name="filefoto" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Isi Artikel</label>
                                <div class="col-10">
                                    <textarea id="mymce" name="xisi" rows="8"></textarea>
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                <a href="<?= base_url() ?>/konferensi-admin.js" button type="button" class="btn btn-danger">Batal </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>