<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style/header.css">
    
    <!-- Login -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/style/login.css">

  </head>
  <body>
  
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bnpb">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url()."index.php/controller/bnpb"; ?>">HORIZON</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="<?= base_url()."index.php/controller/bnpb"; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."index.php/controller/kategori"; ?>">Kategori</a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."index.php/controller/berita"; ?>">Berita</a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."index.php/controller/forum"; ?>">Forum</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url()."index.php/controller/desa";?>">Data Induk Desa</a>
                <a class="dropdown-item" href="<?= base_url()."index.php/controller/calonfasilitator";?>">Calon Fasilitator</a>
                <a class="dropdown-item" href="<?= base_url()."index.php/controller/lihatlaporan";?>">Lihat Laporan</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url()."index.php/controller/logout";?>">Logout</a>
            </div>
          </li>
          <img src="<?= base_url()?>assets/img/p2.png" class="foto mt-1" height="30px" class="mt-1" alt="">
          <a class="nav-item nav-link active" href="#">Habib</a>
        </div>
      </div>
    </div>  
    </nav>