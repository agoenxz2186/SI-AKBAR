<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Image Slider</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Slider Home</a></li>
                        <li class="breadcrumb-item active">Images Slider</li>
                    </ol>
                    &nbsp;
                    <a href="#" data-toggle="modal" data-backdrop="false" data-target="#addinfo" class="btn btn-info btn-min-width box-shadow-3 mr-1 mb-1" data-backdrop="false" button type="button"><i class="fa fa-plus"><b> Tambah Data</b></i></button>
                    </a>&nbsp;

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Data Images Slider</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Images</th>
                                        <th>Title</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>

                                        <th>Tgl Create</th>
                                        <th style="text-align:center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Images</th>
                                        <th>Title</th>
                                        <th>Deskripsi</th>
                                        <th>Status</th>

                                        <th>Tgl Create</th>
                                        <th style="text-align:center;">Aksi</th>
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
                                            <td class="text-center" style="width:100px;">



                                                <img class="img-responsive" src="<?php echo base_url() . './assets/images/' . $row->images ?>" alt="team">




                                            </td>
                                            <td><?= $row->judul ?></td>
                                            <td><?= $row->isi ?></td>
                                            <td style="text-align:center;">
                                                <?php
                                                if ($row->status_images == '1') {
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

                                            <td style="text-align:center;"><a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#edit<?php echo $row->id; ?>">
                                                    <i class="fa  fa-pencil "></i> Edit
                                                </a> | <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete<?php echo $row->id; ?>"> <i class="fa  fa-trash "></i> Hapus</button></td>


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

<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="form-group">

        <div class="modal fade text-left" id="addinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info white">
                        <h4 class="modal-title white" id="myModalLabel11">Tambah Data </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form action="<?php echo base_url() . 'user/slider/save' ?>" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="col-md-12 m-b-20">


                                <div class="form-group">
                                    <label for="accountTextarea">Judul</label>
                                    <input type="text" id="projectinput1" class="form-control" placeholder="Masukan judul" name="xjudul" required>

                                </div>
                                <div class="form-group">
                                    <label for="accountTextarea">Deskripsi</label>

                                    <textarea name="xisi" rows="8" class="col-md-12" class="form-control" placeholder="Masukan deskripsi informasi"></textarea>


                                </div>

                                <div class="form-group">
                                    <label for="accountTextarea">Status</label>
                                    <select class="form-control" name="xstatus" required>
                                        <option value="1" selected>Aktif</option>
                                        <option value="2">Tidak Aktif</option>

                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="accountTextarea">File</label>
                                    <input type="file" name="filefoto" class="form-control">

                                </div>




                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-info">Simpan</button>
                            <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Batal</button>

                        </div>
                    </form>
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

            <div class="modal fade text-left" id="edit<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info white">
                            <h4 class="modal-title white" id="myModalLabel11">Tambah Data </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?php echo base_url() . 'user/slider/update' ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="col-md-12 m-b-20">


                                    <div class="form-group">
                                        <input type="hidden" name="xkode" value="<?php echo $row->id; ?>">
                                        <label for="accountTextarea">Judul</label>
                                        <input type="text" id="projectinput1" class="form-control" placeholder="Masukan judul" name="xjudul" value="<?php echo $row->judul; ?>" required>

                                    </div>
                                    <div class="form-group">
                                        <label for="accountTextarea">Deskripsi</label>

                                        <textarea name="xisi" rows="8" class="col-md-12" class="form-control" placeholder="Masukan deskripsi informasi"> <?php echo $row->isi; ?></textarea>


                                    </div>

                                    <div class="form-group">
                                        <label for="accountTextarea">Status</label>
                                        <select class="form-control" name="xstatus" required>
                                            <option value="1" selected>Aktif</option>
                                            <option value="2">Tidak Aktif</option>

                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="accountTextarea">File</label>
                                        <?php if (file_exists("assets/images/" . $row->images)) { ?>
                                            <img src="<?php echo base_url() . 'assets/images/' . $row->images; ?>" alt="" lass="dropify" width="200" height="200">
                                        <?php
                                        } else {
                                        ?>
                                            <input type="hidden" id="special" name="foto" class="form-control" placeholder="Foto" value="<?php echo $row->images; ?>">
                                        <?php
                                        } ?>
                                        <input type="file" id="input-file-now" name="filefoto" accept="application/jpg" />
                                        <small class="form-text text-muted"></small>

                                    </div>




                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-info">Simpan</button>
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

                        <form action="<?php echo base_url() . 'user/slider/hapus' ?>" method="post">
                            <div class="modal-body">
                                <div class="col-md-12 m-b-20">


                                    <div class="form-group">

                                        <input type="hidden" name="xkode" value="<?php echo $row->id; ?>" />
                                        <input type="hidden" name="file" value="<?php echo $row->images; ?>" />
                                        <p>Apakah Anda yakin mau menghapus Data <b><?php echo $row->judul; ?>
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


    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="form-group">

            <div class="modal fade text-left" id="status<?= $row->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info white">
                            <h4 class="modal-title white" id="myModalLabel11">Update Status</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?php echo base_url() . 'user/slider/update_status' ?>" method="post">
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
<?php endforeach; ?>