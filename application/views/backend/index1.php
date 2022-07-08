<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Project 2</title>
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
              <li class="breadcrumb-item active">Jenis Produk</li>
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
                <h3 class="card-title">Jenis Produk</h3>

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
                  <div class="">
                      <h3 class="text-center">Daftar Jenis Produk Di UMKM STT Nurul Fikri</h3>
                      
                      <table class="table table-sm">
                          <thead>
                              <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Jenis Produk</th>
                                  <th scope="col"></th>

                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                            $no = 1;
                            foreach($jenis_produk as $u){ 
                            ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $u->nama ?></td>
                              <td>
                                    <?php echo anchor('jenis_produk/hapus/'.$u->id,'<i class="bi bi-trash3"></i>Hapus'); ?> 
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                  </div>
                </div>
                <div class="card-footer">
                <div class="d-grid gap-2 d-md-block">
                <a href="<?php echo base_url('index.php/jenis_produk/tambah');?>"><button class="btn btn-success" type="button">Tambah Kategori</button></a>
              </div>
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