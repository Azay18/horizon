<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="<?= base_url()?>assets/style/sidebar.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.css" />
    <script src="main.js"></script>
</head>
<body>
    <!-- The sidebar -->
    <div class="sidebar">
    <a class="active" href="#home">Home</a>
    <div class="profil">
    <img src="<?= base_url()?>assets/img/p1.png" height="80px" class="foto mt-4" alt="..." class="rounded-circle" style="display: block; margin: auto;">
          <label class="nav-item nav-link text-center" href="#"><strong>Habib</strong><br>Fasilitator</label>
    </div>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
    </div>

    <!-- Page content -->
    <div class="content">
    <div class="container mt-3">
      <h4>DATA INDUK DESA</h4><hr/>
      <!-- Search form -->
    <div class="row mb-3">
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
                <th>Jumlah Warga</th>  
                <th>Kecamatan</th>
                <th>Kabupaten</th>                                                                 
                <th>Provinsi</th>
                <th>Fasilitas</th>
                <th>Kategori</th>
                <th class="text-center">Aksi</th>
              </tr>
          </thead>    
              <tr>
                <td>1</td>
                <td>Nglanjaran</td>
                <td>2320</td>
                <td>Ngaglik</td>
                <td>Sleman</td>
                <td>Yogyakarta</td>
                <td>Baik</td>
                <td>Utama</td>
                <td>
                  <a class="badge badge-success float-left ml-1" href="#">Detail</a>
                  <a class="badge badge-primary float-left ml-1" href="<?= base_url()."index.php/controller/ubahdesa"?>">Ubah</a>
                  <a class="badge badge-danger float-left ml-1" href="#" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Manis Kidul</td>
                <td>1000</td>
                <td>Jalaksana</td>
                <td>Kuningan</td>
                <td>Jawa Barat</td>
                <td>Baik</td>
                <td>Madya</td>
                <td>
                  <a class="badge badge-success float-left ml-1" href="#">Detail</a>
                  <a class="badge badge-primary float-left ml-1" href="#">Ubah</a>
                  <a class="badge badge-danger float-left ml-1" href="#">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Wiradesa</td>
                <td>3215</td>
                <td>Tirto</td>
                <td>Pekalongan</td>
                <td>Jawa Tengah</td>
                <td>Baik</td>
                <td>Utama</td>
                <td>
                  <a class="badge badge-success float-left ml-1" href="#">Detail</a>
                  <a class="badge badge-primary float-left ml-1" href="#">Ubah</a>
                  <a class="badge badge-danger float-left ml-1" href="#">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Manis Lor</td>
                <td>1040</td>
                <td>Jalaksana</td>
                <td>Kuningan</td>
                <td>Jawa Barat</td>
                <td>Baik</td>
                <td>Pratama</td>
                <td>
                  <a class="badge badge-success float-left ml-1" href="#">Detail</a>
                  <a class="badge badge-primary float-left ml-1" href="#">Ubah</a>
                  <a class="badge badge-danger float-left ml-1" href="#">Hapus</a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Kajen</td>
                <td>2140</td>
                <td>Tirto</td>
                <td>Pekalongan</td>
                <td>Jawa Tengah</td>
                <td>Baik</td>
                <td>Madya</td>
                <td>
                  <a class="badge badge-success float-left ml-1" href="#">Detail</a>
                  <a class="badge badge-primary float-left ml-1" href="#">Ubah</a>
                  <a class="badge badge-danger float-left ml-1" href="#">Hapus</a>
                </td>
              </tr>
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
</div>
</body>
</html>

