<title>Calon Fasilitator</title>
<?php require 'b_header.php'; ?>

    <div class="container mt-4 text-center" style="padding-top:50px">
      <h4>CALON FASILITATOR</h4><hr>
      <div class="row mt-1">
      <div class="col-lg-5">
          <form action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="cari fasilitator.." name="keyword" autocomplete="off">
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
                <th>Nama Calon</th> 
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Aksi</th>
              </tr>
          </thead> 
          <?php foreach ($cfs as $c) { ?>
              <tr>
                <td><?= $c['nama']; ?></td>
                <td><?= $c['alamat']; ?></td>
                <td><?= $c['nomor_hp']; ?></td>
                <td><?= $c['email']; ?></td>
                <td>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                  Detail
                </button>
                <a class="btn btn-primary" href="<?php echo base_url('index.php/controller/terimaFasilitator/'.$c['id_user']); ?>">Terima</a>
                <a class="btn btn-danger" href="#"  onclick="return confirm('Anda Yakin Ingin Menolak Calon Ini?')">Tolak</a>
                </td>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Calon Fasilitator</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label for="">Nama : Ramdani</label><br>
            <label for="">Email : ramdani@gmail.com</label><br>
            <label for="">Nomor HP : 087666554456</label><br>
            <label for="">Usia : 19</label><br>
            <label for="">Jenjang Pendidikan : SMA</label><br>
            <label for="">Alamat : Jl. Mawar No. 3 RT 4/RW 5 Tirto, Sleman, Yogyakarta</label><br>
            <label for="">Alasan : Biar ada kerjaan</label><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>



<?php require 'footer.php'; ?>