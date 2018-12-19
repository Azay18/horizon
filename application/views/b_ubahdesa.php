<title>Ubah Data Induk Desa</title>
<?php require 'b_header.php'; ?>

    <!-- form register -->
    <form method="POST" action="<?php echo base_url()."controller/bdo_update"; ?>" class="container" style="padding-top:50px">
    <h4 class="mt-4 text-center">UBAH DATA INDUK DESA</h4><hr>
    <div class="form-row mt-3">
        <div class="col">
        <label for="namaDesa">Nama Desa</label>
        <input type="text" class="form-control" name="nama_destana" value="<?= $nama_destana; ?>">
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="inputAlamat">Alamat</label>
        <input type="text" class="form-control" id="inputAlamat" name="alamat" value="<?= $alamat; ?>">
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-4">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $kecamatan; ?>">
        </div>
        <div class="form-group col-md-4">
        <label for="kabupaten">Kabupaten</label>
        <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="<?= $kabupaten; ?>">
        </div>
        <div class="form-group col-md-4">
        <label for="provinsi">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $provinsi; ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputWarga">Jumlah Penduduk</label>
        <input type="text" class="form-control" id="inputWarga" name="jumlah_penduduk" value="<?= $jumlah_penduduk; ?>">
        </div>
        <div class="form-group col-md-2">
        <label for="inputKode">Kode Pos</label>
        <input type="text" class="form-control" id="inputKode" name="kode_pos" value="<?= $kode_pos; ?>">
        </div>
    </div>
    </div>
    <a href="<?= base_url()."controller/b_desa"?>" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>



<?php require 'footer.php'; ?>