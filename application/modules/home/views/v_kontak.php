<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Kontak Kami</h1>
            <ul>
                <li><a href="#">Kontak</a> -</li>
                <li>Kontak Kami</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Contact Us Page 2 Area Start Here -->
<div class="contact-us-page2-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2 class="title-default-left title-bar-high">Informasi Kontak Kami</h2>
                <div class="contact-us-info2">
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i><?= $about->alamat ?></li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i><?= $about->telpon ?></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?= $about->email ?></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-default-left title-bar-high">Hubungi Kami Dibawah ini</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-form2">
                        <form action="<?= base_url() ?>home/sendinbox" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name*" class="form-control" name="xname" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email*" class="form-control" name="xemail" data-error="Email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="subject*" class="form-control" name="xjudul" data-error="Email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="Message*" class="textarea form-control" name="xpesan" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                    <div class="form-group margin-bottom-none">
                                        <button type="submit" class="default-big-btn">Kirim Pesan</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<br>
<!-- Contact Us Page 2 Area End Here -->