<title>Kategori</title>
<?php require 'b_header.php'; ?>

    <div class="container mt-4 text-center" style="padding-top:50px">
      <h4>KATEGORI DESA</h4><hr/>
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
                <th>Nama Desa</th> 
                <th>Kecamatan</th>
                <th>Kabupaten</th>                                                                 
                <th>Provinsi</th>
                <th>Kategori</th>
              </tr>
          </thead>  
          <?php foreach ($desa as $d) { ?>
              <tr>
                <td><?= $d['nama_destana']; ?></td>
                <td><?= $d['kecamatan']; ?></td>
                <td><?= $d['kabupaten']; ?></td>
                <td><?= $d['provinsi']; ?></td>
                <td><?= $d['jenis_destana']; ?></td>
              </tr>
          <?php } ?>
          </table>  
        </div>  

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

    

<?php require 'footer.php'; ?>