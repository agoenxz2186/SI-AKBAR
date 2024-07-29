<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1> <?= $calon->no_urut ?> - <?= $calon->nama ?></h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Detail E-Votting</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Courses Page 3 Area Start Here -->
<div class="lecturers-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="lecturers-contact-info">
                    <img src="<?php echo base_url() . './assets/images/' . $calon->images ?>" class=" img-responsive" alt="team">
                    <h2><?= $calon->no_urut ?></h2>
                    <h3><?= $calon->nama ?></h3>

                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h3 class="title-default-left title-bar-big-left-close">Visi</h3>
                <p><?= $calon->visi ?> </p>
                <h3 class="title-default-left title-bar-big-left-close">Visi</h3>
                <p><?= $calon->misi ?> </p>

            </div>
        </div>
    </div>
</div>