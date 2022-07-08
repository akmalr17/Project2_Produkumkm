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
            <h1>Project 2 Produk UMKM</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/admin/dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">UMKM STT Nurul Fikri</a></li>
              <li class="breadcrumb-item active">Pesanan</li>
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
                <h3 class="card-title">Data Pesanan</h3>

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
              <h3 class="text-center">Daftar Pesanan Di UMKM STT Nurul Fikri</h3>
              </div>
              <table class="table table-sm">
                          <thead>
                              <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Tanggal Pesanan</th>
                                  <th scope="col">Jumlah Pesanan</th>
                                  <th scope="col">User</th>
                                  <th scope="col">Produk</th>
                                  

                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                            $no = 1;
                            foreach($pesanan as $u){ 
                            ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $u->tanggal ?></td>
                              <td><?php echo $u->jumlah ?></td>
                              <td><?php echo $u->users_id ?></td>
                              <td><?php echo $u->produk_id ?></td>
                              <td>
                                    <?php echo anchor('pesanan/hapus/'.$u->id,'<i class="bi bi-trash3"></i>Hapus'); ?>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                      </table>
              </div>
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