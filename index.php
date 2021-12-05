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
	<title>Gallery De' Jandi - Jual Tenun Khas Manggarai</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?= $data["description"] ?>" />
	<meta name="keywords" content="<?= $data["keywords"] ?>" />
	<meta name="author" content="<?= $data["author"] ?>" />
	<meta name="robots" content="<?= ($data["robot_follow"] ? "follow" : "nofollow") ?>, <?= ($data["robot_index"] ? "index" : "noindex") ?> " />
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/icon04.png" />
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

							<!-- <li>
								<a href="blog.html">Blog</a>
							</li> -->

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
	<div id="modal-view" class="wrap-modal1 js-modal1 p-t-60 p-b-20 responsive">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 col-md-8 p-t-60 p-b-30 p-lr-5-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>
				<div class="row">
					<div class="col-md-6 p-b-30">
						<div class="p-l-15 p-r-15 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="wrap-pic-b pos-relative">
									<img src="" id="image" alt="IMG-PRODUCT">

								</div>

							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-6 p-b-30">
						<div class="p-r-10 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14" id="nama_produk">

							</h4>

							<span class="mtext-106 cl2" id="harga">
								Rp.
							</span>

							<div class="bor10 m-t-50 p-t-43 p-b-40">
								<!-- Tab01 -->
								<div class="tab01">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item p-b-10">
											<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
										</li>

										<li class="nav-item p-b-10">
											<a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
										</li>

									</ul>

									<!-- Tab panes -->
									<div class="tab-content p-t-30">
										<!-- - -->
										<div class="tab-pane fade show active" id="description" role="tabpanel">
											<div class="how-pos2 p-lr-15-md">
												<p class="stext-102 cl6" id="deskripsi">

												</p>
											</div>
										</div>

										<!-- - -->
										<div class="tab-pane fade" id="information" role="tabpanel">
											<div class="row">
												<div class="col-12 col-md-12 col-lg-12 m-lr-auto d-flex justify-content-center">
													<ul class="p-lr-28 p-lr-15-sm">
														<li class="flex-w flex-t p-b-7">
															<span class="stext-102 cl3 size-205">
																Length
															</span>

															<span class="stext-102 cl6 size-206" id="panjang">

															</span>
														</li>

														<li class="flex-w flex-t p-b-7">
															<span class="stext-102 cl3 size-205">
																Width
															</span>

															<span class="stext-102 cl6 size-206" id="lebar">

															</span>
														</li>

														<!-- <li class="flex-w flex-t p-b-7">
															<span class="stext-102 cl3 size-205">
																Materials
															</span>

															<span class="stext-102 cl6 size-206">
																60% cotton
															</span>
														</li> -->

													</ul>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>



							<!--  -->
							<!-- <div class="p-t-33">

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">

										<a href="?m=checkout">
											<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
												Add to cart
											</button>
										</a>
									</div>
								</div>
							</div> -->

							<!--  -->
							<!-- <div class="flex-w flex-m p-l-100 p-t-40 respon7">
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
							</div> -->
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
							<a href="https://www.tokopedia.com/gallerydejandi" target="_blank" class="stext-107 cl7 hov-cl1 trans-04">
								<img src="images/Tokopedia.svg" height="45" alt="">
							</a>
						</li>

						<li class="p-b-10">
							<a href="https://shopee.co.id/gallery_dejandi" target="_blank" class="stext-107 cl7 hov-cl1 trans-04">
								<img src="images/Shopee.svg" height="27" alt="">
							</a>
						</li>


					</ul>
				</div>

				<div class="col-12 col-lg-4 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Store
					</h4>

					<p class="stext-107 cl7 size-201">
						Gang Kantor SAR, Cowang Dereng, Labuan Bajo, Nusa Tenggara Timur.
					</p>

					<p class="stext-107 cl7 size-201 p-t-20">
						WhatsApp : (+62) 812-3850-6615
					</p>

					<div class="p-t-27">
						<a href="https://www.facebook.com/gallery.dejandi" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://www.instagram.com/gallery_dejandi" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="https://wa.me/c/6281238506615" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-whatsapp"></i>
						</a>

						<!-- <a href="https://api.whatsapp.com/send?phone=6281238506615" target="_blank" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-whatsapp"></i>
						</a> -->

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
						<!-- Link back to Colorlib can' t be removed. Template is licensed under CC BY 3.0. -->
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

		<a href="https://api.whatsapp.com/send?phone=6281238506615" target="_blank">
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
				phone = '6281238506615',
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


	<script>
		$(document).ready(function() {
			$(document).on('click', '#quick-view', function() {
				var id_produk = $(this).data('id');
				var nama = $(this).data('nama');
				var kategori = $(this).data('kategori');
				var gambar = $(this).data('image');
				var panjang = $(this).data('pjg');
				var lebar = $(this).data('lbr');
				var harga = $(this).data('harga');
				var deskripsi = $(this).data('deskripsi');
				$('#id_produk').text(id_produk);
				$('#nama_produk').text(nama);
				$('#nama_kategori').text(kategori);
				$('#image').attr("src", "asset/foto-produk/" + gambar);
				$('#image2').attr("href", "asset/foto-produk/" + gambar);
				$('#harga').text(harga);
				$('#panjang').text(panjang);
				$('#lebar').text(lebar);
				$('#deskripsi').text(deskripsi);

			})
		})
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
	<script src="js/jquery.mask.js"></script>
	<script src="js/main.js"></script>

</body>

</html>