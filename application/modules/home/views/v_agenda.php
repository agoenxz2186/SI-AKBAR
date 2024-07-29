<div class="inner-page-banner-area" style="background-image: url('<?= base_url() ?>?assets/img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Agenda Aptikom</h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Agenda</li>
            </ul>
        </div>
    </div>
</div>

<div class="news-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">
                    <?php
                    foreach ($data->result() as $row) :
                    ?>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="news-box">
                                <div class="news-img-holder">
                                    <img src="<?php echo base_url() . './assets/images/' . $row->gambar ?>" class="img-responsive" alt="research">
                                    <ul class="news-date1">
                                        <li><?php echo date('d M', strtotime($row->tgl_post)); ?></li>
                                        <li><?php echo date('Y', strtotime($row->tgl_post)); ?></li>
                                    </ul>
                                </div>
                                <h2 class="title-default-left-bold"><a href="#"><?= $row->judul ?></a></h2>
                                <ul class="title-bar-high news-comments">
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> <?= $row->nama_user ?></a></li>
                                    <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><?= $row->nama_kategori ?></a></li>
                                    <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span><?= $row->lihat ?></span> </a></li>
                                </ul>
                                <p> <?php echo strip_tags(substr($row->isi_artikel, 0, 100)) . '...'; ?></p>
                                <a href="<?php echo base_url() . 'agenda-detail-' . $row->slug . '.js' ?>" class="default-big-btn">Lihat Detail</a>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Kategori Agenda</h3>
                            <ul class="sidebar-categories">


                                <?php
                                $query = $this->db->get('kategori_konfrens');
                                foreach ($query->result() as $row) :
                                ?>
                                    <li><a href="<?php echo base_url() . 'kategori-agenda-' . $row->slug . '.js' ?>">
                                            <?php echo strtoupper($row->nama_konfrens); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Latest Posts</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>


                                    <?php
                                    foreach ($latepost_artikel->result() as $row) :
                                    ?>
                                        <li>
                                            <div class="latest-research-img">
                                                <a href="<?php echo base_url() . 'agenda-detail-' . $row->slug . '.js' ?>"><img src="<?php echo base_url() . './assets/images/' . $row->gambar ?>" class="img-responsive" alt="skilled"></a>
                                            </div>
                                            <div class="latest-research-content">
                                                <h4> <?php echo date('d M Y', strtotime($row->tgl_post)); ?></h4>
                                                <p><?= $row->judul ?></p>
                                            </div>
                                        </li>

                                    <?php endforeach; ?>



                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>