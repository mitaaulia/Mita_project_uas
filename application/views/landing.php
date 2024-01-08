<header>
  <div class="text-center text-white">
    <img src="<?php echo base_url() ?>assets1/img/bg2.png">
  </div>
</header>
<br><br>
<h3><center>Our Products</center></h3>
<!-- Section-->
<section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                     <?php
    // $index = 0;
    foreach ($produk as $p) : ?>

      <div class="col mb-5">
        <div class="card h-100">
          <!-- Product image-->
          <img class="card-img-top" src="<?php echo base_url('assets1/img/'. $p->foto) ?>">
          <!-- Product details-->
          <div class="card-body p-4">
            <div class="text-center">
              <!-- Product name-->
              <h5 class="fw-bolder"><?php echo $p->nama_produk ?></h5>
              <p><?php echo $p->jenis ?></p>
              <!-- Product price-->
              <h5 class="fw-bolder"><?php echo $p->harga ?></h5>
            </div>
          </div>
          <!-- Product actions-->
           <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo base_url('admin/detail/' . $p->id_produk )?>">Detail</a></div>
                            </div>
                        </div>
                    </div>
          <!-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent"> -->
           <!--  <button><a class="btn btn-outline-dark mt-auto" href="">Detail</a></button></div>     
            </div>
        </div>
      </div> -->
    <?php endforeach ?>
                </div>
            </div>
        </section>