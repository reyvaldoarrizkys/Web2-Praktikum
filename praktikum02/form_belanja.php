<?php

$customer = $_POST["cust"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

//total harga beli
$total_harga;

//case
if ($produk === "TV") {
    $total_harga = $jumlah * 4200000;
} elseif ($produk === "kulkas") {
    $total_harga = $jumlah * 3100000;
} elseif ($produk === "mesincuci") {
    $total_harga = $jumlah * 3800000;
} else {
    $total_harga =  "";
}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <h1>Belanja Online</h1>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="form_belanja.php">
                    <div class="form-group row">
                        <label for="cust" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="cust" name="cust" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas">
                                <label for="produk_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin_cuci">
                                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Daftar Harga <span class="badge badge-light badge-pill">3</span></a>
                    <div class="list-group-item">
                        TV : 4.200.000
                    </div>
                    <div class="list-group-item">
                        Kulkas : 3.100.000
                    </div>
                    <div class="list-group-item">
                        Mesin Cuci : 3.800.000
                    </div>
                    <a href="#" class="list-group-item list-group-item-action active justify-content-between">Daftar Dapat Berubah Setiap Saat </a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <h1>Daftar Hasil Belanja</h1>
        <table class="table">
            <thead class="thead" style="text-align: center;">
                <tr>
                    <th colspan="2" scope="col">Hasil Belanja</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="col">Nama</th>
                    <th><?= $customer; ?></th>
                </tr>
                <tr>
                    <th scope="col">Produk Pilihan</th>
                    <th><?= $produk; ?></th>
                </tr>
                <tr>
                    <th scope="col">Jumlah Beli</th>
                    <th><?= $jumlah; ?></th>
                </tr>
                <tr>
                    <th scope="col">Total Belanja</th>
                    <th><?= $total_harga; ?></th>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>