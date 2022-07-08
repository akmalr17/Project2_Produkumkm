<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>P3-Form Processing</title>
</head>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project 2 Produk UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">UMKM STT Nurul Fikri</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Produk</h3>

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
                <form action="<?php echo base_url(). 'index.php/produk/tambah_aksi'; ?>" method="post">
                    <table style="margin:20px auto;">
                        <tr>
                            <td>Kode Produk</td>
                            <td><input type="text" name="kode"></td>
                        </tr>
                        <tr>
                            <td>Nama Produk</td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>Stok Produk</td>
                            <td><input type="number" name="stok"></td>
                        </tr>
                        <tr>
                            <td>Harga Beli Produk</td>
                            <td><input type="number" name="harga_beli"></td>
                        </tr>
                        <tr>
                            <td>Harga Jual Produk</td>
                            <td><input type="number" name="harga_jual"></td>
                        </tr>
                        <tr>
                            <td>Nama Foto Produk</td>
                            <td><input type="text" name="foto" placeholder="isi Dengan .jpg/.png"></td>
                            <td>*Contoh: S001.jpg</td>
                        </tr>
                        <tr>
                            <td>Jenis Produk</td>
                            <td><select name="jenis_id" id="people" class="form-control">
                                <option value="1">Tas</option>
                                <option value="2">Sepatu</option>
                                <option value="3">Busana Muslimah</option>
                                <option value="4">Perhiasan</option>
                      </select></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Produk</td>
                            <td><input type="text" name="deskripsi"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Tambah"></td>
                        </tr>
                    </table>
                </form>	
                        
              <!-- /.card-body -->
              <div class="card-footer">
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