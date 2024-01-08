<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets2/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets2/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Icha Shoes</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url()?>assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url()?>assets2/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo base_url()?>assets2/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Icha Shoes
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./table.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Produk </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Produk Icha Shoes</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Jenis</th>
                                            <th>Warna</th>
                                            <th>Ukuran</th>
                                            <th>Harga</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <?php
                                        $no=1;
                                        foreach ($produk as $f) : ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $f->nama_produk ?></td>
                                                <td><?php echo $f->jenis ?></td>
                                                <td><?php echo $f->warna ?></td>
                                                <td><?php echo $f->ukuran ?></td>
                                                <td><?php echo $f->harga ?></td>
                                                <td><?php echo $f->foto ?></td>
                                                <td><?php echo anchor('admin/edit/' . $f->id_produk, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div') ?>Tambah</td> -->
                                               <td> <?php echo anchor('admin/update/' . $f->id_produk, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div') ?>Edit</td> -->
                                                <td><?php echo anchor('admin/hapus/' . $f->id_produk, '<div class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></div') ?>Hapus</td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url()?>assets2/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo base_url()?>assets2/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets2/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?php echo base_url()?>assets2/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets2/js/demo.js"></script>

</html>
