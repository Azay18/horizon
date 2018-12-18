<title>Detail Calon</title>
<?php require 'b_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px" method="post" action="register">
    <h4 class="mt-4 text-center">DETAIL CALON FASILITATOR</h4><hr>
    <div class="form-row mt-3">
        <div class="form-group col-md-6">
            <label for="namaLengkap">Nama Lengkap : <?= $nama;?></label>
        </div>
        <div class="form-group col-md-3">
        <label for="jenisKelamin">Jenis Kelamin : <?= $jenis_kelamin;?></label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">Nomor Hp : <?= $nomor_hp;?></label>
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Usia : <?= $usia;?></label>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Alamat : <?= $alamat;?></label>
            </div>
            <div class="form-group col-md-2">
            <label for="inputKode">Kode Pos : <?= $kode_pos;?></label>
            </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
        <label for="pendidikan">Jejang Pendidikan : <?= $jenjang_pendidikan;?></label>
        </div>
    </div>
    <div class="form-group">
    <label for="alasan">Alasan Bergabung : <?= $alasan;?></label>
    </div>
    <a type="submit" class="btn btn-secondary" href="<?= base_url()."controller/calonfasilitator";?>">Kembali</a>
    </form>



<?php require 'footer.php'; ?>