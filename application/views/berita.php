<title>Berita</title>
<?php require 'header.php'; ?>

<div class="container mt-4 text-center" style="padding-top:50px">
  <h4>BERITA TERKINI</h4><hr/>
<div class="row mb-4">
  <div class="col-md">
    <div class="card">
      <a href="<?= base_url()."index.php/controller/berita1"; ?>"><img class="card-img-top" style="height:232px" src="<?php echo base_url() ?>assets/img/01.jpg"></a>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

  <div class="col-md">
    <div class="card">
    <a href="#"><img class="card-img-top" src="<?php echo base_url() ?>assets/img/0.jpg"></a>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

  <div class="col-md">
    <div class="card"><a href="<?=base_url()."index.php/controller/berita1"?>">
    <img class="card-img-top" src="<?php echo base_url() ?>assets/img/2.jpg">
      <div class="card-body">
        <p class="card-text"><strong>Pemkab Tukar Tanah Kas Desa Gaum</strong><br>Pemkab Karanganyar membeli tanah petani sebagai pengganti tanah kas Desa Gaum</p>
      </div>
    </div></a>
  </div>
</div>

<div class="row mt-4">
  <div class="col-md">
    <div class="card">
      <img class="card-img-top" src="<?php echo base_url() ?>assets/img/4.jpg">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

  <div class="col-md">
    <div class="card">
    <img class="card-img-top" src="<?php echo base_url() ?>assets/img/3.jpg">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

  <div class="col-md">
    <div class="card">
    <a href="#"><img class="card-img-top" src="<?php echo base_url() ?>assets/img/7.jpg"></a>
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>
</div>
</div>


<?php require 'footer.php'; ?>