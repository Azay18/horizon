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

    <!-- JS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/style/maps.js">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/style/header.css">
    
    <!-- Login -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/style/login.css">

  </head>
  <body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark home">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url()."index.php/controller"; ?>">HORIZON</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="<?= base_url()."index.php/controller"; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."index.php/controller/kategori"; ?>">Kategori</a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."index.php/controller/berita"; ?>">Berita</a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."index.php/controller/forum"; ?>">Forum</a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."index.php/controller/login"; ?>">Login</a>
          <a class="nav-item nav-link active" href="<?php echo base_url()."index.php/controller/register"; ?>">Register</a>
        </div>
      </div>
    </div>  
  </nav>