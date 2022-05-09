<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="Baju Keren" content="" />
        <meta name="Natanael Terencio, Muhammad Naufal, Veronica, and Gerald Santoso" content="" />
        <title>Kara Store</title>
        <!--ini buat icon nanti ganti-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <script src="https://kit.fontawesome.com/559051bb96.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- untuk Font -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS buat gambar-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="asset/css/styles.css" rel="stylesheet" />
        <link href="asset/css/detail.css" rel="stylesheet" />
    </head>

<div class="container">
    <div class="col-lg-8 border p-3 main-section bg-white">
        
        <a href="http://localhost:8080/kara_project/shoping_page" class="row hedding m-0 pl-3 pt-0 pb-3">
            Back
        </a>
        <div class="row m-0">
            <div class="col-lg-4 left-side-product-box pb-3">
                
                <?php 
                
                foreach ($gbr as $gbr) : ?>

                <?php  
                $ke = 1;
                    if ($ke != 1){ 
                        $ke++;?>
                <!-- ini tinggal ubah ukuran gambar -->
                <span class="sub-img">
                    <img src="<?php echo base_url(); echo $gbr->gambar?>" class="border p-2">
                </span>

                <?php 
                } else{
                    $ke++;
                    //ini gambar gede
                ?>
                    
                    <img src="<?php echo base_url(); echo $gbr->gambar?>" class="border p-3">

                <?php } endforeach;  ?>


            </div>
            <div class="col-lg-8">
                <div class="right-side-pro-detail border p-3 m-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <span>Produk Detail</span>
                            <p class="m-0 p-0" name="nama"><?php echo  $brg->nama ?></p>
                        </div>
                        <div class="col-lg-12">
                            <p class="m-0 p-0 price-pro">RP. <?php echo $brg->harga ?></p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5>Product Detail</h5>
                            <span> <?php echo $brg->deskripsi ?> 
                            <br>Penjelasannya tulis sendiri yang ukuran Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris.</span>
                            <hr class="m-0 pt-2 mt-2">
                        </div>
                        <div class="col-lg-12">
                            <p class="tag-section"><strong>Tag : </strong><a href=""><?php echo $brg->kategori ?></a></p>
                        </div>
                        <form method="POST" action ="<?php echo base_url()?>detail_con/tambah_cart/<?php echo $brg->id_produk;?>" >
                        <div class="col-lg-12">
                            <h6>Pilih Nomor :</h6>
                            <select id="size" name="size" class="frm-field required">
                                        <option value="S">S</option>         
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-lg-6 pb-2">
                                    <input type = "submit" class="btn btn-danger w-100" value="Add To Cart">
                                    </input>
                                </div>
                                <div class="col-lg-6">
                                    <a href="#" class="btn btn-success w-100">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
        
    </div>
</div>