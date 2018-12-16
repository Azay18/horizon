<title>Profil</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px" method="post" action="register">
    <h4 class="mt-4 text-center">PROFIL FASILITATOR</h4><hr>
    <div class="form-row mt-3">
        <div class="form-group col-md-6">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" readonly placeholder="<?= $this->session->userdata('ses_nama')?>">
        </div>
        <div class="form-group col-md-3">
        <label for="jenisKelamin">Jenis Kelamin</label>
        <select class="custom-select" name="jenis_kelamin">
            <option value="laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        </div>
        <div class="form-group col-md-3">
            <label for="foto">Foto</label>
            <img src="<?= $this->session->userdata('ses_foto')?>" width="100">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" readonly placeholder="<?= $this->session->userdata('ses_email')?>">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputHp">Nomor HP</label>
        <input type="text" name="nomor_hp" class="form-control" id="inputHP">
        </div>
        <div class="form-group col-md-3">
        <label for="inputState">Usia</label>
        <input type="number" name="usia" class="form-control" id="inputHP">
        </div>
        <div class="form-group col-md-3">
        <label for="pendidikan">Jejang Pendidikan</label>
        <select class="custom-select" name="jenjang_pendidikan">
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma">SMA</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="Alamat">
        </div>
            <div class="form-group col-md-2">
            <label for="inputKode">Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" id="inputKode">
            </div>
    </div>
    <div class="form-group">
    <label for="alasan">Alasan Bergabung</label>
    <textarea class="form-control" name="alasan" rows="5" id="alasan" readonly placeholder="<?= $this->session->userdata('ses_alasan')?>"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>



<?php require 'footer.php'; ?>