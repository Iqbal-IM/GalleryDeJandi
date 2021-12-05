<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gallery De' Jandi - Reset Password</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/png" href="../images/icons/icon04.png" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5" style="max-width: 500px; margin:auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                            </div>

                            <?php

                            if ($_GET['key'] && $_GET['reset']) {

                                include 'koneksi.php';

                                $email = $_GET['key'];
                                $pass = $_GET['reset'];

                                $select = mysqli_query($koneksi, "SELECT user,pass FROM admin WHERE user='$email' AND pass='$pass'");
                                if (mysqli_num_rows($select) == 1) {

                            ?>

                                    <form class="user" action="" method="POST">

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" onkeyup='check();' placeholder="Input Your New Password">
                                            <input type="hidden" name="user" value="<?php echo $email; ?>">
                                            <input type="hidden" name="pass" value="<?php echo $pass; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="confirm_password" id="confirm_password" onkeyup='check();' placeholder="Confirm Your New Password">
                                        </div>

                                        <input name="submit_password" type="submit" class="btn btn-primary btn-user btn-block" value="Reset Password" />

                                    </form>

                            <?php

                                } else {
                                    echo "Data Tidak ditemukan";
                                }
                            }

                            ?>


                            <?php
                            if (isset($_POST['submit_password'])) {
                                include('koneksi.php');
                                $email = $_POST['user'];
                                $pass = $_POST['password'];

                                $passhash = hash("sha256", $pass);

                                $select = mysqli_query($koneksi, "UPDATE admin SET pass='$passhash' WHERE user='$email'");
                                if ($select) {
                                    echo "<script> alert('Reset password berhasil'); window.location ='login.php'; </script>"; //jika pesan terkirim

                                } else {
                                    echo "<script>alert('Gagal Menyimpan '); window.location ='login.php';</script>";
                                }
                            }
                            ?>
                            <hr>

                            <span id='message'></span>

                            <!-- <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password dan Konfirmasi Sama';
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password dan Konfirmasi Tidak Sama';
            }
        }
    </script>
</body>

</html>