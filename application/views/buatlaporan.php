<title>Laporan Pembangunan</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px" method="post" action="identitas_laporan">
    <h4 class="mt-4 text-center">IDENTITAS LAPORAN</h4><hr>
    <div class="form-row mt-3">
        <div class="col">
        <label for="namaFasilitator">Nama Fasilitator</label>
        <input type="text" class="form-control" placeholder="Nama Fasilitator" name="nama_fasilitator">
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="inputDesa">Nama Desa</label>
        <!-- <input type="text" class="form-control" id="inputDesa" placeholder="Nama Desa" name="nama_desa"> -->
        <select id="inputState" name="nama_destana" class="form-control">
            <?php foreach ($des as $d): ?>
              <option value="<?php echo $d['nama_destana']; ?>"><?php echo $d['nama_destana']; ?></option>
            <?php endforeach; ?>
          </select>
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
    </div>
    </div>
    <a href="<?= base_url()."index.php/controller/fasilitator"?>" class="btn btn-secondary">Kembali</a>
    <!-- <a class="btn btn-success" href="<?= base_url()."index.php/controller/indikator";?>">Lanjutkan</a> -->
    <button class="btn btn-success" type="submit" > Lanjutkan </button>
    </form>


<?php require 'footer.php'; ?>