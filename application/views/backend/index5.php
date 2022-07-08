<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Informasi Saldo</title>
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
                <h3 class="card-title">Data Produk</h3>

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
              <h3 class="text-center">Daftar Produk Di UMKM STT Nurul Fikri</h3>
              </div>
              <table class="table table-sm">
                          <thead>
                              <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Kode Produk</th>
                                  <th scope="col">Nama Produk</th>
                                  <th scope="col">Stok Produk</th>
                                  <th scope="col">Harga Beli Produk</th>
                                  <th scope="col">Harga Jual Produk</th>
                                  <th scope="col">Foto Produk</th>
                                  <th scope="col">Jenis Produk</th>
                                  <th scope="col">Deskripsi Produk</th>
                                  

                              </tr>
                          </thead>
                          <tbody>
                          <?php 
                            $no = 1;
                            foreach($produk as $u){ 
                            ?>
                            <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $u->kode ?></td>
                              <td><?php echo $u->nama ?></td>
                              <td><?php echo $u->stok ?></td>
                              <td><?php echo $u->harga_beli ?></td>
                              <td><?php echo $u->harga_jual ?></td>
                              <td >

                              <?php
                                $filegambar = base_url('/uploads/'.$u->foto);
                                echo $filegambar;
                                $array = get_headers($filegambar);
                                $string = $array[0];
                                if(strpos($string,"200"))
                                {
                                  echo '<br> url exits';
                                  echo '<br> <img src="'.$filegambar.'" alt="foto" width=100/>';
                                }else{
                                  echo '<br> url does not exits';
                                  echo '<br> <img src="'.base_url('/uploads/noimage.jpg').'" alt="foto"/ width="100px" height="100px">';
                                }
                              ?>
                                <?php 
                                  echo form_open_multipart('produk/do_upload');
                                ?>
                                <input type="hidden" name="kode" value="<?=$u->kode?>"/>
                                <input type="file" name="foto" size="20"/>
                                <input type="submit" value="upload" />
                                <?php 
                                  echo form_close();
                                  ?>
                            </td>
                              <td><?php echo $u->jenis_id ?></td>
                              <td><?php echo $u->deskripsi ?></td>
                              <td>
                              <?php echo anchor('produk/edit/'.$u->id,'<i class="bi bi-pencil"></i>Edit'); ?>
                                          <br><?php echo anchor('produk/hapus/'.$u->id,'<i class="bi bi-trash3"></i>Hapus'); ?>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                      </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer ">
              <a href="<?php echo base_url('index.php/produk/tambah');?>"><button class="btn btn-success" type="button">Tambah Produk</button></a>
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