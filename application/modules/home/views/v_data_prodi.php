<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Data Program Studi</h1>
            <ul>
                <li><a href="#">Program Studi</a> -</li>
                <li>Data Prodi</li>
            </ul>
        </div>
    </div>
</div>
<div class="registration-page-area bg-secondary">
    <div class="container">
        <h2 class="sidebar-title">Data Program Studi</h2>
        <div class="table-responsive">
            <table class="table table-striped" id="display">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Nama Program Studi</th>
                        <th style="text-align: center;">Jenjang</th>
                        <th style="text-align: center;">Perguruan Tinggi</th>
                        <th style="text-align: center;">Status Prodi</th>



                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 0;
                    foreach ($data->result() as $row) :
                        $no++;
                    ?>
                        <tr>
                            <td style="text-align: center;"><?= $no ?></td>
                            <td style="text-align: center;"><?= $row->nama_prodi ?></td>
                            <td style="text-align: center;"><?= $row->jenjang ?></td>
                            <td style="text-align: center;"><?= $row->pts ?></td>
                            <td style="text-align: center;">
                                <?php if ($row->status_prodi == '1') { ?>
                                    <h5>AKTIF</h5>
                                <?php } else { ?>
                                    <h5>TIDAK AKTIF</h5>
                                <?php } ?>
                            </td>
                        </tr>


                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Aktif", "Tidak Aktif"],
            datasets: [{
                label: 'Grafik Prodi Komputer',
                data: [
                    <?=
                    $aktif->jumlah;
                    ?>,
                    <?=
                    $nonaktif->jumlah;
                    ?>,

                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
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
<!-- Registration Page Area End Here -->