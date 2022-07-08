<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
              <li class="breadcrumb-item active">Users</li>
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
                <h3 class="card-title">Data User</h3>

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
              <h3 class="text-center">Daftar Users Di UMKM STT Nurul Fikri</h3>
              </div>
              <table class="table table-sm">
                          <thead>
                              <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Username</th>
                                  <th scope="col">Password</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Dibuat pada</th>
                                  <th scope="col">Terakhir Login</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Role</th>
                                  

                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                            $no = 1;
                            foreach ($users as $u ){
                            ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $u->username ?></td>
                              <td><?php echo $u->password ?></td>
                              <td><?php echo $u->email ?></td>
                              <td><?php echo $u->created_at ?></td>
                              <td><?php echo $u->last_login ?></td>
                              <td><?php echo $u->status ?></td>
                              <td><?php echo $u->role ?></td>
                              <td>
                              <?php echo anchor('users/edit/'.$u->id,'<i class="bi bi-pencil"></i>Edit'); ?>
                                          <?php echo anchor('users/hapus/'.$u->id,'<i class="bi bi-trash3"></i>Hapus'); ?>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                      </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer ">
              <a href="<?php echo base_url('index.php/users/tambah');?>"><button class="btn btn-success" type="button">Tambah Users</button></a>
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