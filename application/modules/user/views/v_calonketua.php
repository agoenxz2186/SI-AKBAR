<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Calon Ketua Aptikom</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data E-Votting</a></li>
                        <li class="breadcrumb-item active">Calon Ketua</li>
                    </ol>
                    &nbsp;
                    <a href="<?= base_url() ?>tambah-calon-ketua-admin.js" class="btn btn-info btn-min-width box-shadow-3 mr-1 mb-1" data-backdrop="false" button type="button"><i class="fa fa-plus"><b> Tambah Data</b></i></button>
                    </a>&nbsp;
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Data Calon Ketua Aptikom</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Urut</th>
                                        <th>Images</th>
                                        <th>Nama Lengkap</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Status</th>

                                        <th>Create at</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Urut</th>
                                        <th>Images</th>
                                        <th>Nama Lengkap</th>
                                        <th>Visi</th>
                                        <th>Misi</th>
                                        <th>Status</th>
                                        <th>Create at</th>

                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($data->result() as $row) :
                                        $no++;
                                    ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $row->no_urut ?></td>

                                            <td class="text-center" style="width:100px;">



                                                <img class="img-responsive" src="<?php echo base_url() . './assets/images/' . $row->images ?>" alt="team">




                                            </td>
                                            <td><?= $row->nama ?></td>
                                            <td>
                                                <button type="button" class=" btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-visi<?php echo $row->id; ?>">
                                                    <i class="fa  fa-info"> [Visi]</i></button>



                                            </td>
                                            <td>
                                                <button type="button" class=" btn btn-info" data-toggle="modal" data-target=".bs-example-modal-lg-misi<?php echo $row->id; ?>">
                                                    <i class="fa  fa-info"> [Misi]</i></button>



                                            </td>
                                            <td style="text-align:center;">
                                                <?php
                                                if ($row->status == '1') {
                                                ?>
                                                    <h4>
                                                        <center><a href="#" data-toggle="modal" data-backdrop="false" data-target="#status<?= $row->id ?>" class="mr-1 mb-1 btn btn-outline-success btn-min-width"><i class="la la-check-square-o"></i>
                                                                Aktif</a>
                                                        </center>
                                                    </h4>

                                                <?php

                                                } else {
                                                ?>
                                                    <h4>
                                                        <center> <a href="#" data-toggle="modal" data-backdrop="false" data-target="#status<?= $row->id ?>" class="mr-1 mb-1 btn btn-outline-warning btn-min-width"><i class="la la-times-circle-o"></i>
                                                                Tidak Aktif</a></center>
                                                    </h4>
                                                <?php

                                                }
                                                ?>

                                            </td>
                                            <td><?= $row->tgl_create ?></td>

                                            <td style="text-align:center;"><a href="<?= base_url() ?>user/Votting/edit/<?php echo $row->id; ?>" class="btn btn-outline-success">
                                                    <i class="fa  fa-pencil "></i> Edit
                                                </a> | <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete<?php echo $row->id; ?>"> <i class="fa  fa-trash "></i> Hapus</button></td>


                                        </tr>
                                </tbody>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <!-- sample modal content -->
                                            <div class="modal fade bs-example-modal-lg-visi<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel"><i class="fa fa-info"></i> Visi Calon Ketua</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>

                                                        <form action="#" method="post" enctype="multipart/form-data">


                                                            <div class="modal-body">

                                                                <label class="col-md-12" for="example-text" align="left">Visi Calon Ketua: </label>

                                                                <textarea name="xalasan" rows="8" class="col-md-12" class="form-control" placeholder="Alasan Pengajuan"><?php echo $row->visi; ?></textarea>

                                                            </div>

                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <!-- sample modal content -->
                                            <div class="modal fade bs-example-modal-lg-misi<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myLargeModalLabel"><i class="fa fa-info"></i> Visi Calon Ketua</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>

                                                        <form action="#" method="post" enctype="multipart/form-data">


                                                            <div class="modal-body">

                                                                <label class="col-md-12" for="example-text" align="left">Visi Calon Ketua: </label>

                                                                <textarea name="xalasan" rows="8" class="col-md-12" class="form-control" placeholder="misi"><?php echo $row->misi; ?></textarea>

                                                            </div>

                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->

                                        </div>
                                    </div>

                                </div>
                            <?php endforeach; ?>
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

            <div class="modal fade text-left" id="status<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-success white">
                            <h4 class="modal-title white" id="myModalLabel11">Update Data Calon <?= $row->nama ?></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?php echo base_url() . 'user/Votting/update_status' ?>" method="post">
                            <div class="modal-body">
                                <div class="col-md-12 m-b-20">


                                    <div class="form-group">
                                        <label for="accountTextarea">Status</label>
                                        <input type="hidden" name="xkode" value="<?php echo $row->id; ?>" />

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

    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">

            <div class="modal fade text-left" id="delete<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-warning">
                            <h4 class="modal-title white" id="myModalLabel11">Hapus Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?php echo base_url() . 'user/Votting/hapus' ?>" method="post">
                            <div class="modal-body">
                                <div class="col-md-12 m-b-20">


                                    <div class="form-group">

                                        <input type="hidden" name="xkode" value="<?php echo $row->id; ?>" />
                                        <input type="hidden" name="file" value="<?php echo $row->images; ?>" />
                                        <p>Apakah Anda yakin mau menghapus Data <b><?php echo $row->nama; ?>
                                            </b> ini ?</p>
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



<?php endforeach; ?>