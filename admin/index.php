<?php
include 'koneksi.php';
if ($_SESSION['login'] == '') {
    header("location:login.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery De Jandy - Dashboard</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/png" href="../images/icons/icon04.png" />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template-->

    <link href="css/tic-tac.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-sun"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Gallery De' Jandi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="?m=home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="?m=produk">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Produk</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="?m=kategori">
                    <i class="fas fa-globe"></i>
                    <span>Kategori</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <li class="nav-item">
                <a class="nav-link" href="?m=seo">
                    <i class="fas fa-star"></i>
                    <span>SEO</span></a>
            </li>

            <!-- Nav Item - Landing Page -->
            <li class="nav-item">
                <!-- <a class="nav-link" href="http://localhost/GalleryDeJandi/">
                    <i class="fas fa-rocket"></i>
                    <span>Go to Landing Page</span></a> -->
                <a class="nav-link" href="http://gallerydejandi.jongkreatif.com">
                    <i class="fas fa-rocket"></i>
                    <span>Go to Landing Page</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- <marquee behavior="scroll" direction="left">
                        <h3 style="color: dodgerblue;">Selamat Datang di Halaman Admin Gallery De' Jandy</h3>
                    </marquee> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Admin
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="?m=register">
                                    <i class="fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Register
                                </a>
                                <a class="dropdown-item" href="?m=password">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php

                    if (isset($_GET['m'])) {
                        if ($_GET['m'] == 'produk') {
                            include 'produk.php';
                        } else if ($_GET['m'] == 'produk_tambah') {
                            include 'produk_tambah.php';
                        } else if ($_GET['m'] == 'produk_ubah') {
                            include 'produk_ubah.php';
                        } else if ($_GET['m'] == 'kategori') {
                            include 'kategori.php';
                        } else if ($_GET['m'] == 'kategori_tambah') {
                            include 'kategori_tambah.php';
                        } else if ($_GET['m'] == 'kategori_ubah') {
                            include 'kategori_ubah.php';
                        } else if ($_GET['m'] == 'register') {
                            include 'register.php';
                        } else if ($_GET['m'] == 'password') {
                            include 'password.php';
                        } else if ($_GET['m'] == 'seo') {
                            include 'seo.php';
                        } else if ($_GET['m'] == 'home') {
                            include 'home.php';
                        }
                    } else {
                        include 'produk.php';
                    }
                    ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin ingin Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Silahkan Pilih "Logout" jika anda ingin mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="aksi.php?act=logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="../js/jquery.mask.js"></script>

    <script type="text/javascript">
        var check = function() {
            if (document.getElementById('password').value !=
                document.getElementById('re-password').value) {
                document.getElementById('msg-reg').style.color = 'red';
                document.getElementById('msg-reg').innerHTML = 'Password dan Konfirmasi Tidak Sama';
            }

        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            // deklarasi
            var ruang = $("#ruang")[0];
            var ctx = ruang.getContext("2d");
            var lebar = $("#ruang").width();
            var tinggi = $("#ruang").height();

            var cw = 10;
            var tekan;
            var makanan;
            var nilai;

            //membuat cell aray untuk membuat ular
            var array_ular;

            function init() {
                tekan = "right"; //default direction
                create_snake();
                create_makanan(); //membuat makanan untuk ular
                //nilai game
                nilai = 0;

                if (typeof game_loop != "undefined") clearInterval(game_loop);
                game_loop = setInterval(paint, 60);
            }

            init();

            // membuat ular
            function create_snake() {
                // menetapkan jumlah panjang awal ular
                var length = 5; //panjang ular default
                array_ular = [];
                for (var i = length - 1; i >= 0; i--) {
                    //membuat ular horizontal mulai dari arah kiri
                    array_ular.push({
                        x: i,
                        y: 0
                    });
                }
            }

            //membuat makanan untuk ular
            function create_makanan() {
                makanan = {
                    x: Math.round(Math.random() * (lebar - cw) / cw),
                    y: Math.round(Math.random() * (tinggi - cw) / cw)
                };
            }

            //pengaturan
            function paint() {
                // warna background
                ctx.fillStyle = "#ecf0f1";
                ctx.fillRect(0, 0, lebar, tinggi);
                ctx.strokeStyle = "#2c3e50";
                ctx.strokeRect(0, 0, lebar, tinggi);

                //membuat pergerakan untuk ular
                var nx = array_ular[0].x;
                var ny = array_ular[0].y;
                if (tekan == "right") nx++;
                else if (tekan == "left") nx--;
                else if (tekan == "up") ny--;
                else if (tekan == "down") ny++;

                //memeriksa tabrakan
                if (
                    nx == -1 ||
                    nx == lebar / cw ||
                    ny == -1 ||
                    ny == tinggi / cw ||
                    cek_tabrakan(nx, ny, array_ular)
                ) {

                    //restart game
                    init();
                    return;
                }

                //cek jika ular kena makanan/memakan makanan
                if (nx == makanan.x && ny == makanan.y) {

                    var ekor = {
                        x: nx,
                        y: ny
                    };
                    nilai++;

                    //membuat makanan yang baru
                    create_makanan();

                } else {
                    var ekor = array_ular.pop();
                    ekor.x = nx;
                    ekor.y = ny;
                }

                array_ular.unshift(ekor);

                for (var i = 0; i < array_ular.length; i++) {
                    var c = array_ular[i];
                    paint_cell(c.x, c.y);
                }

                paint_cell(makanan.x, makanan.y);

                //membuat penilaian skor
                var nilai_text = "nilai: " + nilai;
                ctx.fillText(nilai_text, 5, tinggi - 5);
            }

            function paint_cell(x, y) {
                ctx.fillStyle = "#1abc9c";
                ctx.fillRect(x * cw, y * cw, cw, cw);
                ctx.strokeStyle = "#ecf0f1";
                ctx.strokeRect(x * cw, y * cw, cw, cw);
            }

            function cek_tabrakan(x, y, array) {
                for (var i = 0; i < array.length; i++) {
                    if (array[i].x == x && array[i].y == y) return true;
                }
                return false;
            }

            //kontrol ular dengan keyboard
            $(document).keydown(function(e) {
                var key = e.which;
                if (key == "37" && tekan != "right") tekan = "left";
                else if (key == "38" && tekan != "down") tekan = "up";
                else if (key == "39" && tekan != "left") tekan = "right";
                else if (key == "40" && tekan != "up") tekan = "down";
            });
        });
    </script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>