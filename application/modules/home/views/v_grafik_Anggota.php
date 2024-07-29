<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Data Grafik Anggota</h1>
            <ul>
                <li><a href="#">Grafik</a> -</li>
                <li>Data Grafik Anggota</li>
            </ul>
        </div>
    </div>
</div>

<?php
$tampil = $this->db->query("SELECT*FROM detail_votting")->row();
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

<div class="about-page1-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label for="accountTextarea">Status Anggota Individu</label>

                <canvas id="myChart" width="400" height="200"></canvas>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <label for="accountTextarea">Status Anggota Prodi</label>

                <canvas id="myChartprodi" width="400" height="200"></canvas>
            </div>
        </div>
    </div>
    <br>
    <br>
   

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Aktif", "Tidak Aktif"],
            datasets: [{
                label: '',
                data: [<?=
                        $aktifanggota->jumlah;
                        ?>,
                    <?=
                    $nonaktifanggota->jumlah;
                    ?>,
                ],
                backgroundColor: [
                    'rgba(51, 196, 235)',
                  'rgba(33, 97, 140)'
                ],
                borderColor: [
                     'rgba(51, 196, 235)',
                  'rgba(33, 97, 140)'
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

<script>
    var ctx = document.getElementById("myChartprodi").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Aktif", "Tidak Aktif"],
            datasets: [{
                label: '',
                data: [<?=
                        $aktifprodi->jumlah;
                        ?>,
                    <?=
                    $nonaktifprodi->jumlah;
                    ?>,
                ],
                backgroundColor: [
                    'rgba(51, 196, 235)',
                  'rgba(33, 97, 140)'
                ],
                borderColor: [
                    'rgba(51, 196, 235)',
                  'rgba(33, 97, 140)'
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