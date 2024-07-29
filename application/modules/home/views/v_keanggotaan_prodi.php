<div class="inner-page-banner-area" style="background-image: url('img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Data Keanggotaan Prodi</h1>
            <ul>
                <li><a href="#">Membership</a> -</li>
                <li>Keanggotaan Prodi</li>
            </ul>
        </div>
    </div>
</div>
<div class="registration-page-area bg-secondary">
    <div class="container">
        <h2 class="sidebar-title">Data Keanggotaan Prodi</h2>
        <div class="table-responsive">
            <table class="table table-striped" id="display">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Nomor Anggota</th>
                        <th style="text-align: center;">Nama Program Studi</th>
                        <th style="text-align: center;">Perguruan Tinggi</th>
                        <th style="text-align: center;">Masa Berlaku</th>
                        <th style="text-align: center;">Status</th>



                    </tr>
                </thead>
                <tbody>

                    <?php
                    $no = 0;
                    foreach ($data->result() as $row) :
                        $no++;
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row->no_anggota ?></td>
                        <td><?= $row->nama_prodi ?> (<?= $row->jenjang ?> )</td>
                        <td><?= $row->pts ?></td>
                        <td><?= $row->masa_berlaku ?></td>
                        <td>
                            <?php if ($row->status_prodi == '1'): ?>
                            <button class="btn btn-success btn-sm">Aktif</button>
                            <?php else: ?>
                            <button class="btn btn-danger btn-sm">Tidak Aktif</button>
                            <?php endif; ?>
                        </td>

                    </tr>


                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Registration Page Area End Here -->