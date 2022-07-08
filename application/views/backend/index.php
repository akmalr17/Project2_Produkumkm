<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Selamat Datang Di Aplikasi UMKM STT Nurul Fikri</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Anggota Kelompok</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>1</h3>

                <p>Pesanan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('index.php/admin/pesanan'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>2<sup style="font-size: 20px"></sup></h3>

                <p>Pembelian</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url('index.php/admin/pembelian'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>2</h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url('index.php/admin/users'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>2</h3>

                <p>Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url('index.php/admin/produk'); ?>" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Anggota Kelompok</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              Nama             : Rifki Muhammad Fadhil Arrozi
              <br>NIM              : 0110221195 
              <br>Program Studi    : Informatika 
              <br>Semester         : 2021/2022 Genap
              </div>
              <div class="card-body">
              Nama             : Muhammad Akmal Rizqullah
              <br>NIM              : 0110221197 
              <br>Program Studi    : Informatika 
              <br>Semester         : 2021/2022 Genap
              </div>
              <div class="card-body">
              Nama             : Muhammad Faiz Kayyis
              <br>NIM              : 0110221190
              <br>Program Studi    : Informatika 
              <br>Semester         : 2021/2022 Genap
              </div>
              <div class="card-body">
              Nama             : Faizurrahman Alhakim
              <br>NIM              : 0110221184
              <br>Program Studi    : Informatika 
              <br>Semester         : 2021/2022 Genap
              </div>
              
              <!-- /.card-body -->
              <div class="card-footer">
                2TI08
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>