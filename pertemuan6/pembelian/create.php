<?php
require_once '../dbkoneksi.php';
?>

<form method="POST" action="proses.php">
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nomor" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nomor" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">Produk_ID</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                        <?php
                        $sqljenis = "SELECT * FROM produk";
                        $rsjenis = $dbh->query($sqljenis);
                        ?>
                    </div>
                </div>
                <select id="produk_id" name="produk_id" class="custom-select">
                    <?php
                    foreach ($rsjenis as $rowjenis) {
                    ?>
                        <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['kode'] ?></option>
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
    </div>
    <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="jumlah" name="jumlah" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                        <?php
                        $sqlharga_jual = "SELECT * FROM produk";
                        $rsharga_jual = $dbh->query($sqlharga_jual);
                        ?>
                    </div>
                </div>
                <?php
                foreach ($rsharga_jual as $rowharga_jual) {
                ?>
                    <input id="harga" name="harga" type="text" class="form-control" value="<?= $rowharga_jual['harga_jual'] ?>">
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">Vendor ID</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                        <?php
                        $sqljenis = "SELECT * FROM vendor";
                        $rsjenis = $dbh->query($sqljenis);
                        ?>
                    </div>
                </div>
                <select id="vendor_id" name="vendor_id" class="custom-select">
                    <?php
                    foreach ($rsjenis as $rowjenis) {
                    ?>
                        <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nomor'] ?></option>
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
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
        </div>
    </div>
</form>