<?php
include_once 'templates/head.php';
include_once 'templates/sidebar.php';
include_once 'templates/navbar.php';
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang di View Pelanggan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Pelanggan</li>
                        <li class="breadcrumb-item active">View Pelanggan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="list_pelanggan.php" role="button">Back</a>

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
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td><?= $row['id'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kode</td>
                                        <td><?= $row['kode'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pelanggan</td>
                                        <td><?= $row['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><?= $row['jk'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td><?= $row['tmp_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td><?= $row['tgl_lahir'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?= $row['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kartu</td>
                                        <td><?= $row['kartu_id'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.card-body -->
                        </div>
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