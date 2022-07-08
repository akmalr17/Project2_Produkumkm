<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('index.php/admin/dashboard');?>" class="brand-link">
      <img src="https://cdn.discordapp.com/attachments/776771319328407552/994482967869136948/umkm.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Sista UMKM STT NF</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://cdn.discordapp.com/attachments/776771319328407552/994482572404981860/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata("username"); ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                UMKM STT Nurul Fikri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/admin/jenis_produk'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/admin/suplier'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/admin/pembelian'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembelian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/admin/pesanan'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pesanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('index.php/admin/produk'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a href="<?php echo base_url('index.php/admin/users'); ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Users
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('index.php/login/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Log Out                
              </p>
            </a>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>