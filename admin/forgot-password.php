<?php

require_once("session.php");


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gallery De' Jandi - Forgot Password</title>

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
                                <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                <p class="mb-4">Please enter your email address below
                                    and we'll send you a link to reset your password!</p>
                            </div>
                            <form class="user" action="aksi.php?act=send_email" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Your Email Address">
                                </div>
                                <input name="submit" type="submit" class="btn btn-primary btn-user btn-block" value="Reset Password" />
                                <!-- <button type="submit" name="submit" class=" btn btn-primary btn-user btn-block"> Reset Password</button> -->
                                <!-- <a type="submit" class="btn btn-primary btn-user btn-block">
                                    Reset Password
                                </a> -->
                            </form>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="register.html">Create an Account!</a>
                            </div> -->
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
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
</body>

</html>