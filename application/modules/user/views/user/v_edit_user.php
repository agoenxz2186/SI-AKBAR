<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Edit Data User</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data User</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit User & Akses Baru</h4>
                        <form action="<?= base_url() ?>user/update_user" method="post">
                            <div class="form-group m-t-40 row">
                                <input type="hidden" value="<?= $data->id_user ?>" name="xid">
                                <label for="example-text-input" class="col-2 col-form-label">Nama User</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?= $data->nama_user ?>" name="xnama" placeholder="masukan nama user" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input" class="col-2 col-form-label">Akses User</label>
                                <div class="col-10">
                                    <select class="form-control" name="xrole" required>
                                        <?php
                                        $role = $this->db->query("SELECT*FROM role");
                                        ?>


                                        <?php foreach ($role->result() as $row1) : ?>
                                            <?php if ($data->role_id == $row1->id_role) : ?>
                                                <option value="<?php echo $row1->id_role; ?>" selected>
                                                    <?php echo $row1->nama_role; ?></option>
                                            <?php else : ?>
                                                <option value="<?php echo $row1->id_role; ?>">
                                                    <?php echo $row1->nama_role; ?>
                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Username</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?= $data->username ?>" name="xusername" placeholder="masukan username" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-url-input" class="col-2 col-form-label">Password</label>
                                <div class="col-10">
                                    <input type="text" name="xpassword" value="<?= base64_decode($data->pass_64) ?>" class="form-control" placeholder="masukan password" required>

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
                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                <a href="<?= base_url() ?>user-akses-aptikom-admin.js" button type="button" class="btn btn-danger">Batal </button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>