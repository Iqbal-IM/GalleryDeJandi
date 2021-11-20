<?php
include 'koneksi.php';
$action = $_GET['act'];

// Tambah Produk

if ($action == 'produk_tambah') {
    $nama = $_POST['nama_produk'];
    $id_kategori = $_POST['id_kategori'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar'];
    $deskripsi = $_POST['deskripsi'];

    move_uploaded_file($gambar['tmp_name'], '../asset/foto-produk/' . $gambar['name']);

    mysqli_query($koneksi, "INSERT INTO produk (nama_produk, id_kategori, harga, gambar, deskripsi)
	VALUES ('$nama', '$id_kategori', '$harga', '$gambar[name]','$deskripsi')") or die(mysqli_error($koneksi));

    header("location:index.php?m=produk");

    // Ubah Produk

} else if ($action == 'produk_ubah') {
    $nama = $_POST['nama_produk'];
    $id_kategori = $_POST['id_kategori'];
    $harga = $_POST['harga'];
    $gambar = $_FILES['gambar']['name'];
    $deskripsi = $_POST['deskripsi'];

    $lokasifoto =  $_FILES['gambar']['tmp_name'];

    // Hapus foto produk

    if ($gambar != "") {
        $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
        $row = $query->fetch_assoc();

        $foto = $row['gambar'];

        if (file_exists("../asset/foto-produk/$foto")) {
            unlink("../asset/foto-produk/$foto");
        }
    }

    //  Update foto dan produk

    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../asset/foto-produk/$gambar");
        mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', id_kategori='$id_kategori', harga='$harga', gambar='$gambar', deskripsi='$deskripsi' WHERE id_produk='$_GET[id_produk]'");
    } else {

        mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', id_kategori='$id_kategori', harga='$harga', deskripsi='$deskripsi' WHERE id_produk='$_GET[id_produk]'");
    }
    header("location:index.php?m=produk");

    // Hapus Produk

} else if ($action == 'produk_hapus') {

    $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
    $row = $query->fetch_assoc();

    $foto = $row['gambar'];

    if (file_exists("../asset/foto-produk/$foto")) {
        unlink("../asset/foto-produk/$foto");
    }

    mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$_GET[id_produk]'");
    header("location:index.php?m=produk");

    // Tambah Kategori

} else if ($action == 'kategori_tambah') {
    $nama_kategori = $_POST['nama'];

    mysqli_query($koneksi, "INSERT INTO produk (nama_kategori)
	VALUES ('$nama_kategori')");

    header("location:index.php?m=kategori");

    // Ubah Kategori

} else if ($action == 'kategori_ubah') {
    $nama_kategori = $_POST['nama'];

    mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$_GET[id_kategori]'");

    header("location:index.php?m=kategori");

    // Hapus Kategori

} else if ($action == 'kategori_hapus') {
    $nama_kategori = $_POST['nama_kategori'];

    mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori='$_GET[id_kategori]'");
    header("location:index.php?m=kategori");

    header("location:index.php?m=kategori");

    // Login

} else if ($action == 'login') {
    $email = $_POST['user'];
    $password = $_POST['pass'];

    $passwordhash = hash("sha256", $password);

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE user='$_POST[user]'");
    $data = mysqli_fetch_assoc($query);
    if (is_null($data)) {

        echo "<script>alert('Email yang anda masukkan tidak Terdaftar');window.location='login.php'</script>";
    } else if ($data['pass'] != $passwordhash) {

        echo "<script>alert('Password yang Anda Masukkan Salah');window.location='login.php'</script>";
    } else {

        $_SESSION['login'] = $data;
        header("location: index.php");
    }

    // Register
} else if ($action == 'register') {
    $nama = $_POST['nama'];
    $user = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];

    $passwordhash = hash("sha256", $password);

    $query = mysqli_query($koneksi, "INSERT INTO admin (nama, user, pass) VALUES ('$nama', '$user', '$passwordhash')");

    header("location: index.php?m=produk");

    // Logout
} else if ($action == 'logout') {
    unset($_SESSION['login']);
    header("location:login.php");
}
