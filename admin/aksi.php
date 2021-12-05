<?php
include 'koneksi.php';
$action = $_GET['act'];


if ($action == 'produk_tambah') {
    $nama = $_POST['nama_produk'];
    $id_kategori = $_POST['id_kategori'];
    $harga = $_POST['harga'];
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $gambar = $_FILES['gambar'];
    $deskripsi = $_POST['deskripsi'];

    move_uploaded_file($gambar['tmp_name'], '../asset/foto-produk/' . $gambar['name']);

    mysqli_query($koneksi, "INSERT INTO produk (nama_produk, id_kategori, harga, panjang, lebar, gambar, deskripsi)
	VALUES ('$nama', '$id_kategori', '$harga', '$panjang', '$lebar', '$gambar[name]','$deskripsi')") or die(mysqli_error($koneksi));

    header("location:index.php?m=produk");

    // Ubah Produk

} else if ($action == 'produk_ubah') {
    $nama = $_POST['nama_produk'];
    $id_kategori = $_POST['id_kategori'];
    $harga = $_POST['harga'];
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
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
        mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', id_kategori='$id_kategori', harga='$harga', panjang='$panjang', lebar='$lebar', gambar='$gambar', deskripsi='$deskripsi' WHERE id_produk='$_GET[id_produk]'");
    } else {

        mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', id_kategori='$id_kategori', harga='$harga', panjang='$panjang', lebar='$lebar', deskripsi='$deskripsi' WHERE id_produk='$_GET[id_produk]'");
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


    // Register

} else if ($action == 'register') {
    $nama = $_POST['nama'];
    $user = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['re-password'];

    $passwordhash = hash("sha256", $password);

    if ($repassword != $password) {
        echo "<script>alert('Password dan Konfirmasi Password tidak sesuai!');document.location='index.php?m=register'</script>";
    } else {

        $query = mysqli_query($koneksi, "INSERT INTO admin (nama, user, pass) VALUES ('$nama', '$user', '$passwordhash')");

        header("location: index.php?m=produk");
    }


    // Konfigurasi SEO

} else if ($action == 'send_email') {

    $email = $_POST['email'];

    $select = mysqli_query($koneksi, "SELECT user, pass FROM admin WHERE user='$email'");
    if (mysqli_num_rows($select) == 1) {
        while ($row = mysqli_fetch_array($select)) {
            $email = $row['user'];

            $pass = $row['pass'];
        }
        //$link="<a href='localhost:8080/phpmailer/reset_pass.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
        require_once('../phpmail/class.phpmailer.php');
        require_once('../phpmail/class.smtp.php');
        $mail = new PHPMailer();

        $body      = "Klik link berikut untuk reset Password, <a href='http://gallerydejandi.jongkreatif.com/admin/reset-password.php?reset=$pass&key=$email'>$pass<a>"; //isi dari email

        // $body      = "Klik link berikut untuk reset Password, <a href='http://localhost/GalleryDeJandi/admin/reset-password.php?reset=$pass&key=$email'>$pass<a>"; //isi dari email

        // $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
        // enable SMTP authentication
        $mail->SMTPDebug  = 1;
        $mail->SMTPAuth = true;
        // GMAIL username
        $mail->Username = "reichskanzler97@gmail.com";
        // GMAIL password
        $mail->Password = "holocaust";
        $mail->SMTPSecure = "ssl";
        // sets GMAIL as the SMTP server
        $mail->Host = "smtp.gmail.com";
        // set the SMTP port for the GMAIL server
        $mail->Port = "465";
        $mail->From = 'NoReply';
        $mail->FromName = 'no_reply';

        $email = $_POST['email'];

        $mail->AddAddress($email, 'User Sistem');
        $mail->Subject  =  'Reset Password';
        $mail->IsHTML(true);
        $mail->MsgHTML($body);
        if ($mail->Send()) {
            echo "<script> alert('Link reset password telah dikirim ke email anda, Cek email untuk melakukan reset'); window.location ='forgot-password.php'; </script>"; //jika pesan terkirim

        } else {
            echo "Mail Error - >" . $mail->ErrorInfo;
        }
    } else {
        echo "<script> alert('Email anda tidak terdaftar di sistem'); window.location ='forgot-password.php'; </script>"; //jika pesan terkirim

    }



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

    // // Start session
    // session_start();

    // // Menghapus semua session yang telah didefinisikan
    // session_destroy();

    // // Mengarahkan menuju halaman login

    // header("location: login.php");

    unset($_SESSION['login']);
    header("location:login.php");
}
