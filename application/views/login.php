<title>Login</title>
<?php require 'header.php'; ?>

    <section class="bg-white pb-4" style="padding-top:50px">
        <div class="container">
            <div class="row pt-4">
            <div class="col text-center">
                <h4>LOGIN</h4><hr>
            </div>
            </div>

        <form class="form-signin" action="<?php echo base_url().'index.php/controller/login'?>" method="post">
            <div class="row text-center justify-content-center">
                <div class="col-md-4 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-2 login-image-main text-center">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 user-image-section">
                            <img src="<?php echo base_url() ?>assets/img/p2.png">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 user-login-box">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" id="usr" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" id="usr" name="password" required>
                            </div>
                            <button class="btn btn-success" type="submit">Login</button>
                            <!-- <a href="#" class="btn btn-success">Login</a> -->
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 last-part">
                            <p>Belum Terdaftar?<a href="<?= base_url()."index.php/controller/loadRegister";?>"> Buat Akun</a></p>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
    



<?php require 'footer.php'; ?>