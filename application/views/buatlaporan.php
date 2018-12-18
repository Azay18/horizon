<title>Laporan Pembangunan</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px" method="post" action="<?php echo base_url().'index.php/controller/identitas_laporan'?>">
    <h4 class="mt-4 text-center">IDENTITAS LAPORAN</h4><hr>
    <div class="form-row mt-3">
        <div class="col">
        <label for="namaFasilitator">Nama Fasilitator</label>
        <input type="text" class="form-control" placeholder="Nama Fasilitator" value="<?php echo $this->session->userdata('ses_nama') ?>" name="nama_fasilitator" readonly>
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="inputDesa">Nama Desa</label>
        <!-- <input type="text" class="form-control" id="inputDesa" placeholder="Nama Desa" name="nama_desa"> -->
        <select id="inputState" name="nama_destana" class="form-control">
            <?php foreach ($m_data_destana as $d): ?>
              <!-- echo '<option value="'.$d->nama_destana.'">'.$d->nama_destana.'</option>';  -->
              <option value="<?= $d['nama_destana']; ?>"><?=$d['nama_destana']; ?></option>
            <?php endforeach; ?>
          </select>
    </div>
    </div>
    </div>
    
    

<div class="container text-center">
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
                        <label><input type="radio" name="jawaban1" value="1"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban1" value="0"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Apakah telah ada upaya-upaya awal untuk menyusun dokumen perencanaan penanggulangan bencana
seperti Rencana Penanggulangan Bencana, Rencana Aksi PRB atau Rencana Kontinjensi?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban2" value="1"></label>
                        </div>
                        </td>
                        <td> 
                        <div class="radio">
                        <label><input type="radio" name="jawaban2" value="0"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Apakah telah ada upaya-upaya awal untuk membentuk forum PRB?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban3" value="1"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban3" value="0"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Apakah sudah ada upaya-upaya untuk mengumpulkan dan mengalokasikan dana khusus yang akan
digunakan untuk upaya tanggap darurat?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban4" value="1"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban4" value="0"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Apakah ada praktik-praktik evakuasi dan operasi tanggap darurat bencana yang dilakukan oleh tim
relawan/siaga bencana desa?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban5" value="1"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban5" value="0"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Apakah ada upaya-upaya untuk melakukan perlindungan aset-aset produktif utama masyarakat dari
dampak bencana?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban6" value="1"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban6" value="0"></label>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Apakah ada pengelola dan mekanisme yang jelas untuk menjalankan dan memelihara perlindungan
aset produktif masyarakat?</td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban7" value="1"></label>
                        </div>
                        </td>
                        <td>
                        <div class="radio">
                        <label><input type="radio" name="jawaban7" value="0"></label>
                        </div>
                        </td>
                    </tr>
                </table>
            </div>
            <a href="<?= base_url()."controller/laporan"?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Kirim</button>
    </div><br>
    </form>

<?php require 'footer.php'; ?>