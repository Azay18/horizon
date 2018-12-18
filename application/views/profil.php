<title>Profil</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <form class="container" style="padding-top:50px" method="post" action="register">
    <h4 class="mt-4 text-center">PROFIL FASILITATOR</h4><hr>
    <div class="form-row mt-3">
        <div class="form-group col-md-6">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" readonly value="<?= $this->session->userdata('ses_nama')?>">
        </div>
        <div class="form-group col-md-6">
            <label for="inputHp">Nomor HP</label>
            <input type="text" name="nomor_hp" class="form-control" id="inputHP" value="<?= $this->session->userdata('ses_noHp')?>">
        </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" readonly value="<?= $this->session->userdata('ses_email')?>">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" value="<?=$this->session->userdata('ses_password')?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputAddress">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="Alamat" value="<?=$this->session->userdata('ses_alamat')?>">
        </div>
            <div class="form-group col-md-2">
            <label for="inputKode">Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" id="inputKode" value="<?=$this->session->userdata('ses_kodePos')?>">
            </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>



<?php require 'footer.php'; ?>