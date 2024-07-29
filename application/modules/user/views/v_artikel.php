<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Artikel</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Artikel</a></li>
                        <li class="breadcrumb-item active">Artikel</li>
                    </ol>
                    <a href="<?= base_url() ?>user/Artikel/add_artikel" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Tambah Data</a>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Data Artikel</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Images</th>
                                        <th>Title</th>
                                        <th>Kategori</th>
                                        <th>Post Create</th>
                                        <th>User</th>
                                        <th>Views</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Images</th>
                                        <th>Title</th>
                                        <th>Kategori</th>
                                        <th>Post Create</th>
                                        <th>User</th>
                                        <th>Views</th>
                                        <th>Status</th>
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
                                            <td class="text-center" style="width:100px;">



                                                <img class="img-responsive" src="<?php echo base_url() . './assets/images/' . $row->gambar ?>" alt="team">




                                            </td>
                                            <td><?= $row->judul ?></td>
                                            <td><?= $row->nama_kategori ?></td>
                                            <td><?= $row->tgl_post ?></td>
                                            <td><?= $row->nama_user ?></td>
                                            <td><?= $row->lihat ?></td>
                                            <td style="text-align:center;">
                                                <?php
                                                if ($row->status_artikel == '1') {
                                                ?>
                                                    <h4>
                                                        <center><a href="#" data-toggle="modal" data-backdrop="false" data-target="#status<?= $row->id_artikel ?>" class="mr-1 mb-1 btn btn-outline-success btn-min-width"><i class="la la-check-square-o"></i>
                                                                Publish</a>
                                                        </center>
                                                    </h4>

                                                <?php

                                                } else {
                                                ?>
                                                    <h4>
                                                        <center> <a href="#" data-toggle="modal" data-backdrop="false" data-target="#status<?= $row->id_artikel ?>" class="mr-1 mb-1 btn btn-outline-warning btn-min-width"><i class="la la-times-circle-o"></i>
                                                                Unpublish</a></center>
                                                    </h4>
                                                <?php

                                                }
                                                ?>

                                            </td>

                                            <td style="text-align:center;"><a href="<?= base_url() ?>user/artikel/edit_artikel/<?php echo $row->id_artikel; ?>" class="btn btn-outline-success">
                                                    <i class="fa  fa-pencil "></i> Edit
                                                </a> | <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete<?php echo $row->id_artikel; ?>"> <i class="fa  fa-trash "></i> Hapus</button></td>


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

            <div class="modal fade text-left" id="delete<?= $row->id_artikel ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-warning">
                            <h4 class="modal-title white" id="myModalLabel11">Hapus Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="<?php echo base_url() . 'user/artikel/hapus_artikel' ?>" method="post">
                            <div class="modal-body">
                                <div class="col-md-12 m-b-20">


                                    <div class="form-group">

                                        <input type="hidden" name="xkode" value="<?php echo $row->id_artikel; ?>" />
                                        <input type="hidden" name="file" value="<?php echo $row->gambar; ?>" />
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


<?php endforeach; ?>