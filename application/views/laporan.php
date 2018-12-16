<title>Data Laporan</title>
<?php require 'f_header.php'; ?>

    <!-- form register -->
    <div class="container mt-4 text-center" style="padding-top:50px">
    <h4>DATA LAPORAN</h4><hr>
    <div class="row mt-1">
      <div class="col-lg-5">
          <form action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="cari desa.." name="keyword" autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
              </div>
            </div>
          </form>
        </div> 
      </div>
    <div id="info"></div>
      <div class="table-responsive">                                 
        <table id="user_data" class="table table-bordered table-striped">  
          <thead>  
              <tr>
                <th>Nama Fasilitator</th>  
                <th>Nama Desa</th> 
                <th>Kecamatan</th>                                                                
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
          </thead>  
          <?php foreach ($laporan as $l) { ?>
              <tr>
                <td><?= $l['nama_fasilitator']; ?></td>
                <td><?= $l['nama_desa']; ?></td>
                <td><?= $l['kecamatan']; ?></td>
                <td><?= $l['tanggal']; ?></td>
                <td><a class="btn btn-primary " href="#">Detail</a>
                    <a class="btn btn-success ml-1" href="#">Ubah</a>
                    <a class="btn btn-danger ml-1" href="#" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                </td>
              </tr>
          <?php } ?>
            </table>  
          </div>

          <div class="row">
            <div class="col-md-6">
            <nav aria-label="Page navigation example">
              <ul class="pagination col-auto">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
            </div>
          
          <div class="col-md-6 text-right">
            <a class="btn btn-primary" href="<?= base_url()."controller/buatlaporan";?>">Buat Laporan</a>
            </div>
          </div>

    </div>



<?php require 'footer.php'; ?>