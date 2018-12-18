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
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark fasilitator">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url()."controller/fasilitator"; ?>">HORIZON</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="<?= base_url()."controller/fasilitator"; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."controller/f_kategori"; ?>">Kategori</a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."controller/f_berita"; ?>">Berita</a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."controller/f_forum"; ?>">Forum</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url()."controller/desa";?>">Data Induk Desa</a>
              <a class="dropdown-item" href="<?= base_url()."controller/laporan";?>">Data Laporan</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= base_url()."controller/logout";?>">Logout</a>
            </div>
          </li>
          <img src="<?= base_url()?>assets/img/p1.png" class="foto mt-1" alt="..." class="rounded-circle">
          <a class="nav-item nav-link active" href="<?= base_url()."controller/profil"?>"><?php echo $this->session->userdata('ses_nama')?></a>
        </div>
      </div>
    </div>  
  </nav>