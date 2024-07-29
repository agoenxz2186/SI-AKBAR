<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <title>Sistem Informasi Aptikom</title>

    <link href="<?php echo base_url(); ?>assets/dist/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'assets/alertjs/sweetalert2.css' ?>" rel="stylesheet">


</head>

<body class="skin-blue card-no-border">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Sisfo Aptikom</p>
        </div>
    </div>
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url(); ?>assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="post" action="<?= base_url() ?>user/auth">
                        <h3 class="box-title m-b-20">Login Administrator</h3>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="username" type="text" required="" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" type="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group text-center">
                            <div class="col-xs-12 p-b-20">
                                <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url(); ?>assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });

        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
    <?php if ($this->session->flashdata('message') == 'error') : ?>
        <script>
            Swal.fire({
                type: 'error',
                title: 'Opps!',
                text: 'Username Atau Password Salah!',
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
</body>

</html>