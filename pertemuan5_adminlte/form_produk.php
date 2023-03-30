<?php
include_once 'templates/head.php';
include_once 'templates/sidebar.php';
include_once 'templates/navbar.php';
require_once 'dbkoneksi.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Selamat Datang di Form Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Data Produk</li>
            <li class="breadcrumb-item active">Form Produk</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a class="btn btn-danger" href="list_produk.php" role="button">Cancel</a>

              <!-- <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> -->
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="proses_produk.php">
              <div class="card-body">
                <div class="form-group row">
                  <label for="kode" class="col-4 col-form-label">Kode</label>
                  <div class="col-8">
                    <div class="input-group">
                      <!-- <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-anchor"></i>
                        </div>
                      </div> -->
                      <input id="kode" name="kode" type="text" class="form-control" value="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-4 col-form-label">Nama Produk</label>
                  <div class="col-8">
                    <div class="input-group">
                      <!-- <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-adjust"></i>
                        </div>
                      </div> -->
                      <input id="nama" name="nama" type="text" class="form-control" value="">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
                  <div class="col-8">
                    <div class="input-group">
                      <!-- <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-arrow-circle-o-left"></i>
                        </div>
                      </div> -->
                      <input id="harga_beli" name="harga_beli" value="" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="stok" class="col-4 col-form-label">Stok</label>
                  <div class="col-8">
                    <div class="input-group">
                      <!-- <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-arrow-circle-up"></i>
                        </div>
                      </div> -->
                      <input id="stok" name="stok" value="" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
                  <div class="col-8">
                    <div class="input-group">
                      <!-- <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-arrow-circle-right"></i>
                        </div>
                      </div> -->
                      <input id="min_stok" name="min_stok" value="" type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
                  <div class="col-8">
                    <?php
                    $sqljenis = "SELECT * FROM jenis_produk";
                    $rsjenis = $dbh->query($sqljenis);
                    ?>
                    <select id="jenis" name="jenis" class="custom-select">
                      <?php
                      foreach ($rsjenis as $rowjenis) {
                      ?>
                        <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                      <?php
                      }
                      ?>
                      <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-4 col-8">
                    <input type="submit" name="proses" type="submit" class="btn btn-success" value="Simpan" />
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </form>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->

<?php
include_once 'templates/footer.php';
?>