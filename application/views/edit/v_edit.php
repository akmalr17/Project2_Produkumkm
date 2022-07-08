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
              <li class="breadcrumb-item active">Suplier</li>
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
                <h3 class="card-title">Tambah Suplier</h3>

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
              <?php foreach($suplier as $u){ ?>
                <form action="<?php echo base_url(). 'index.php/suplier/update'; ?>" method="post">
                    <table style="margin:20px auto;">
                        <tr>
                            <td>Nama Suplier</td>
                            <td>
                            <input type="hidden" name="id" value="<?php echo $u->id ?>">
					                  <input type="text" name="nama" value="<?php echo $u->nama ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Kota Suplier</td>
                            <td><input type="text" name="kota" value="<?php echo $u->kota ?>"></td>
                        </tr>
                        <tr>
                            <td>Kontak Suplier</td>
                            <td><input type="text" name="kontak" value="<?php echo $u->kontak ?>"></td>
                        </tr>
                        <tr>
                            <td>alamat Suplier</td>
                            <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
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