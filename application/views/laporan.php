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
                <th>ID</th>  
                <th>Nama Desa</th> 
                <th>Kecamatan</th>                                                                
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
          </thead>  
              <tr>
                <td>1</td>
                <td>Nglanjaran</td>
                <td>Ngaglik</td>
                <td>01-09-12</td>
                <td><a class="btn btn-success ml-1" href="#">Ubah</a></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Manis Kidul</td>
                <td>Jalaksana</td>
                <td>01-09-12</td>
                <td><a class="btn btn-success float-left ml-1" href="#">Ubah</a></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Wiradesa</td>
                <td>Tirto</td>
                <td>01-09-12</td>
                <td><a class="btn btn-success float-left ml-1" href="#">Ubah</a></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Manis Lor</td>
                <td>Jalaksana</td>
                <td>01-09-12</td>
                <td><a class="btn btn-success float-left ml-1" href="#">Ubah</a></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Kajen</td>
                <td>Tirto</td>
                <td>01-09-12</td>
                <td><a class="btn btn-success float-left ml-1" href="#">Ubah</a></td>
              </tr>
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
            <a class="btn btn-primary" href="<?= base_url()."index.php/controller/buatlaporan";?>">Buat Laporan</a>
            </div>
          </div>

    </div>



<?php require 'footer.php'; ?>