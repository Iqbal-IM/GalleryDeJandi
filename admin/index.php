<?php
include 'koneksi.php';
if ($_SESSION['login'] == '') {
    header("location:login.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="style.css" rel="stylesheet" />

    <title>Gallery de Jandi</title>
</head>

<body>

    <div class="wrapper">
        <nav id="navb" class="navbar navbar-expand-md navbar-light fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand" href="">
                    <img src="../img/logoP.png" alt="" style="height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php">Home</a>
                        <a class="nav-link" href="?m=produk">Produk</a>
                        <a class="nav-link" href="?m=kategori">Kategori</a>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?m=register">Register <i class="fa fa-user-plus"></i></a></li>
                                <li><a class="dropdown-item" href="#">Setting <i class="fa fa-wrench"></i></a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="aksi.php?act=logout">Logout <i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav>

        <div class="content">
            <?php

            if (isset($_GET['m'])) {
                if ($_GET['m'] == 'produk') {
                    include 'produk.php';
                } else if ($_GET['m'] == 'produk_tambah') {
                    include 'produk_tambah.php';
                } else if ($_GET['m'] == 'produk_ubah') {
                    include 'produk_ubah.php';
                } else if ($_GET['m'] == '') {
                    include 'produk_ubah.php';
                } else if ($_GET['m'] == 'kategori') {
                    include 'kategori.php';
                } else if ($_GET['m'] == 'kategori_tambah') {
                    include 'kategori_tambah.php';
                } else if ($_GET['m'] == 'kategori_ubah') {
                    include 'kategori_ubah.php';
                } else if ($_GET['m'] == 'register') {
                    include 'register.php';
                }
            } else {
                include 'home.php';
            }
            ?>
        </div>

    </div>



</body>

</html>