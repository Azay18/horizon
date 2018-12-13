<title>Indikator Desa</title>
<?php require 'f_header.php'; ?>

    <div class="container mt-4 text-center" style="padding-top:50px">
        <h4>INDIKATOR DESA</h4><hr>
        <div class="info"></div>
            <div class="table-responsive">
                <table id="indikator" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Indikator</th>
                            <th>Iya</th>
                            <th>Tidak</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td>Apakah telah ada upaya-upaya awal untuk menyusun kebijakan PRB di tingkat desa atau kelurahan?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="satu"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="satu"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Apakah telah ada upaya-upaya awal untuk menyusun dokumen perencanaan penanggulangan bencana
seperti Rencana Penanggulangan Bencana, Rencana Aksi PRB atau Rencana Kontinjensi?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="dua"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="dua"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Apakah telah ada upaya-upaya awal untuk membentuk forum PRB?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="tiga"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="tiga"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Apakah sudah ada upaya-upaya untuk mengumpulkan dan mengalokasikan dana khusus yang akan
digunakan untuk upaya tanggap darurat?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="empat"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="empat"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Apakah ada praktik-praktik evakuasi dan operasi tanggap darurat bencana yang dilakukan oleh tim
relawan/siaga bencana desa?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="lima"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="lima"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Apakah ada upaya-upaya untuk melakukan perlindungan aset-aset produktif utama masyarakat dari
dampak bencana?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="enam"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="enam"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Apakah ada pengelola dan mekanisme yang jelas untuk menjalankan dan memelihara perlindungan
aset produktif masyarakat?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="tujuh"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="tujuh"></label>
                        </div>
                        </td>
                    </tr>
                </table>
            </div>
            <a href="<?= base_url()."index.php/controller/buatlaporan"?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Kirim</button>
    </div>



<?php require 'footer.php'; ?>