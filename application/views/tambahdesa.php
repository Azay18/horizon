<title>Tambah Desa</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px">
    <h4 class="mt-4 text-center">TAMBAH DESA</h4><hr>
    <div class="form-row mt-3">
        <div class="col">
        <label for="namaDesa">Nama Desa</label>
        <!-- <input type="text" class="form-control" placeholder="Nama Desa"> -->
        <select id="inputState" name="departemen" class="form-control"> 
        <?php foreach ($des as $d): ?>
              <option value="<?php echo $d['nama_destana'];?>"></option>
        <?php endforeach; ?>
        </select>
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="inputAlamat">Alamat</label>
        <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat Desa" name="alamat">
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-4">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" name="kecamatan">
        </div>
        <div class="form-group col-md-4">
        <label for="kabupaten">Kabupaten</label>
        <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten" name="kabupaten">
        </div>
        <div class="form-group col-md-4">
        <label for="provinsi">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputWarga">Jumlah Warga</label>
        <input type="text" class="form-control" id="inputWarga" name="jumlah_penduduk">
        </div>
        <div class="form-group col-md-2">
        <label for="inputKode">Kode Pos</label>
        <input type="text" class="form-control" id="inputKode" name="kode_pos">
        </div>
    </div>
    <a href="<?= base_url()."index.php/controller/fasilitator"?>" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>



<?php require 'footer.php'; ?>