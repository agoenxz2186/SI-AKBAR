<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Data Grafik Program Studi</h1>
            <ul>
                <li><a href="#">Program Studi</a> -</li>
                <li>Data Prodi</li>
            </ul>
        </div>
    </div>
</div>



<div class="about-page1-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <label for="accountTextarea">Status Prodi</label>

                <canvas id="myChart" width="200" height="100"></canvas>

            </div>

        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Aktif", "Tidak Aktif"],
            datasets: [{
                label: '',
                data: [<?=
                        $aktif->jumlah;
                        ?>,
                    <?=
                    $nonaktif->jumlah;
                    ?>,
                ],
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