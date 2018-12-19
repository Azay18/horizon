<title>Data Induk Desa</title>
<?php require 'b_header.php'; ?>

    <div class="container mt-4 text-center" style="padding-top:50px">
      <h4>DATA INDUK DESA</h4><hr/>
      <!-- Search form -->
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
        <table class="table table-bordered table-striped">  
          <thead>  
              <tr>
                <th>Nama Desa</th>
                <th>Jumlah Penduduk</th>  
                <th>Kecamatan</th>
                <th>Kabupaten</th>                                                                 
                <th>Provinsi</th>
                <th>Kode Pos</th>
                <th>Kategori</th>
                <th class="text-center">Aksi</th>
              </tr>
          </thead>  
          <?php foreach ($desa as $d) { ?>  
              <tr>
                <td><?= $d['nama_destana']; ?></td>
                <td><?= $d['jumlah_penduduk']; ?></td>
                <td><?= $d['kecamatan']; ?></td>
                <td><?= $d['kabupaten']; ?></td>
                <td><?= $d['provinsi']; ?></td>
                <td><?= $d['kode_pos']; ?></td>
                <td><?= $d['jenis_destana']; ?></td>
                <td>
                  <a class="badge badge-success float-left ml-1" href="<?= base_url()."controller/bedit_data/".$d['id_destana'];?>">Ubah</a>
                  <a class="badge badge-danger float-left ml-1" href="<?= base_url()."controller/hapusdesa/".$d['id_destana'];?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
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
            <a class="btn btn-primary" href="<?= base_url()."controller/tambahdesa";?>">Tambah Data Desa</a>
            </div>
          </div>
    </div>   

    

<?php require 'footer.php'; ?>