<title>Forum</title>
<?php require 'f_header.php'; ?>

    <div class="container mt-4 text-center" style="padding-top:50px">
      <h4>FORUM DISKUSI</h4><hr/></div>
    <div id="info"></div>
    
    <div class="container">
      <div class="media">
      <img class="person align-self-start mr-3" height="64px" src="<?php echo base_url() ?>assets/img/p1.png" alt="Generic placeholder image">
        <div class="media-body">
          <h5 class="mt-0">Muhammad Al fatih</h5>
          <p>Portal ini sangat bermanfaat dan baik sekali.</p>
        </div>
      </div><hr>
      <div class="media">
      <img class="person align-self-start mr-3" height="64px" src="<?php echo base_url() ?>assets/img/p2.png" alt="Generic placeholder image">
        <div class="media-body">
          <h5 class="mt-0">David Sandro</h5>
          <p>Update beritanya sangat menarik.</p>
        </div>
      </div><hr>
      <div class="media">
      <img class="person align-self-start mr-3" height="64px" src="<?php echo base_url() ?>assets/img/p3.png" alt="Generic placeholder image">
        <div class="media-body">
          <h5 class="mt-0">Caitlin</h5>
          <p>Bagus sekali.</p>
        </div>
      </div><hr>
      <div class="media">
      <img class="person align-self-start mr-3" height="64px" src="<?php echo base_url() ?>assets/img/p4.png" alt="Generic placeholder image">
        <div class="media-body">
          <h5 class="mt-0">Roy</h5>
          <p>B aja.</p>
        </div>
      </div><hr>
      <form action="">
      <div class="form-row mt-3">
            <div class="col">
              <label for="namaDiskusi">Masukan Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="nama_diskusi">
            </div>
      </div>
      <div class="form-row mt-3">
            <div class="col">
              <label for="komentar">Komentar</label>
              <textarea type="textarea" class="form-control" placeholder="komentar" name="komentar"></textarea>
            </div>
      </div>
        <button type="submit" class="mt-3 btn btn-success">Kirim</button>
      </form>
    </div>

    

<?php require 'footer.php'; ?>