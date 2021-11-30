<?php
include 'admin/koneksi.php';

$select = mysqli_query($koneksi, "SELECT * FROM seo");

$data = mysqli_fetch_assoc($select);

if (is_null($data)) {
	$data["description"] = "";
	$data["keywords"] = "";
	$data["author"] = "";
	$data["robot_follow"] = "1";
	$data["robot_index"] = "1";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Gallery De Jandy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $data["description"] ?>" />
	<meta name="keywords" content="<?= $data["keywords"] ?>" />
	<meta name="author" content="<?= $data["author"] ?>" />
	<meta name="robots" content="<?= ($data["robot_follow"] ? "follow" : "nofollow") ?>, <?= ($data["robot_index"] ? "index" : "noindex") ?> " />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->


	<!-- <script type="text/javascript">
		function myFunction() {
			var a = document.getElementById("kategori").value;

			$.ajax({
				url: "showproduct.php",
				method: "POST",
				data: {
					id: a
				},
				success: function(data) {
					$("#ans").html(data);
				}
			})
		}
	</script> -->
</head>

<body class="animisition">

	<!-- Header -->
	<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar">

					</div>

					<div class="right-top-bar flex-w h-full">

						<a href="admin/index.php" class="flex-c-m trans-04 p-lr-25">
							My Account
						</a>

					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop how-shadow1">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="index.php" class="logo">
						<img src="images/icons/logo-jandi.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="?m=home">Home</a>
							</li>

							<li class="active-menu">
								<a href="?m=product">Product</a>
							</li>

							<li>
								<a href="?m=about">About</a>
							</li>

							<li>
								<a href="?m=contact">Contact</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>
						<div style="clear:both"></div>

						<!-- 
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div> -->

						<!-- <a href="admin/index.php" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
							<i class="zmdi zmdi-account"></i>
						</a> -->
					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-jandi.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<a href="admin/index.php" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
					<i class="zmdi zmdi-account"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="?m=home">Home</a>

				</li>

				<li>
					<a href="?m=product">Product</a>
				</li>

				<li>
					<a href="?m=about">About</a>
				</li>

				<li>
					<a href="?m=contact">Contact</a>
				</li>

				<!-- <li>
					<a href="blog.html">Blog</a>
				</li> -->
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input type="hidden" name="m" value="product" />
					<input class="plh3" type="text" value="<?php echo $_GET['q'] ?>" name="q" autocomplete="off" placeholder="Search...">
				</form>
			</div>
		</div>


	</header>


	<!-- Konten -->

	<div class="content">
		<?php
		$mod = $_GET['m'];
		if ($mod == 'product') {
			include 'product.php';
		} else if ($mod == 'product-detail') {
			include 'product-detail.php';
		} else if ($mod == 'about') {
			include 'about.php';
		} else if ($mod == 'contact') {
			include 'contact.php';
		} else if ($mod == 'checkout') {
			include 'checkout.php';
		} else {
			include 'home.php';
		}
		?>
	</div>

	<!-- Modal1 -->
	<div id="mymodal" class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				<div class="row">
					<div class="col-md-6 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>


								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>

							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										<?php $_GET['id_produk'] ?>
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
										<a href="?m=checkout">
											<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
												Add to cart
											</button>
										</a>
									</div>
								</div>
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Categories
					</h4>

					<ul>
						<?php
						$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori ORDER BY id_kategori");
						while ($r = mysqli_fetch_object($query)) { ?>
							<li class="p-b-10">
								<a href="?m=product&id_kategori=<?= $r->id_kategori ?>" class="stext-107 cl7 hov-cl1 trans-04">
									<?= $r->nama_kategori ?>
								</a>
							</li>
						<?php } ?>


					</ul>
				</div>

				<div class="col-12 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Marketplace
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Tokopedia
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shopee
							</a>
						</li>


					</ul>
				</div>

				<div class="col-12 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Head Office
					</h4>

					<p class="stext-107 cl7 size-201">
						Gang Kantor SAR, Cowang Dereng, Labuan Bajo, Nusa Tenggara Timur.
					</p>

					<p class="stext-107 cl7 size-201 p-t-20">
						WhatsApp : (+62) 812-3850-6615
					</p>

					<div class="p-t-27">
						<a href="" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://www.instagram.com/gallery_dejandi" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="https://api.whatsapp.com/send?phone=6281238506615" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-whatsapp"></i>
						</a>

						<a href="mailto:gallerydejandi@gmail.com" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-envelope"></i>
						</a>
					</div>
				</div>

				<!-- <div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
								Subscribe
							</button>
						</div>
					</form>
				</div> -->
			</div>

			<div class="p-t-40">
				<div class="flex-c-m flex-w p-b-18">

					<p class="stext-107 cl6 txt-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
	</footer>


	<!-- Button Whatsapp -->

	<div style="position:fixed;right:20px;bottom:60px;">

		<a href="https://api.whatsapp.com/send?phone=6285333437902">
			<img src="https://hantamo.com/free/whatsapp.svg" class="wa-btn" alt="Whatsapp-Button" height="50" />
		</a>

	</div>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>



	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>

	<!-- Checkout ke WhatsApp -->
	<script>
		$(document).on('click', '.send', function() {
			/* Inputan Formulir */
			var input_product = $("#product").val(),
				input_jumlah = $("#jumlah").val(),
				input_name = $("#name").val(),
				input_email = $("#email").val(),
				input_alamat = $("#alamat").val(),
				input_phone = $("#phone").val(),
				input_catatan = $("#catatan").val();

			/* Pengaturan Whatsapp */
			var walink = 'https://web.whatsapp.com/send',
				phone = '6285333437902',
				text = 'Halo saya ingin memesan Produk : ',
				text_yes = 'Pesanan Anda berhasil terkirim.',
				text_no = 'Isilah formulir terlebih dahulu.';

			/* Smartphone Support */
			if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
				var walink = 'whatsapp://send';
			}

			if (input_name != "" && input_phone != "" && input_product != "") {
				/* Whatsapp URL */
				var checkout_whatsapp = walink + '?phone=' + phone + '&text=' + text + '%0A%0A' +
					'Nama Produk : ' + input_product + '%0A' +
					'Jumlah : ' + input_jumlah + '%0A' +
					'Atas Nama : ' + input_name + '%0A' +
					'Alamat Email : ' + input_email + '%0A' +
					'Alamat Pengiriman : ' + input_alamat + '%0A' +
					'No. Hp : ' + input_phone + '%0A' +
					'Catatan : ' + input_catatan + '%0A';

				/* Whatsapp Window Open */
				window.open(checkout_whatsapp, '_blank');
				document.getElementById("text-info").innerHTML = '<div class="alert alert-success">' + text_yes + '</div>';
			} else {
				document.getElementById("text-info").innerHTML = '<div class="alert alert-danger">' + text_no + '</div>';
			}
		});
	</script>


	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		// $('.js-addwish-b2, .js-addwish-detail').on('click', function(e) {
		// 	e.preventDefault();
		// });

		// $('.js-addwish-b2').each(function() {
		// 	var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
		// 	$(this).on('click', function() {
		// 		swal(nameProduct, "is added to wishlist !", "success");

		// 		$(this).addClass('js-addedwish-b2');
		// 		$(this).off('click');
		// 	});
		// });

		// $('.js-addwish-detail').each(function() {
		// 	var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		// 	$(this).on('click', function() {
		// 		swal(nameProduct, "is added to wishlist !", "success");

		// 		$(this).addClass('js-addedwish-detail');
		// 		$(this).off('click');
		// 	});
		// });

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>