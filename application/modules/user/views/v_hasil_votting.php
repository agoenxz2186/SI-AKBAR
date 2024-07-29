<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Hasil Votting</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data E-Votting</a></li>
                        <li class="breadcrumb-item active">Hasil Votting</li>
                    </ol>
                    <!-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal"
                        data-target=".bs-example-modal-lg"><i class="fa fa-plus-circle"></i> Tambah Data</button> -->

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Data Hasil Votting Ketua Aptikom</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered"
                                cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Urut</th>
                                        <th>Images</th>
                                        <th>Nama</th>
                                        <th>Jumlah Polling</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no=1; foreach ($data as $d ): ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $d->no_urut ?></td>
                                        <td>
                                            <img class="img-responsive"
                                                src="<?php echo base_url() . './assets/images/' . $d->images ?>"
                                                width="80px" alt="team">

                                        </td>
                                        <td><?= $d->nama ?></td>
                                        <td><label for="" class="label label-info"><?=  $d->total_votes?></label> </td>
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