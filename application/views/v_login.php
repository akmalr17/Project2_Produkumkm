<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url('assets2/plugins/fontawesome-free/css/all.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets2/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo base_url('assets2/dist/css/adminlte.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css1/css.css')?>">
</head>
<!--<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url('index.php/home');?>"><b>Admin</b>LTE</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="<?php echo base_url('index.php/login/cek_login'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="username" name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="bi bi-person-fill"></span>
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="<?php echo base_url('index.php/users/tambah');?>" class="btn btn-block btn-danger">
        <i class="bi bi-box-arrow-in-right"></i></i> Register
        </a>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url('assets2/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets2/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?php echo base_url('assets2/dist/js/adminlte.min.js')?>"></script>
</body>-->


    <body>
      <div class="login-box">
        <h2>
          Login
        </h2>

        <form action="<?php echo base_url('index.php/login/cek_login'); ?>" method="post">

          <div class="user-box">
            <input type="text" name="username" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
            <button type="submit" value="Login">LogIn</button>
        </form>
        <p>
            <a href="<?php echo base_url('index.php/users/tambah');?>" class="text-center"> <i class="bi bi-pencil-square"></i> Register</a>
            <br>
            <a href="<?php echo base_url('index.php/home/index'); ?>" class="text-center"> <i class="bi bi-house-door"></i> Back To home</a>
        </p>
      </div>
    </body>
</html>
