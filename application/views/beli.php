<body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Icha Shoes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url()?>about">About</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo base_url()?>landing">All Products</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url()?>beli/assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url()?>beli/css/styles.css" rel="stylesheet" />
    </head>

 <?php foreach ($produk as $p) : ?>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo base_url('assets1/img/'. $p->foto) ?>"></div>
                    <div class="col-md-6">
                        
                        <p class="display-5 fw-bolder"><b><?php echo $p->nama_produk ?> <?php echo $p->jenis ?></b></p>
                        <div class="small mb-1">ID : 000<?php echo $p->id_produk ?></div>
                        <div class="fs-5 mb-5">
                            <span><?php echo $p->harga ?></span>
                        </div>
                        <p class="lead">Tersedia ukuran mulai dari xs - 3xl untuk ukuran anak. Dapatkan harga promo dan potongan ongkir pada setiap pembelian itemnya</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" name="jumlah" value="0" type="number" style="max-width: 4rem" />
                            <a href="<?php echo base_url('admin/beli/' . $p->id_produk )?>"><button class="btn btn-outline-dark flex-shrink-0" type="button">
                                Beli
                            </button></a>
                        </div>
                    </div>
                      <?php endforeach ?>
                </div>
            </div>
        </section>
         <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">MITA AULIA (2 TI B)</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url()?>assets1/js/scripts.js"></script>
    </body>
</html>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url()?>beli/js/scripts.js"></script>
    </body>
</html>
