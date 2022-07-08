<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project 2</title>
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url('assets2/plugins/fontawesome-free/css/all.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets2/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url('assets2/dist/css/adminlte.min.css')?>">-->
  <link rel="stylesheet" href="<?php echo base_url('assets/css1/css.css')?>">
</head>
<!--<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url('index.php/home');?>"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
  <?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="<?php echo base_url(). 'index.php/users/tambah_aksi'?>" method="post">
        <div class="input-group mb-3">
        <input type="username" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="hidden" name="created_at" value="<?php echo date("Y-m-d H:i:s"); ?>">
        <input type="hidden" name="last_login" value="<?php echo date("Y-m-d H:i:s"); ?>">
        <input type="hidden" name="status" value="1">
          <select  name="role" class="form-control" placeholder="Role User">
          <option value="administrator">administrator</option>
          <option value="public">user</option>
      </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
              I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>
      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
  </div>
</div>
<script src="<?php echo base_url('assets2/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets2/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('assets2/dist/js/adminlte.min.js')?>"></script>
</body>-->
    <body>
        <div class="login-box">
            <div class="card">
                <?php 
                            if($this->session->flashdata('error') !='')
                            {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '</div>';
                            }
                            ?>
                <h2>
                    Registrasi
                </h2>

        <form action="<?php echo base_url(). 'index.php/users/tambah_aksi'?>" method="post">

        <div class="user-box">
            <input type="text" name="username" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="email" name="email" required="">
            <label>Email</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        <div class="role">
            <input type="hidden" name="created_at" value="<?php echo date("Y-m-d H:i:s"); ?>">
            <input type="hidden" name="last_login" value="<?php echo date("Y-m-d H:i:s"); ?>">
                <input type="hidden" name="status" value="1">
                <label >Role</label>
                <select  name="role">
                    <option value="administrator">administrator</option>
                    <option value="public">user</option>
                </select>
                
        </div>
        <button type="submit">Registrasi</button>
        </form>
        <p>
                <a href="<?php echo base_url('index.php/login'); ?>" class="text-center"> <i class="bi bi-person-check"></i>I already have an account</a>
        </p>
        </div>
    </body>
</html>
