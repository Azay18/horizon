<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/style/sidebar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/js/app.js">
</head>
<body>
    
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="text-white bg-dark">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dash</a>
                </li>
                <li>
                    <a href="#">Short</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
            </ul>
        </div>
    
        
        <!-- page -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple sidebar</h1>
                        <p>This is it</p>
                        <p>Make sure to keep</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- <div id="menu" class="nav">
            <a href="#" class="close" onclick="closeSlideMenu()">
                <i class="fas fa-times"></i>
            </a>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Port</a>
        </div>
        
        <h1>Responsive</h1>
    </div> -->

    <script>
        $("#menu-toggle").click(function(e){
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

<?php require 'footer.php'; ?>