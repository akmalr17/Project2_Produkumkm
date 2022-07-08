<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>resto</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles-merged.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/base.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/vendor.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fonts.css')?>">

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
          <a class="button button-primary cta" href="<?php echo base_url('index.php/login');?>" title="Login">Login</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
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
          <?php foreach($pesanan as $u){ ?>
            <form action="<?php echo base_url(). 'index.php/pesanan/tambah_aksi'; ?>" method="post" class="probootstrap-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="people">Jenis Produk</label>
                    <div class="form-field">
                      <i class="icon icon-chevron-down"></i>
                      <select name="produk_id" id="people" class="form-control">
                        <option value="1">Tas</option>
                        <option value="2">Sepatu</option>
                        <option value="3">Busana Muslimah</option>
                        <option value="4">Perhiasan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date">Tanggal Pemesanan</label>
                    <div class="form-field">
                      <i class="icon icon-calendar"></i>
                      <input type="text" name="tanggal" id="date" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <!-- END row -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Jumlah</label>
                    <div class="form-field">
                      
                      <input type="text" name="jumlah" class="form-control" placeholder="Jumlah pembelian">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-field">
                    <i class="bi bi-cash"></i>
                    <input type="hidden" name="users_id" value="<?php echo $u->users_id ?>">
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
            <?php } ?>
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