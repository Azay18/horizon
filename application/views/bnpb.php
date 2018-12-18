<title>BNPB</title>
<?php require 'b_header.php'; ?>

<div class="jumbotron jumbotron-fluid bnpb mt-5">
  <div class="container mt-3 text-center">
  <h1 class="display-3">EPODES</h1>
                <p class="lead">Beranda BNPB</p>
                <hr class="my-4">
                <p>Portal evaluasi desa tangguh bencana ini merupakan sistem informasi yang berguna memantau
perkembangan pembangunan desa tangguh bencana dan persebaran program desa tangguh bencana secara
keseluruhan pada peta yang tersedia pada portal tersebut.</p>
</div>

  </div>
</div>
  <section class="bg-white ">
      <div class="container">
        <div class="row ">
          <div class="col text-center">

            <div class="container">
                <div class="row justify-content-center">
              <div class="col-10 info-panel">
              <div class="row">
                  <div class="col-lg">
                    <img src="<?= base_url()?>assets/img/employee.png" alt="employee" class="float-left">
                    <h4 class="mt-3">24 Jam</h4>
                    <p>Layanan diberikan selama 24 jam.</p>
                  </div>
                  <div class="col-lg">
                    <img src="<?= base_url()?>assets/img/hires.png" alt="hires" class="float-left">
                    <h4 class="mt-3">Data Akurat</h4>
                    <p>Data yang disajikan sangat akurat.</p>
                  </div>
                  <div class="col-lg">
                    <img src="<?= base_url()?>assets/img/security.png" alt="security" class="float-left">
                    <h4 class="mt-3">Forum</h4>
                    <p>Sampaikan pendapat di forum.</p>
                  </div>
                </div>
            </div>
          
          </div>
        </div>
      </div>
  </section>
  <!-- berita -->
  <section id="portofolio" class=" pb-4 pt-5">
      <div class="container">
        <div class="row mb-2 pt-2">
          <div class="col text-center">
            <h4>HEADLINE NEWS</h4><hr>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-md">
          <div class="card"><a href="<?=base_url()."controller/berita6"?>">
            <img class="card-img-top" src="<?php echo base_url() ?>assets/img/5.jpg">
              <div class="card-body">
                <p class="card-text"><strong>Desa Kulon Progo Masuk Ranah Digital</strong><br>KULON PROGO, bisniswisata.co.id: Organisasi biro perjalanan wisata</p>
              </div>
            </div></a>
          </div>
          <div class="col-md">
          <div class="card"><a href="<?= base_url()."controller/berita3"?>">
            <img class="card-img-top" style="height:232px" src="<?php echo base_url() ?>assets/img/3.jpg">
              <div class="card-body">
                <p class="card-text"><strong>Kebahagiaan ini cuma dirasakan di desa</strong><br>Brilio.net - Kamu yang berasal atau tinggal di desa nggak perlu malu sama teman</p>
              </div></a>
            </div>
          </div>
          <div class="col-md">
          <div class="card"><a href="<?=base_url()."controller/berita1"?>">
            <img class="card-img-top" src="<?php echo base_url() ?>assets/img/2.jpg">
              <div class="card-body">
                <p class="card-text"><strong>Pemkab Tukar Tanah Kas Desa Gaum</strong><br>Pemkab Karanganyar membeli tanah petani sebagai pengganti tanah kas Desa Gaum</p>
              </div>
            </div></a>
          </div>
        </div>
</div>
</section>
        



<?php require 'footer.php'; ?>