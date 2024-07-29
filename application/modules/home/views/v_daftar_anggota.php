<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Registration Keanggotaan</h1>
            <ul>
                <li><a href="#">Membership</a> -</li>
                <li>Keanggotaan</li>
            </ul>
        </div>
    </div>
</div>

<div class="registration-page-area bg-secondary">
    <div class="container">
        <div class="product-details-tab-area">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul>
                        <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Keanggotaan
                                Individu</a></li>
                        <!-- <li><a href="#review" data-toggle="tab" aria-expanded="false">Keanggotaan Program Studi</a></li> -->

                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="description">


                            <div class="registration-details-area inner-page-padding">
                                <form action="<?= base_url() ?>home/register_anggota" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label" for="first-name">ID Anggota *</label>
                                                <input type="text" name="xid" placeholder="masukan ID anggota"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label" for="first-name">Nama Lengkap *</label>
                                                <input type="text" name="xnama" placeholder="masukan nama lengkap"
                                                    class="form-control">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label" for="email">E-mail Address *</label>
                                                <input type="text" name="xemail" placeholder="masukan email"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label" for="phone">No. HP *</label>
                                                <input type="number" name="xnohp" placeholder="masukan nomor hp"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label" for="town-city">Kartu Anggota*</label>
                                                <input type="file" name="filedokumen" class="form-control"
                                                    accept=".pdf, .jpeg, .jpg, .png">
                                            </div>
                                            <small>Note: File harus bertipe pdf, jpeg, jpg, png, max. 1MB</small>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="pLace-order mt-30">
                                                <button class="view-all-accent-btn disabled" type="submit"
                                                    value="Login">Daftar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- Registration Page Area End Here -->