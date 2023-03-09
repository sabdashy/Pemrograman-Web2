<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <span class="badge badge-default">
                    <h4>Belajar Online</h4>
                </span>
                <hr>
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="Masukan Nama Anda" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS" required="required">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="list-group">
                    <div href="#" class="list-group-item list-group-item-action active">Daftar Harga</div>
                    <div class="list-group-item">
                        TV : 4.200.000
                    </div>
                    <div class="list-group-item">
                        KULKAS : 3.100.000
                    </div>
                    <div class="list-group-item">
                        MESIN CUCI : 3.800.000
                    </div>
                </div>
                <div href="#" class="list-group-item list-group-item-action active justify-content-between">
                    Harga Dapat Berubah Setiap Saat
                </div>
            </div>
        </div>
        <hr>
        <div>
            <?php
            if (isset($_POST['submit'])) {
                $customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jumlah = $_POST['jumlah'];
                if ($produk == 'TV') {
                    $total = 4200000 * $jumlah;
                } elseif ($produk == 'KULKAS') {
                    $total = 3100000 * $jumlah;
                } elseif ($produk == 'MESIN CUCI') {
                    $total = 3800000 * $jumlah;
                }
                echo 'Nama Customer : ' . $customer . '<br>';
                echo 'Produk Pilihan : ' . $produk . '<br>';
                echo 'Jumlah Beli : ' . $jumlah . '<br>';
                echo 'Total Belanja : Rp.' . $total . '<br>';
            } else {
                echo 'isi data terlebih dahulu';
            }
            ?>
        </div>
    </div>
</body>

</html>