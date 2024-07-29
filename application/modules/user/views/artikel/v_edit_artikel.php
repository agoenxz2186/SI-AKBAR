<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Tambah Data Artikel</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Artikel</a></li>
                        <li class="breadcrumb-item active">Add Artikel</li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Artikel Baru</h4>
                        <form action="<?= base_url() ?>user/artikel/update_artikel" method="post" enctype="multipart/form-data">
                            <div class="form-group m-t-40 row">
                                <input type="hidden" value="<?= $data->id_artikel ?>" name="xid">

                                <label for="example-text-input" class="col-2 col-form-label">Judul</label>
                                <div class="col-10">
                                    <input class="form-control title" type="text" name="xjudul" value="<?= $data->judul ?>" placeholder="masukan nama judul" required>
                                    <br>
                                    <br>
                                    <input type="text" name="slug" class="form-control slug" value="<?= $data->slug ?>" placeholder="Permalink" style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Kategori Artikel</label>
                                <div class="col-10">
                                    <select class="form-control" name="xkategori" required>

                                        <?php

                                        $ambilrole = $this->db->query('select*from tbl_kategori');

                                        foreach ($ambilrole->result() as $row1) : ?>
                                            <?php if ($data->id_kategori == $row1->category_id) : ?>
                                                <option value="<?php echo $row1->id_kategori; ?>" selected>
                                                    <?php echo $row1->nama_kategori; ?></option>
                                            <?php else : ?>
                                                <option value="<?php echo $row1->id_kategori; ?>">
                                                    <?php echo $row1->nama_kategori; ?>
                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Tanggal Posting</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="<?= $data->tgl_post ?>" name="xtanggal" required>
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
                                    <?php if (file_exists("assets/images/" . $data->gambar)) { ?>
                                        <img src="<?php echo base_url() . 'assets/images/' . $data->gambar; ?>" alt="" lass="dropify" width="200" height="200">
                                    <?php
                                    } else {
                                    ?>
                                        <input type="hidden" id="special" name="foto" class="form-control" placeholder="Foto" value="<?php echo $data->gambar; ?>" required>
                                    <?php
                                    } ?>
                                    <input type="file" id="input-file-now" name="filefoto" accept="application/jpg" />
                                    <small class="form-text text-muted"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Isi Artikel</label>
                                <div class="col-10">
                                    <textarea id="mymce" name="xisi" rows="8"><?= $data->isi_artikel ?></textarea>
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                <a href="<?= base_url() ?>/artikel-admin.js" button type="button" class="btn btn-danger">Batal </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>