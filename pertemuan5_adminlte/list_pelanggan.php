<?php
include_once 'templates/head.php';
include_once 'templates/sidebar.php';
include_once 'templates/navbar.php';
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pelanggan";
$rs = $dbh->query($sql);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang di Data Pelanggan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Pelanggan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-success" href="form_pelanggan.php" role="button">Create Pelanggan</a>

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
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Email</th>
                                        <th>Kartu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor  = 1;
                                    foreach ($rs as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $row['kode'] ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['jk'] ?></td>
                                            <td><?= $row['tmp_lahir'] ?></td>
                                            <td><?= $row['tgl_lahir'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['kartu_id'] ?></td>
                                            <td>
                                                <a class="btn btn-primary" href="view_pelanggan.php?id=<?= $row['id'] ?>">View</a>
                                                <a class="btn btn-primary" href="edit_pelanggan.php?idedit=<?= $row['id'] ?>">Edit</a>
                                                <a class="btn btn-primary" href="delete_pelanggan.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
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