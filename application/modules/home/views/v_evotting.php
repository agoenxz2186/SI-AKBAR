<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>E-Votting Calon Ketua</h1>
            <ul>
                <li><a href="#">Membership</a> -</li>
                <li>e-Votting</li>
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
<div class="lecturers-page1-area">
    <div class="container">
        <div class="row">
            <?php
            foreach ($calon->result() as $row) :
            ?>

            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="single-item">
                    <div class="lecturers1-item-wrapper">
                        <div class="lecturers-img-wrapper">
                            <a href="#"><img class="img-responsive"
                                    src="<?php echo base_url() . './assets/images/' . $row->images ?>" alt="team"></a>
                        </div>
                        <div class="lecturers-content-wrapper">
                            <h3 class="item-title"><a href="#"><?= $row->nama ?></a></h3>
                            <ul class="lecturers-social">
                                <a href="<?php echo base_url() . 'detail-voting-' . $row->no_urut . '.js' ?>"
                                    class="view-all-accent-btn">Detail Calon</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>




        </div>
    </div>
    <hr>
    <br>

    <?php $vote = $this->db->query("SELECT tampil_vote FROM`about_website` ")->row() ?>

    <?php if ($vote->tampil_vote == 1) {?>
    <?php if ($tampil->status_vot == '2') { ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label for="accountTextarea">Grafik E-Votting</label>

                <canvas id="myChartvotting" width="200" height="100"></canvas>

            </div>

        </div>
    </div>
</div>
<?php } ?>
<?php } ?>


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
                'rgba(93, 173, 226)',
                'rgba(51, 196, 235)',
                'rgba(33, 97, 140)'
                
            ],
            borderColor: [
                'rgba(93, 173, 226)',
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