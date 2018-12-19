<title>Kategorikan Desa</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px" method="post" action="<?php echo base_url().'controller/kategorikan'?>">
    <h4 class="mt-4 text-center">IDENTITAS LAPORAN</h4><hr>
    <div class="form-row mt-3">
        <div class="col">
        <label for="namaFasilitator">Nama Fasilitator : <?php foreach ($data as $d) { echo $d['nama_fasilitator'];} ?></label>
        <label for=""></label>
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="inputDesa">Nama Desa : <?php foreach ($data as $d) { echo $d['nama_desa'];} ?></label>
        <label for=""></label>
    </div>
    <div class="form-row mt-3">
        <div class="col">
        <label for="namaFasilitator">Tanggal : <?php foreach ($data as $d) { echo $d['tanggal_laporan'];} ?></label>
        <label for=""></label>        
        </div>
    </div>
    </div>
    </div>
    
    

<div class="container text-center mt-3">
        <h4>INDIKATOR DESA</h4><hr>
        <div class="info"></div>
            <div class="table-responsive">
                <table id="indikator" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Indikator</th>
                            <th>Jawaban</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td>Apakah telah ada upaya-upaya awal untuk menyusun kebijakan PRB di tingkat desa atau kelurahan?</td>
                        <td><?php 
                        foreach ($data2 as $d2) { 
                            if($d2['ya1'] == 1) {
                                $d2['ya1'] = "Ya";
                                echo $d2['ya1'];
                            } else if ($d2['tidak1'] == 0) {
                                $d2['tidak1'] = "Tidak";
                                echo $d2['tidak1'];
                            } 
                        }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Apakah telah ada upaya-upaya awal untuk menyusun dokumen perencanaan penanggulangan bencana
seperti Rencana Penanggulangan Bencana, Rencana Aksi PRB atau Rencana Kontinjensi?</td>
                        <td><?php 
                        foreach ($data2 as $d2) { 
                            if($d2['ya2'] == 1) {
                                $d2['ya2'] = "Ya";
                                echo $d2['ya2'];
                            } else if ($d2['tidak2'] == 0) {
                                $d2['tidak2'] = "Tidak";
                                echo $d2['tidak2'];
                            } 
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Apakah telah ada upaya-upaya awal untuk membentuk forum PRB?</td>
                        <td><?php 
                        foreach ($data2 as $d2) { 
                            if($d2['ya3'] == 1) {
                                $d2['ya3'] = "Ya";
                                echo $d2['ya3'];
                            } else if ($d2['tidak3'] == 0) {
                                $d2['tidak3'] = "Tidak";
                                echo $d2['tidak3'];
                            } 
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Apakah sudah ada upaya-upaya untuk mengumpulkan dan mengalokasikan dana khusus yang akan
digunakan untuk upaya tanggap darurat?</td>
                        <td><?php 
                        foreach ($data2 as $d2) { 
                            if($d2['ya4'] == 1) {
                                $d2['ya4'] = "Ya";
                                echo $d2['ya4'];
                            } else if ($d2['tidak4'] == 0) {
                                $d2['tidak4'] = "Tidak";
                                echo $d2['tidak4'];
                            } 
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Apakah ada praktik-praktik evakuasi dan operasi tanggap darurat bencana yang dilakukan oleh tim
relawan/siaga bencana desa?</td>
                        <td><?php 
                        foreach ($data2 as $d2) { 
                            if($d2['ya5'] == 1) {
                                $d2['ya5'] = "Ya";
                                echo $d2['ya5'];
                            } else if ($d2['tidak5'] == 0) {
                                $d2['tidak5'] = "Tidak";
                                echo $d2['tidak5'];
                            } 
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Apakah ada upaya-upaya untuk melakukan perlindungan aset-aset produktif utama masyarakat dari
dampak bencana?</td>
                        <td><?php 
                        foreach ($data2 as $d2) { 
                            if($d2['ya6'] == 1) {
                                $d2['ya6'] = "Ya";
                                echo $d2['ya6'];
                            } else if ($d2['tidak6'] == 0) {
                                $d2['tidak6'] = "Tidak";
                                echo $d2['tidak6'];
                            } 
                        }
                        ?>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Apakah ada pengelola dan mekanisme yang jelas untuk menjalankan dan memelihara perlindungan
aset produktif masyarakat?</td>
                        <td><?php 
                        foreach ($data2 as $d2) { 
                            if($d2['ya7'] == 1) {
                                $d2['ya7'] = "Ya";
                                echo $d2['ya7'];
                            } else if ($d2['tidak7'] == 0) {
                                $d2['tidak7'] = "Tidak";
                                echo $d2['tidak7'];
                            } 
                        }
                        ?>
                    </tr>
                </table>
            </div>
            <a href="<?= base_url()."controller/laporan"?>" class="btn btn-secondary">Kembali</a><br>
    </form>

<?php require 'footer.php'; ?>