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
              <?php foreach($produk as $u){ ?>
                <form action="<?php echo base_url(). 'index.php/produk/update'; ?>" method="post">
                    <table style="margin:20px auto;">
                        <tr>
                            <td>Kode Produk</td>
                            <input type="hidden" name="id" value="<?php echo $u->id ?>">
                            <td><input type="text" name="kode" value="<?php echo $u->kode ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama Produk</td>
                            <td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
                        </tr>
                        <tr>
                            <td>Stok Produk</td>
                            <td><input type="number" name="stok" value="<?php echo $u->stok ?>"></td>
                        </tr>
                        <tr>
                            <td>Harga Beli Produk</td>
                            <td><input type="number" name="harga_beli" value="<?php echo $u->harga_beli ?>"></td>
                        </tr>
                        <tr>
                            <td>Harga Jual Produk</td>
                            <td><input type="number" name="harga_jual" value="<?php echo $u->harga_jual ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Produk</td>
                            <td><input type="number" name="jenis_id" value="<?php echo $u->jenis_id ?>"></td>
                        </tr>
                        <tr>
                            <td>Deskripsi Produk</td>
                            <td><input type="text" name="deskripsi" value="<?php echo $u->deskripsi ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="simpan"></td>
                        </tr>
                    </table>
                </form>	
                <?php } ?>	
                        
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