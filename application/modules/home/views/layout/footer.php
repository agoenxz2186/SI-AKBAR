<footer>
    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <a href="index.html"><img class="img-responsive"
                                src="<?php echo base_url() . './assets/images/' . $about->images ?>" alt="logo"></a>
                        <div class="footer-about">
                            <p><?= $about->deskripsi ?></p>
                        </div>
                        <ul class="footer-social">
                            <li><a href="<?= $about->facebook ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="<?= $about->youtube ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="<?= $about->instagram ?>"><i class="fa fa-instagram"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="<?= $about->whatsap ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3>Links</h3>
                        <ul class="featured-links">
                            <li>
                                <ul>
                                    <li><a href="<?= base_url() ?>keanggotaan.js">Keanggotaan</a></li>
                                    <li><a href="<?= base_url() ?>e-votting-calon.js">E-votting</a></li>
                                    <li><a href="<?= base_url() ?>grafik-anggota.js">Grafik Anggota</a></li>
                                    <li><a href="<?= base_url() ?>login.js">Login</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3>Information</h3>
                        <ul class="corporate-address">

                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone:<?= $about->telpon ?>">
                                    <?= $about->telpon ?> </a></li>

                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i><?= $about->email ?></li>


                            <li><i class="fa fa-map" aria-hidden="true"></i><?= $about->alamat ?></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-box">
                        <h3>Statistik Pengujung</h3>
                        <ul class="flickr-photos">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <p>&copy; 2024 TA All Rights Reserved. &nbsp; Designed by<a target="_blank" href="#"> Tugas Akhir
                            2024</a></p>
                </div>

            </div>
        </div>
    </div>
</footer>
</div>
<script src="<?= base_url() ?>themes/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/plugins.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/wow.min.js"></script>
<script src="<?= base_url() ?>themes/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/vendor/slider/home.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/jquery.meanmenu.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/jquery.scrollUp.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/jquery.counterup.min.js"></script>
<script src="<?= base_url() ?>themes/js/waypoints.min.js"></script>
<script src="<?= base_url() ?>themes/js/jquery.countdown.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/jquery.gridrotator.js" type="text/javascript"></script>
<script src="<?= base_url() ?>themes/js/main.js" type="text/javascript"></script>
<script src="<?php echo base_url() . 'tables/js/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'tables/js/dataTables.bootstrap4.min.js' ?>"></script>
<script src="<?= base_url() ?>assets/sweetalert/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/node_modules/sweetalert/sweetalert2.all.min.js"></script>

<script>
$(document).ready(function() {
    $('#display').DataTable();
});
</script>


<?php if ($this->session->flashdata('message') == 'error') : ?>
<script>
Swal.fire({
    type: 'error',
    title: 'Opps!',
    text: 'Data Gagal Terkirim.',
    // text: 'Anda akan di arahkan dalam 2 Detik',
    // timer: 2000,
    showConfirmButton: true
})
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('message') == 'gambar') : ?>
<script>
Swal.fire({
    type: 'error',
    title: 'Opps!',
    text: 'File lebih 1 MB',
    // text: 'Anda akan di arahkan dalam 2 Detik',
    // timer: 2000,
    showConfirmButton: true
})
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('message') == 'warning') : ?>
<script>
Swal.fire({
    type: 'warning',
    title: 'Deleted!',
    icon: 'warning',
    text: 'Akun anda non-aktif..!!',
    // text: 'Anda akan di arahkan dalam 2 Detik',
    // timer: 2000,
    showConfirmButton: true
})
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('message') == 'info') : ?>
<script>
Swal.fire({
    type: 'info',
    title: 'Info!',
    icon: 'success',
    text: 'ID Anggota Telah Terdaftar..!!',
    // text: 'Anda akan di arahkan dalam 2 Detik',
    // timer: 2000,
    showConfirmButton: true
})
</script>
<?php endif; ?>
<?php if ($this->session->flashdata('message') == 'success') : ?>
<script>
Swal.fire({
    type: 'success',
    title: 'success',
    icon: 'success',
    text: 'Data Terkirim',
    // timer: 2000,
    showConfirmButton: true
})
</script>
<?php endif; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</body>

</html>