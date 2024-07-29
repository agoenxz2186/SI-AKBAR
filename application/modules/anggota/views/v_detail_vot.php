<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">

            </div>

        </div>

        <?php
        error_reporting(0);
        $username = $this->session->userdata('username');
        $query = $this->db->query("SELECT * FROM `detail_votting` WHERE `id_anggota`='$username';");
        $cek_votting = $query->num_rows();

        $hasil = $this->db->query("SELECT * FROM calon_ketua ")->result();
        $hasil11 = $this->db->query("SELECT nama FROM calon_ketua")->result();
        foreach ($hasil11 as $nm) {
            $caln .= ",'$nm->nama'";
        }
        foreach ($hasil as $vot) {
            $hasilvot = $vot->id;
            $nm = $vot->nama;
            $hasil1 = $this->db->query("SELECT COUNT(jumlah_vot) AS hasilvotting FROM detail_votting where id_calon='$hasilvot' and status_vot='2'")->result();

            foreach ($hasil1 as $jum1) {
                $jumvoti .= ",$jum1->hasilvotting";
            }
        }

        $hasiloke1 = substr($jumvoti, 1);
        $hasiloke = substr($jumvoti, 1);
        $namaclo = substr($caln, 1);
        ?>

        <div class="card">
            <div class="card-body">
                <center> <b> Anda Sudah Memilih &nbsp;</b>
                    <h3><b class='text-danger'><?php echo $hasilvoting->no_urut ?> -
                            &nbsp;<?php echo $hasilvoting->nama ?></b></h3>&nbsp; <b>Sebagai Calon Ketua
                        Periode tahun 2024-2028</b>
                </center>.
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title m-b-0">History Voting</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor Calon</th>
                                        <th>Nama Calon</th>
                                        <th style="text-align: right;">Tanggal Voting</th>


                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td><?= $hasilvoting->no_urut ?></td>
                                        <td><?= $hasilvoting->nama ?></td>
                                        <td style="text-align: right;">
                                            <?= $hasilvoting->tgl_vot ?></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Prosentase Suara Calon Ketua</h4>

                        <!-- <canvas id="canvas" width="400" height="400" ></canvas> -->
                        <canvas id="myChartvotting" width="200" height="100"></canvas>
                    </div>
                </div>
            </div>




        </div>








    </div>
</div>



<script>
    var ctx = document.getElementById("myChartvotting").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [<?= $namaclo ?>],
            datasets: [{
                label: ' Grafik Hasil E-Votting',
                data: [<?= $hasiloke ?>],
                backgroundColor: [
                    'rgba(255, 99, 132)',
                    'rgba(31, 153, 235)'
                ],
                borderColor: [
                    'rgba(255, 73, 112)',
                    'rgba(0, 140, 235)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>