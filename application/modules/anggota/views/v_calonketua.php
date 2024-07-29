<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Calon Ketua Aptikom</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Calon Ketua</a></li>
                        <li class="breadcrumb-item active">Calon Ketua</li>
                    </ol>

                </div>
            </div>
        </div>
        <?php
        error_reporting(0);
        $id = $this->session->userdata('id');
      
        $query = $this->db->query("SELECT * FROM `detail_votting` WHERE `id_anggota`='$id';");
        $cek = $query->row();

        ?>
        <div class="row el-element-overlay">


            <?php

            foreach ($datacalon->result() as $row) :

            ?>
            <center>
                <div class="col-lg-10 col-md-10">
                    <div class="card">
                        <div class="el-card-item">
                            <div class="el-card-avatar el-overlay-1"> <img
                                    src="<?php echo base_url() . 'assets/images/' . $row->images; ?>" alt="user" />

                                <div class="el-overlay scrl-up">
                                    <ul class="el-info">
                                        <li><a class="btn default btn-outline image-popup-vertical-fit"
                                                href="<?php echo base_url() . 'assets/images/' . $row->images; ?>"><i
                                                    class="icon-magnifier"></i></a></li>

                                    </ul>
                                </div>


                            </div>
                            <div class="el-card-content">

                                <h3 class="box-title"><?php echo $row->no_urut; ?> </h3>
                                <br>
                                <h3 class="box-title"><?php echo $row->nama; ?></h3>


                            </div>
                            <br>
                            <?php
                                if ($cek > 0) { ?>
                            <center> <b class='btn btn-danger'>Anda Sudah Melakukan Votting</b></center><br>
                            <center> <a href="<?= base_url() ?>detail-votting-anggota.js" target='_blank'>
                                    <type='button' class='btn btn-success'>Detail Votting
                                </a></center>
                            <?php } else { ?>
                            <center> <a href='#' button type="button" class="btn btn-info" data-toggle="modal"
                                    data-target="#votting<?= $row->id ?>"> Voting Calon</a></center>

                            <?php }
                                ?>



                        </div>
                    </div>

                </div>
            </center>
            <?php endforeach; ?>

        </div>



    </div>

</div>


<?php
foreach ($datacalon->result() as $row) :
?>
<div class="modal fade" id="votting<?php echo $row->id; ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Konfirmasi Voting !</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'anggota/Votting/vottingcalon' ?>" method="post">
                    <div class="form-group">
                        <div class="col-md-12 m-b-20">
                            <input type="hidden" name="xkode" value="<?php echo $row->id; ?>" />
                            <input type="hidden" name="xnama" value="<?php echo $row->nama; ?>" />
                            <center>
                                <div class="el-card-avatar el-overlay-1"> <img
                                        src="<?php echo base_url() . 'assets/images/' . $row->images; ?>" width="50%"
                                        height="50%" alt="user" />
                            </center><br>

                            <p>Apakah Anda yakin memilih Voting <b>
                                    <h4> Nomor Urut : <?php echo $row->no_urut; ?><br>
                                        Nama Calon : <?php echo $row->nama; ?> ?</h4>
                                </b> </p>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger waves-effect text-left">Ya</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal -->
</div>

<?php endforeach; ?>