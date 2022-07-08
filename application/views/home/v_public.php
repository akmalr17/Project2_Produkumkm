    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SISTA UMKM STT NF</title>
        <meta name="description" content="Free Bootstrap Theme by uicookies.com">
        <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles-merged.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css')?>">
        <link href="https://cdn.discordapp.com/attachments/776771319328407552/994788695326609519/technology_3.png" rel="shortcut icon">

        <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Fixed navbar -->
        
        <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>

            <div id="navbar-collapse" class="navbar-collapse collapse">
            <a class="button" style="margin-top: 35px; margin-left: 15px; margin-right: 0px; float: right;" href="<?php echo base_url('index.php/login');?>"><i class="bi bi-box-arrow-in-right" style="margin-right: 10px;" ></i>Log Out</a> 
            <a class="button" style="margin-top: 35px; margin-left: 15px; margin-right: 0px; float: right;" href="<?php echo base_url('index.php/login');?>"><i class="bi bi-person-circle" style="margin-right: 10px;" ></i>Hai, <?php echo $this->session->userdata("username"); ?></a>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#" data-nav-section="welcome">Welcome</a></li>
                <li><a href="#" data-nav-section="specialties">Produk</a></li>
                <li><a href="#" data-nav-section="reservation">Buy</a></li>
                <li><a href="#" data-nav-section="suplier">Suplier</a></li>
                <li></li>
            </ul>
            </div>
        </div>
        
        </nav>

        <section class="flexslider" data-section="welcome">
      <ul class="slides">
        <li style="background-image: url(<?php echo base_url('assets/img/um.png')?>)" class="overlay" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Welcome</h1>
                  <h3 class="secondary-heading">Produk UMKM</h3>
                  <p class="sub-heading">Sista UMKM STT NF</p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url(<?php echo base_url('assets/img/header-bg.jpg')?>" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">GO</h1>
                  <h3 class="secondary-heading">Produk UMKM</h3>
                  <p class="sub-heading">Sista UMKM STT NF</p>
                </div>
              </div>
            </div>
          </div>
          
        </li>
        <li style="background-image: url(<?php echo base_url('assets/img/stt.jpg')?>" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Enjoy</h1>
                  <h3 class="secondary-heading">Produk UMKM</h3>
                  <p class="sub-heading">Sista UMKM STT NF</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
              <h1 class="primary-heading">Project 2</h1>
              <h3 class="secondary-heading">Produk UMKM</h3>
              <span class="seperator">* * *</span>
            </div>
            <p>
              Website Produk UMKM ini dibuat untuk bisa mempermudah para penjual dan pembeli untuk bisa melakukan transaksi jual dan beli.
            </p>
            <p><a href="#" class="probootstrap-custom-link">About Us</a></p>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <p><img src="<?php echo base_url('assets/img/umkm.png')?>" class="img-responsive"></p>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url<?php echo base_url('assets/img/hero_bg_2.jpg')?>;" data-stellar-background-ratio="0.5" data-section="specialties">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Discover</h2>
              <h3 class="secondary-heading">Our Produk Kategory</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- probootstrap-bg-white -->
    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="probootstrap-cell-retro">
            <div class="half">

              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image:;">
                <img src="<?php echo base_url('assets/img/tas.jpg')?>" alt=""></div>
                <div class="text text-center">
                  <h3>TAS</h3>
                  <p>Tas Trendy Cocok dipakai bepergian multifungsi tersedia warna hitam,coklat.</p>
                  <p class="price"><br></p>
                </div>
              </div>
              <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image:;">
                <img src="<?php echo base_url('assets/img/sepatu.jpg')?>" alt="">
              </div>
                <div class="text text-center">
                  <h3>SEPATU</h3>
                  <p>Nike Air Jordan 1.</p>
                  <p class="price"><br></p>
                </div>
              </div>

            </div>
            <div class="half">
              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image:;">
                <img src="<?php echo base_url('assets/img/jilbab.jpg')?>" alt="">
              </div>
                <div class="text text-center">
                  <h3>BUSANA MUSLIMAH</h3>
                  <p>Jilbab cantik buat anak usia 3-6 tahun tersedia warna pink,ungu,hijau,coklat.</p>
                  <p class="price"><br></p>
                </div>
              </div>
              <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image:;">
                <img src="<?php echo base_url('assets/img/perhiasan.jpg')?>" alt="">
              </div>
                <div class="text text-center">
                  <h3>PERHIASAN</h3>
                  <p>1 set perhiasan emas.</p>
                  <p class="price"><br></p>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section-bg overlay" style="background-image: url(<?php echo base_url('assets/img/hero_bg_4.jpg')?>);"  data-stellar-background-ratio="0.5" data-section="suplier">
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">
                <div class="probootstrap-heading">
                <h2 class="primary-heading">Introduce</h2>
                <h3 class="secondary-heading">Our Produk</h3>
                </div>
            </div>
            </div>
        </div>

        </section>
        <section class="probootstrap-section">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-sm-6 probootstrap-animate">
                <div class="probootstrap-block-image">
                <figure><img src="<?php echo base_url('assets/img/T001.jpg')?>" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                    <span class="date">Tas</span>
                    <h3><a href="#">Tas Trendi</a></h3>
                    <p>as Trendy Cocok dipakai bepergian multifungsi tersedia warna hitam,khaki,hijau,coklat.</p>
                    <p class=""><a href="#" class="probootstrap-custom-link link-sm">Rp. 120.000</a></p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 probootstrap-animate">
                <div class="probootstrap-block-image"><br>
                <figure><img src="<?php echo base_url('assets/img/J001.jpg')?>" alt="Free Bootstrap Template by uicookies.com"></figure>
                <br>
                <div class="text">
                    <span class="date">Busana Muslimah</span>
                    <h3><a href="#">Jilbab Anak</a></h3>
                    <p>Jilbab cantik buat anak usia 3-6 tahun tersedia warna pink,ungu,hijau,coklat.</p>
                    <p class=""><a href="#" class="probootstrap-custom-link link-sm"><br>Rp. 350.000</a></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url(<?php echo base_url('assets/img/hero_bg_5.jpg')?>);"  data-stellar-background-ratio="0.5" data-section="reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Shooping</h2>
              <h3 class="secondary-heading">Buy Something</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-animate">
            <form action="<?php echo base_url(). 'index.php/pesanan/tambah_aksi'; ?>" method="post" class="probootstrap-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="people">Jenis Produk</label>
                    <div class="form-field">
                      <i class="icon icon-chevron-down"></i>
                      <select name="produk_id" id="people" class="form-control">
                        <option value="1">Tas Trendi</option>
                        <option value="2">Jilbab Anak</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-field">
                      <input type="hidden" name="tanggal" id="date" value="<?php echo date("Y-m-d H:i:s"); ?>" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <!-- END row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="people">Jumlah Produk Yang Di Pesan</label>
                    <div class="form-field">
                      <input type="text" name="jumlah" class="form-control" placeholder="Jumlah pembelian">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-field">
                    <i class="bi bi-cash"></i>
                    <input type="hidden" name="users_id" value="2" >
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-lg btn-primary btn-block">
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section-bg overlay" style="background-image: url(<?php echo base_url('assets/img/hero_bg_4.jpg')?>);"  data-stellar-background-ratio="0.5" data-section="suplier">
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center probootstrap-animate">
                <div class="probootstrap-heading">
                <h2 class="primary-heading">Introduce</h2>
                <h3 class="secondary-heading">Our Suplier</h3>
                </div>
            </div>
            </div>
        </div>

        </section>
        <section class="probootstrap-section">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-sm-6 probootstrap-animate">
                <div class="probootstrap-block-image">
                <figure><img src="<?php echo base_url('assets/img/3.jpg')?>" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                    <span class="date">Majalengka</span>
                    <h3><a href="#">CV Fikri</a></h3>
                    <p>Jl. Sudirman No. 12 Majalengka Jawa Barat.</p>
                    <p class=""><a href="#" class="probootstrap-custom-link link-sm">Ibu Eneng Tita</a></p>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 probootstrap-animate">
                <div class="probootstrap-block-image">
                <figure><img src="<?php echo base_url('assets/img/1.jpg')?>" alt="Free Bootstrap Template by uicookies.com"></figure>
                <div class="text">
                    <span class="date">Depok</span>
                    <h3><a href="#">CV Hanif Busana</a></h3>
                    <p>Jl. Nusantara No. 8 Depok Jawa Barat.</p>
                    <p class=""><a href="#" class="probootstrap-custom-link link-sm">Ibu Yuyun</a></p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

    <section class="probootstrap-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Locations</h3>
              <div class="row">
                <div class="col-md-6">
                  <p> Jalan Lenteng Agung Raya No.20 RT.5/RW.1 Lenteng Agung, Kelurahan, RT.4/RW.1, Srengseng Sawah,  <br></p>
                </div>
                <div class="col-md-6">
                  <p>Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640 <br></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Open Hours</h3>
              <div class="row">
                <div class="col-md-4">
                  <p>Monday - Friday <br> 8:00am - 5:00pm</p>
                </div>
                <div class="col-md-4">
                  <p>Saturday <br> 8:00am - 12:00pm</p>
                </div>
                <div class="col-md-4">
                  <p>Sunday<br> Closed</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="copyright-text">&copy; 2022 <a href="#">Project 2 Produk UMKM</a>.</p>
          </div>
          <div class="col-md-4">
            <ul class="probootstrap-footer-social right">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <script src="<?php echo base_url('assets/js/scripts.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>

  </body>
</html>