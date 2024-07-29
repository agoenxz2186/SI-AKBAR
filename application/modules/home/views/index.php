<div class="slider1-area overlay-default">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
            <?php foreach ($slider->result() as $row) : ?>
            <div class="slide-item">
                <img src="<?php echo base_url('assets/images/' . $row->images); ?>" alt="slider"
                    title="#slider-direction-<?php echo $row->id; ?>" />
                <div id="slider-direction-<?php echo $row->id; ?>" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-<?php echo $row->id; ?>">
                        <div class="title-container s-tb-c">
                            <div class="title1">
                                <h2 style="color: #ffffff;"> <?php echo $row->judul; ?></h2>
                            </div>
                            <p><?php echo $row->isi; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="title-default-center">Berita Terbaru</h2>
    <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
            <div class="row">

                <?php
                foreach ($artikel->result() as $row) :
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="news-box">
                        <div class="news-img-holder">
                            <img src="<?php echo base_url() . './assets/images/' . $row->gambar ?>"
                                class="img-responsive" alt="research">

                        </div>
                        <h3 class="title-news-left-bold"><a
                                href="<?php echo base_url() . 'artikel-detail-' . $row->slug . '.js' ?>">
                                <?= $row->judul ?></a></h3>
                        <ul class="title-bar-high news-comments">
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                    <?php echo date('d M Y', strtotime($row->tgl_post)); ?>
                                </a></li>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span>
                                    <?= $row->nama_user ?></a></li>
                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><?= $row->nama_kategori ?></a>
                            </li>
                            <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span><?= $row->lihat ?></span>
                                </a></li>
                        </ul>
                        <?php echo strip_tags(substr($row->isi_artikel, 0, 100)) . '...'; ?>
                    </div>

                </div>
                <?php endforeach; ?>


            </div>
        </div>

        <center> <a href="<?= base_url() ?>artikel.js" class="view-all-primary-btn">Lihat Semua</a>
        </center>
        <br>
    </div>
</div>




<div class="news-event-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                <h2 class="title-default-left">Latest Artikel</h2>
                <ul class="news-wrapper">

                    <?php
                    foreach ($latepost_artikel->result() as $row) :
                    ?>
                    <li>
                        <div class="news-img-holder">
                            <a href="<?php echo base_url() . 'artikel-detail-' . $row->slug . '.js' ?>"><img
                                    src="<?php echo base_url() . './assets/images/' . $row->gambar ?>"
                                    class="img-responsive" alt="news"></a>
                        </div>
                        <div class="news-content-holder">
                            <h3><a href="<?php echo base_url() . 'artikel-detail-' . $row->slug . '.js' ?>"> &nbsp;
                                    &nbsp; <?= $row->judul ?></a></h3>
                            <div class="post-date"> &nbsp; &nbsp;
                                <?php echo date('d M Y', strtotime($row->tgl_post)); ?></div>
                            &nbsp; &nbsp; <?php echo strip_tags(substr($row->isi_artikel, 0, 100)) . '...'; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>

                </ul>
                <div class="news-btn-holder">
                    <a href="#" class="view-all-accent-btn">Lihat Semua</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-inner-area">
                <h2 class="title-default-left">Konferensi Aptikom</h2>
                <ul class="news-wrapper">

                    <?php
                    foreach ($konferensi->result() as $row) :
                    ?>
                    <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                        <div class="news-img-holder">
                            <a href="<?php echo base_url() . 'agenda-detail-' . $row->slug . '.js' ?>"><img
                                    src="<?php echo base_url() . './assets/images/' . $row->gambar ?>"
                                    class="img-responsive" alt="news"></a>
                        </div>
                        <div class="news-content-holder">
                            <h3><a href="<?php echo base_url() . 'agenda-detail-' . $row->slug . '.js' ?>"> &nbsp;
                                    &nbsp; <?= $row->judul ?></a></h3>
                            <div class="post-date"> &nbsp; &nbsp;
                                <?php echo date('d M Y', strtotime($row->tgl_post)); ?></div>
                            &nbsp; &nbsp; <?php echo strip_tags(substr($row->isi_artikel, 0, 100)) . '...'; ?>
                        </div>
                    </li>
                    <?php endforeach; ?>


                </ul>
                <div class="news-btn-holder">
                    <a href="<?= base_url() ?>agenda.js" class="view-all-accent-btn">Lihat Semua</a>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<div class="brand-area">
    <div class="container">
        <div class="rc-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
            data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false"
            data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="false" data-r-x-small-dots="false"
            data-r-x-medium="3" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="4"
            data-r-small-nav="false" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="false"
            data-r-medium-dots="false" data-r-large="4" data-r-large-nav="false" data-r-large-dots="false">
            <?php foreach ($brand as $row) : ?>
                <div class="brand-area-box">
                    <a href="#"><img src="<?php echo base_url() . 'assets/images/' . $row->gambar ?>" alt="brand"></a>
                </div>
            <?php endforeach; ?>
        </div>
</div>
</div>
<!-- Brand Area End Here -->
<!-- Footer Area Start Here -->