<title>Laporan Pembangunan</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px">
    <h4 class="mt-4 text-center">IDENTITAS LAPORAN</h4><hr>
    <div class="form-row mt-3">
        <div class="col">
        <label for="namaFasilitator">Nama Fasilitator</label>
        <input type="text" class="form-control" placeholder="Nama Fasilitator">
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="inputDesa">Nama Desa</label>
        <input type="text" class="form-control" id="inputDesa" placeholder="Nama Desa">
    </div>
    <div class="form-row mt-3">
        <div class="form-group col-md-4">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan">
        </div>
        <div class="form-group col-md-4">
        <label for="kabupaten">Kabupaten</label>
        <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten">
        </div>
        <div class="form-group col-md-4">
        <label for="provinsi">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" placeholder="Provinsi">
        </div>
    </div>
    </div>
    </div>
    <a href="<?= base_url()."index.php/controller/fasilitator"?>" class="btn btn-secondary">Kembali</a>
    <a class="btn btn-success" href="<?= base_url()."index.php/controller/indikator";?>">Lanjutkan</a>
    </form>


<?php require 'footer.php'; ?>