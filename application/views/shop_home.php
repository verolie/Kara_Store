        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1 class="text-white font-weight-bold">Show Your Character From The Way You Dress</h1>
                        <p class="quote">- Kara Store -</p>
                    </div>
                </div>
            </div>
        </header>

        <section class="page-section" id= "about">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Our Product</h2>
                <hr class="divider" />
            </div>
            <div id="portfolio">
            <div class="container-fluid p-0">
            <div class="row g-0"> 
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="asset/img/flower_girl.jpg" title="Project Name">
                            <img class="img-fluid" src="asset/img/flower_girl.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="asset/img/baldguy.jpg" title="Project Name">
                            <img class="img-fluid" src="asset/img/baldguy.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="asset/img/thinking_girl.jpg" title="Project Name">
                            <img class="img-fluid" src="asset/img/thinking_girl.jpg" alt="..."/>
                        </a>
                    </div>
                </div>
            </div>
        </div>    
        </section>
        
        <div class="container-fluid">
                <h2 class="text-left mt-0">Our Product</h2>
            <div class="row text-center">
                <?php foreach ($barang as $brg) :
                    ?>
                    <div class="card">
                    <img src="<?php base_url(); echo $brg->gambar?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $brg->nama ?></h5>
                            <small><?php echo $brg->kategori?> - <?php echo $brg->deskripsi?></small>
                            <br>
                            <small style="font-weight: bold; down-padding: 3px">Rp. <?php echo $brg->harga ?></small>
                            <br>
                            <a href="<?php echo base_url() ?>shoping_page/pindah_detail/<?php echo $brg->id_produk; ?>"    class="btn btn-sm btn-primary"> detail </a>
                            <!-- klo mau pake ijo soalnya lumayan bagus coba coba
                            <a href="<?php echo base_url()?>" class="btn btn-sm btn-success"> Detail </a> -->
                        </div>
                    </div>
                <?php endforeach;  ?>
            </div>
    </div>
