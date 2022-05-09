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
        <link href="asset/css/cart-style.css" rel="stylesheet" />
    </head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-9">
            <div class="ibox">
                <div class="ibox-title">
                    <span class="pull-right">(<strong>5</strong>) items</span>
                    <h5>Items in your cart</h5>
                </div>
                
                <?php 
                    $i = 1;
                    $this->load->library('cart');
                    foreach ($this->cart->contents() as $brg) :
                    ?>
                <?php echo form_hidden($i.'[rowid]', $brg['rowid']); ?>

                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table shoping-cart-table">

                            <tbody>
                            <tr>
                                <td width="90">
                                    <div class="cart-product-imitation">
                                    </div>
                                </td>
                                <td class="desc">
                                    <h3>
                                        <a href="#" class="text-navy">
                                            <?php echo $brg->nama ?>
                                        </a>
                                    </h3>
                                    <p class="small">
                                        <?php echo $brg->kategori ?>
                                    </p>
                                    <dl class="small m-b-none">
                                        <dt>Description lists</dt>
                                        <dd><?php echo $brg->deskripsi ?></dd>
                                    </dl>
                                    <div class="m-t-sm">
                                        <a href="#" class="text-muted"><i class="fa fa-trash"></i> Remove item</a>
                                    </div>
                                </td>
                                <td>
                                    <?php 100 ?>
                                </td>
                                <td width="65">
                                    <input type="text" class="form-control" placeholder="1">
                                </td>
                                <td>
                                    <h4>
                                    <?php echo $brg->harga ?>
                                    </h4>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php 
                    $i++;
                    endforeach;  ?>
                <div class="ibox-content">
                    <button class="btn btn-primary pull-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                    <a href="http://localhost:8080/kara_project/shoping_page"><button class="btn btn-white" ><i class="fa fa-arrow-left"></i> Continue shopping</button></a>

                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Cart Summary</h5>
                </div>
                <div class="ibox-content">
                    <span>
                        Total
                    </span>
                    <h2 class="font-bold">
                        $390,00
                    </h2>

                    <hr>
                    <span class="text-muted small">
                        *For United States, France and Germany applicable sales tax will be applied
                    </span>
                    <div class="m-t-sm">
                        <div class="btn-group">
                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> Checkout</a>
                        <a href="#" class="btn btn-white btn-sm"> Cancel</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ibox">
                <div class="ibox-title">
                    <h5>Support</h5>
                </div>
                <div class="ibox-content text-center">
                    <h3><i class="fa fa-phone"></i> +43 100 783 001</h3>
                    <span class="small">
                        Please contact with us if you have any questions. We are avalible 24h.
                    </span>
                </div>
            </div>

            <div class="ibox">
                <div class="ibox-content">

                    <p class="font-bold">
                    Other products you may be interested
                    </p>
                    <hr>
                    <div>
                        <a href="#" class="product-name"> Product 1</a>
                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">

                            <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <a href="#" class="product-name"> Product 2</a>
                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">

                            <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php 


?>