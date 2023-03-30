<?php
include_once 'templates/head.php';
include_once 'templates/sidebar.php';
include_once 'templates/navbar.php';
require_once 'dbkoneksi.php';
?>
<?php
$_idedit = $_GET['idedit'];
if (!empty($_idedit)) {
    // edit
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
} else {
    // new data
    $row = [];
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Selamat Datang di Update Pelanggan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Pelanggan</li>
                        <li class="breadcrumb-item active">Update Pelanggan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-danger" href="list_pelanggan.php" role="button">Cancel</a>

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
                        <form method="POST" action="proses_pelanggan.php">
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
                                            <input id="kode" name="kode" type="text" class="form-control" value="<?= $row['kode'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <!-- <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-adjust"></i>
                                                </div>
                                            </div> -->
                                            <input id="nama" name="nama" type="text" class="form-control" value="<?= $row['nama'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <!-- <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-arrow-circle-o-left"></i>
                                                </div>
                                            </div> -->
                                            <!-- <input id="jk" name="jk" value="" type="radio" class="form-control"> -->
                                            <!-- <input id="jk" name="jk" value="L" type="radio" class="form-control">Laki Laki
                                <input id="jk" name="jk" value="P" type="radio" class="form-control">Perempuan -->
                                            <!-- <input type="radio" name="jk" value="L" <?php if ($row['jk'] == 'L') echo 'checked' ?>>L
                                            <input type="radio" name="jk" value="P" <?php if ($row['jk'] == 'P') echo 'checked' ?>>P -->
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="jk" name="jk" value="L" type="radio" <?php if ($row['jk'] == 'L') echo 'checked' ?>>
                                                <label class="form-check-label">Laki Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="jk" name="jk" value="P" type="radio" <?php if ($row['jk'] == 'P') echo 'checked' ?>>
                                                <label class="form-check-label">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <!-- <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-arrow-circle-up"></i>
                                                </div>
                                            </div> -->
                                            <input id="tmp_lahir" name="tmp_lahir" value="<?= $row['tmp_lahir'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <!-- <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </div>
                                            </div> -->
                                            <input id="tgl_lahir" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <!-- <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fa fa-arrow-circle-right"></i>
                                                </div>
                                            </div> -->
                                            <input id="email" name="email" value="<?= $row['email'] ?>" type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jenis" class="col-4 col-form-label">Kartu</label>
                                    <div class="col-8">
                                        <?php
                                        $sqljenis = "SELECT * FROM kartu";
                                        $rsjenis = $dbh->query($sqljenis);
                                        ?>
                                        <select id="kartu_id" name="kartu_id" class="custom-select">
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
                                        <?php
                                        $button = (empty($_idedit)) ? "Simpan" : "Update";
                                        ?>
                                        <input type="submit" name="proses" type="submit" class="btn btn-success" value="<?= $button ?>" />
                                        <input type="hidden" name="idedit" value="<?= $_idedit ?>" />
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