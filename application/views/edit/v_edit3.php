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
                <h3 class="card-title"></h3>

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
              <?php foreach($users as $u){ ?>
                <form action="<?php echo base_url(). 'index.php/users/update'; ?>" method="post">
                    <table style="margin:20px auto;">
                        <tr>
                            <td>Username</td>
                            <input type="hidden" name="id" value="<?php echo $u->id ?>">
                            <td><input type="text" name="username" value="<?php echo $u->username ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><input type="text" name="password" value="<?php echo $u->password ?>"></td>
                        </tr>
                        <tr>
                            <td>Pembuatan Akun</td>
                            <td><input type="text" name="created_at" value="<?php echo $u->created_at ?>"></td>
                        </tr>
                        <tr>
                            <td>Terakhir Login</td>
                            <td><input type="text" name="last_login" value="<?php echo $u->last_login ?>"></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><input type="number" min="0"max="1" name="status" value="<?php echo $u->status ?>"></td>
                        </tr>
                        <tr>
                            <td>Role</td>
                            <td><select  name="role">
                                <option value="<?php echo $u->role ?>">administrator</option>
                                <option value="<?php echo $u->role ?>">user</option></td>
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