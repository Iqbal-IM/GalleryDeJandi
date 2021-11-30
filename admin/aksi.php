<?php
include 'koneksi.php';
$action = $_GET['act'];


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

    // hapus foto produk

    if ($gambar != "") {
        $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
        $row = $query->fetch_assoc();

        $foto = $row['gambar'];

        if (file_exists("../asset/foto-produk/$foto")) {
            unlink("../asset/foto-produk/$foto");
        }
    }

    //  Update foto  dan produk

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
    $nama_kategori = $_POST['nama_kategori'];

    mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori)
	VALUES ('$nama_kategori')");

    header("location:index.php?m=kategori");

    // Ubah Kategori

} else if ($action == 'kategori_ubah') {
    $nama_kategori = $_POST['nama_kategori'];

    mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$_GET[id_kategori]'");

    header("location:index.php?m=kategori");

    // Hapus Kategori

} else if ($action == 'kategori_hapus') {
    $nama_kategori = $_POST['nama_kategori'];

    mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$_GET[id_kategori]'");
    header("location:index.php?m=kategori");

    // Login

} else if ($action == 'login') {
    $email = $_POST['user'];
    $password = $_POST['pass'];

    $passwordhash = hash("sha256", $password);

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE user='$email'");
    $data = mysqli_fetch_assoc($query);

    if (is_null($data)) {

        echo "<script>alert('Email yang anda masukkan tidak Terdaftar!');window.location='login.php'</script>";
    } else if ($data['pass'] != $passwordhash) {

        echo "<script>alert('Password yang Anda Masukkan Salah!');window.location='login.php'</script>";
    } else {

        session_start();

        $_SESSION['login'] = $data;
        header("location: index.php");
    }


    // Register

} else if ($action == 'password') {

    $email = $_SESSION['login']->user;

    $passwordhash1 = hash("sha256", $_POST['pass1']);

    $query = mysqli_query($koneksi, "SELECT * FROM admin WHERE pass='$passwordhash1'");
    $data = mysqli_fetch_array($query);

    if ($data) {

        $passwordbaru = $_POST['pass2'];
        $confirmpass = $_POST['pass3'];

        if ($passwordbaru == $confirmpass) {

            $passok = hash("sha256", $confirmpass);
            $ubah = mysqli_query($koneksi, "UPDATE admin SET pass='$passok' WHERE id_admin = '$data[id_admin]'");

            if ($ubah) {
                echo "<script>alert('Password Berhasil diubah!');document.location='index.php?m=password'</script>";
            }
        } else {
            echo "<script>alert('Password Baru dan Konfirmasi Password Tidak Sesuai');document.location='index.php?m=password'</script>";
        }
    } else {
        echo "<script>alert('Password Lama Salah!');document.location='index.php?m=password'</script>";
    }


    // if ($pass1 != $pass_asli) {
    //     // header("location:index.php?m=password&success=1");
    //     echo "<script>alert('Password Lama Salah!');window.location='index.php?m=password'</script>";
    // } else if ($pass2 != $pass3) {

    //     // header("location:index.php?m=password&success=2");
    //     echo "<script>alert('Konfirmasi Password Baru salah!');window.location='index.php?m=password'</script>";
    // } else {
    //     mysqli_query($koneksi, "UPDATE admin SET pass='$passwordhash2' WHERE id_admin='$id_admin'");
    //     header("location:index.php?m=password");
    // }
} else if ($action == 'register') {
    $nama = $_POST['nama'];
    $user = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];

    $passwordhash = hash("sha256", $password);

    $query = mysqli_query($koneksi, "INSERT INTO admin (nama, user, pass) VALUES ('$nama', '$user', '$passwordhash')");

    header("location: index.php?m=produk");

    // Konfigurasi SEO

} else if ($action == 'seo') {
    $description = $_POST['description'];
    $keywords = $_POST['keywords'];
    $author = $_POST['author'];
    $robot_index = $_POST['robot_index'];
    $robot_follow = $_POST['robot_follow'];

    $query = mysqli_query($koneksi, "SELECT * FROM seo");
    $data = mysqli_fetch_assoc($query);

    if (!is_null($data)) {

        $update = mysqli_query($koneksi, "UPDATE seo SET description='$description', keywords = '$keywords', author = '$author', robot_follow = $robot_follow, robot_index = $robot_index");
    } else {
        $insert  = mysqli_query($koneksi, "INSERT INTO seo (description, keywords, author, robot_index, robot_follow) VALUES ('$description', '$keywords', '$author', '$robot_follow', '$robot_index') ");
    }

    header("location: index.php?m=seo");

    // Logout

} else if ($action == 'logout') {
    unset($_SESSION['login']);
    header("location:login.php");
}
