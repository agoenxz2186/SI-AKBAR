<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Tambah Data User</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data User</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah User & Akses Baru</h4>
                        <form action="<?= base_url() ?>user/save_user" method="post">
                            <div class="form-group m-t-40 row">
                                <label for="example-text-input" class="col-2 col-form-label">Nama User</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="xnama" placeholder="masukan nama user" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Akses User</label>
                                <div class="col-10">
                                    <select class="form-control" name="xrole" required>

                                        <?php

                                        $ambilrole = $this->db->query('select*from role');

                                        foreach ($ambilrole->result() as $row) :
                                        ?>
                                            <option value="<?= $row->id_role ?>"><?= $row->nama_role ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Username</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="xusername" placeholder="masukan username" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-url-input" class="col-2 col-form-label">Password</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="xpassword" placeholder="masukan password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Status User</label>
                                <div class="col-10">
                                    <select class="form-control" name="xstatus" required>
                                        <option value="1">Aktif</option>
                                        <option value="2">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                <a href="<?= base_url() ?>user-akses-aptikom-admin.js" button type="button" class="btn btn-danger">Batal </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>