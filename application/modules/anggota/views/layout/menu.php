<aside class="left-sidebar">
    <div class="scroll-sidebar">

        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro">

                    <?php $nama = $this->session->userdata('nama_anggota'); ?>

                    <a href="javascript:void(0)" aria-expanded="false"><img src="<?php echo base_url() . 'assets/img/profile.png' ?>" alt="user-img" class="img-circle"><span class="hide-menu"><?= $nama ?></span><BR><small class="text-success">online</small></a>


                </li>
                <li> <a class="waves-effect waves-dark" href="<?= base_url() ?>dashboard-anggota.js" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu"> Beranda</span></a></li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Calon Ketua <span class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="data-calon-ketua-anggota.js"><i class="fa  fa-angle-double-right"></i>
                                Calon Ketua</a></li>

                    </ul>
                </li>


                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Data Pribadi <span class="badge badge-pill badge-primary text-white ml-auto"></span></span></a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="data-pribadi-anggota.js"><i class="fa  fa-angle-double-right"></i>
                                Data Pribadi </a></li>

                    </ul>
                </li>

                <li> <a class="waves-effect waves-dark" onclick="return confirm('Are you sure you want to log out')" href="<?php echo base_url() . 'logout-anggota.js' ?>" aria-expanded="false"><i class=" fa fa-lg fa-fw fa-sign-out"></i><span class="hide-menu"> Keluar</span></a></li>


        </nav>
    </div>
</aside>