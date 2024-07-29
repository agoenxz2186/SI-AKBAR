<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Masuk Halaman E-votting Keanggotaan</h1>
            <ul>
                <li><a href="#">Membership</a> -</li>
                <li>login</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary">
    <div class="container">
        <h2 class="sidebar-title">Login Keanggotaan</h2>
        <div class="registration-details-area inner-page-padding">
            <form action="<?= base_url() ?>anggota/auth" method="post">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="first-name">User Name *</label>
                            <input type="text" name="username" class="form-control"
                                placeholder="Masukan Nomor Keanggotaan">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="first-name">Password *</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="form-group">
                            <label class="control-label" for="first-name"><a
                                    href="<?= base_url() ?>lupa-password.js">Lupa Password ?</a> </label>

                        </div>
                    </div>


                </div>




                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="pLace-order mt-30">
                            <button class="view-all-accent-btn disabled" type="submit" value="Login">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <p>
        <h4>Belum Punya Akun? <a href="<?= base_url() ?>daftar-anggota.js">Daftar</a> </h4>
        </p>
    </div>
</div>