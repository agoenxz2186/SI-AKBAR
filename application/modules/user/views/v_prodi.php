<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Program Studi</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Program Studi</a></li>
                        <li class="breadcrumb-item active">Program Studi</li>
                    </ol>
                    <a href="<?= base_url() ?>add-prodi-admin.js" type="button"
                        class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tambah Baru</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Data Program Studi</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Anggota</th>
                                        <th>Nama Prodi</th>
                                        <th>Jenjang</th>
                                        <th>PTS</th>
                                        <th>Status Prodi</th>
                                        <th>Masa Berlaku</th>
                                        <th>Status Masa Berlaku</th>
                                        <th>User</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data->result() as $row) :
                                        $no++;

                                        $tanggal_kedaluwarsa = new DateTime($row->masa_berlaku);
                                        $tanggal_sekarang = new DateTime();
                                        $sisa_hari = $tanggal_sekarang->diff($tanggal_kedaluwarsa)->days;
                                        $pesan_kedaluwarsa = ($tanggal_sekarang < $tanggal_kedaluwarsa) ? "$sisa_hari hari lagi" : "Sudah kedaluwarsa";

                                    ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $row->no_anggota ?></td>
                                        <td><?= $row->nama_prodi ?></td>
                                        <td><?= $row->jenjang ?></td>
                                        <td><?= $row->pts ?></td>
                                        <td style="text-align:center;">
                                            <?php
                                                if ($row->status_prodi == '1') {
                                                ?>
                                            <h4>
                                                <center><a href="#" data-toggle="modal" data-backdrop="false"
                                                        data-target="#status<?= $row->id_prodi ?>"
                                                        class="mr-1 mb-1 btn btn-outline-success btn-min-width"><i
                                                            class="la la-check-square-o"></i>
                                                        Aktif</a>
                                                </center>
                                            </h4>

                                            <?php

                                                } else {
                                                ?>
                                            <h4>
                                                <center> <a href="#" data-toggle="modal" data-backdrop="false"
                                                        data-target="#status<?= $row->id_prodi ?>"
                                                        class="mr-1 mb-1 btn btn-outline-warning btn-min-width"><i
                                                            class="la la-times-circle-o"></i>
                                                        Tidak Aktif</a></center>
                                            </h4>
                                            <?php

                                                }
                                                ?>

                                        </td>
                                        <td><?= $row->masa_berlaku ?></td>
                                        <td><?= $pesan_kedaluwarsa ?></td>
                                        <td><?= $row->nama_user ?></td>
                                        <td><a href="<?php echo base_url() . 'edit-data-prodi-admin-' . $row->id_prodi . '.js' ?>"
                                                class="btn btn-outline-success">
                                                <i class="fa  fa-pencil "></i> Edit
                                            </a> | <button type="button" class="btn btn-outline-danger"
                                                data-toggle="modal" data-target="#delete<?php echo $row->id_prodi; ?>">
                                                <i class="fa  fa-trash "></i> Hapus</button></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
foreach ($data->result() as $row) :
?>
<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
        <div class="modal fade text-left" id="delete<?php echo $row->id_prodi; ?>" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel11" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title white" id="myModalLabel11">Hapus Data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="<?php echo base_url() . 'user/Prodi/hapus_prodi' ?>" method="post">
                        <div class="modal-body">
                            <div class="col-md-12 m-b-20">
                                <div class="form-group">
                                    <input type="hidden" name="xkode" value="<?php echo $row->id_prodi; ?>" />
                                    <p>Apakah Anda yakin mau menghapus Data <b><?php echo $row->nama_prodi; ?></b> ini?</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-danger">Hapus</button>
                            <button type="button" class="btn grey btn-outline-info" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">
        <div class="modal fade text-left" id="status<?= $row->id_prodi ?>" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel11" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info white">
                        <h4 class="modal-title white" id="myModalLabel11">Update Status prodi <?= $row->nama_prodi ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="<?php echo base_url() . 'user/Prodi/update_status' ?>" method="post">
                        <div class="modal-body">
                            <div class="col-md-12 m-b-20">
                                <div class="form-group">
                                    <label for="accountTextarea">Status</label>
                                    <input type="hidden" name="xkode" value="<?php echo $row->id_prodi; ?>" />
                                    <select class="form-control" name="xstatus" required>
                                        <option value="1" selected>Aktif</option>
                                        <option value="2">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-warning">Update</button>
                            <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endforeach; ?>
