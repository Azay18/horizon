<title>Lihat Laporan</title>
<?php require 'b_header.php'; ?>

    <div class="container mt-4 text-center" style="padding-top:50px">
      <h4>LIHAT LAPORAN</h4><hr/>
      <div class="row mt-1">
      <div class="col-lg-5">
          <form action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="cari laporan.." name="keyword" autocomplete="off">
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
                <th>Nama Fasilitator</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </tr>
          </thead> 
              <tr>
                <td>1</td>
                <td>Jalaksana</td>
                <td>Sauqi</td>
                <td>08/12/19</td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#detailModal">
                Detail
                </button>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kategoriModal">
                    Kategorikan
                  </button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Sleman</td>
                <td>Habib</td>
                <td>085436278799</td>
                <td><a class="btn btn-success" href="#">Detail</a>
                <a class="btn btn-primary" href="#">Kategorikan</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Turi</td>
                <td>Fakru</td>
                <td>085436278799</td>
                <td><a class="btn btn-success" href="#">Detail</a>
                <a class="btn btn-primary" href="#">Kategorikan</a>
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

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Laporan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="container mt-4 ">
              <label for="">Nama Fasilitator : Habib</label><br>
              <label for="">Desa             : Kimpulan</label><br>
              <label for="">Kecamatan             : Ngemplak</label><br>
              <label for="">Kabupaten             : Sleman</label><br>
              <label for="">Skor Indikator : 70</label><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="kategoriModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kategori Desa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Desa ini dikategorikan sebagai Desa Utama<br>
          <button type="button" class="btn btn-success mt-3">Terima</button>
          <button type="button" class="btn btn-danger mt-3"  onclick="return confirm('Anda Yakin Ingin Menolak Laporan Ini?')">Tolak</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>



<?php require 'footer.php'; ?>