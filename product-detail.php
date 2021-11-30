<?php
$query = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori WHERE id_produk='$_GET[id_produk]'");
$row = mysqli_fetch_object($query);
?>

<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
		<a href="?m=home" class="stext-109 cl8 hov-cl1 trans-04">
			Home
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<a href="?m=product" class="stext-109 cl8 hov-cl1 trans-04">
			Product
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<a href="?m=product&id_kategori=<?= $row->id_kategori ?>" class="stext-109 cl8 hov-cl1 trans-04">
			<?= $row->nama_kategori ?>
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>

		<span class="stext-109 cl4">
			<?= $row->nama_produk ?>
		</span>
	</div>
</div>


<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="wrap-slick3-dots"></div>
						<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

						<div class="slick3 gallery-lb">
							<div class="item-slick3" data-thumb="asset/foto-produk/<?= $row->gambar ?>">
								<div class="wrap-pic-d pos-relative">
									<img src="asset/foto-produk/<?= $row->gambar ?>" alt="IMG-PRODUCT">

									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="asset/foto-produk/<?= $row->gambar ?>">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>


							<!-- <div class="item-slick3" data-thumb="images/product-detail-02.jpg">
								<div class="wrap-pic-w pos-relative">
									<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>

							<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
								<div class="wrap-pic-w pos-relative">
									<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-5 col-sm-12 p-b-30">
				<div class="p-r-50 p-t-5 p-lr-0-lg">
					<h4 class="mtext-105 cl2 js-name-detail p-b-14">
						<?= $row->nama_produk ?>
					</h4>

					<span class="mtext-106 cl2">
						Rp. <?= number_format($row->harga) ?>
					</span>

					<!-- <p class="stext-102 cl3 p-t-23 col-sm-12">
						<?= $row->deskripsi ?>
					</p> -->

					<!--  -->
					<div class="p-t-10">

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
								<div class="tab-content p-t-43">
									<!-- - -->
									<div class="tab-pane fade show active" id="description" role="tabpanel">
										<div class="how-pos2 p-lr-15-md">
											<p class="stext-102 cl6">
												<?= $row->deskripsi ?>
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
															Weight
														</span>

														<span class="stext-102 cl6 size-206">
															0.79 kg
														</span>
													</li>

													<li class="flex-w flex-t p-b-7">
														<span class="stext-102 cl3 size-205">
															Dimensions
														</span>

														<span class="stext-102 cl6 size-206">
															110 x 33 x 100 cm
														</span>
													</li>

													<li class="flex-w flex-t p-b-7">
														<span class="stext-102 cl3 size-205">
															Materials
														</span>

														<span class="stext-102 cl6 size-206">
															60% cotton
														</span>
													</li>

													<li class="flex-w flex-t p-b-7">
														<span class="stext-102 cl3 size-205">
															Color
														</span>

														<span class="stext-102 cl6 size-206">
															Black, Blue
														</span>
													</li>

													<li class="flex-w flex-t p-b-7">
														<span class="stext-102 cl3 size-205">
															Size
														</span>

														<span class="stext-102 cl6 size-206">
															XL, L, M, S
														</span>
													</li>
												</ul>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

						<!-- <div class="flex-w flex-r-m p-b-10">
							<div class="size-203 flex-c-m respon6">
								Size
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
						</div> -->

						<div class="flex-w flex-r-m p-b-10 p-t-20">
							<div class="size-204 flex-w flex-m respon6-next">

								<!-- https://api.whatsapp.com/send?phone=6285333437902&text=Untuk%20Produk%20ini%20apakah%20masih%20tersedia?								 -->

								<a href="?m=checkout&id_produk=<?= $row->id_produk ?>">
									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Order Now
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
				<div class="tab-content p-t-43">
					<!-- - -->
					<div class="tab-pane fade show active" id="description" role="tabpanel">
						<div class="how-pos2 p-lr-15-md">
							<p class="stext-102 cl6">
								<?= $row->deskripsi ?>
							</p>
						</div>
					</div>

					<!-- - -->
					<div class="tab-pane fade" id="information" role="tabpanel">
						<div class="row">
							<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
								<ul class="p-lr-28 p-lr-15-sm">
									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Weight
										</span>

										<span class="stext-102 cl6 size-206">
											0.79 kg
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Dimensions
										</span>

										<span class="stext-102 cl6 size-206">
											110 x 33 x 100 cm
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Materials
										</span>

										<span class="stext-102 cl6 size-206">
											60% cotton
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Color
										</span>

										<span class="stext-102 cl6 size-206">
											Black, Blue, Grey, Green, Red, White
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Size
										</span>

										<span class="stext-102 cl6 size-206">
											XL, L, M, S
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
		<span class="stext-107 cl6 p-lr-25">
			SKU: <?php if ($row->id_kategori == 1) {
						echo "FS - 01" . $row->id_produk;
					} else if ($row->id_kategori == 2) {
						echo "TN - 01" . $row->id_produk;
					} else {
						echo "AC - 01" . $row->id_produk;
					}
					?>
		</span>

		<span class="stext-107 cl6 p-lr-25">
			Categories : <?= $row->nama_kategori ?>

		</span>
	</div>
</section>


<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-5 p-b-105">
	<div class="container">
		<div class="p-b-45">
			<h3 class="ltext-106 cl5 txt-center">
				Related Products
			</h3>
		</div>

		<!-- Slide2 -->
		<div class="wrap-slick2">
			<div class="slick2">
				<?php
				$query = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori");
				while ($row = mysqli_fetch_object($query)) { ?>
					<div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
						<!-- Block2 -->
						<div class="block2">
							<div id="blk2" class="block2-pic hov-img0">
								<a href="?m=product-detail&id_produk=<?= $row->id_produk ?>">
									<img src="asset/foto-produk/<?= $row->gambar ?>" alt="IMG-PRODUCT">
								</a>
								<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
									Quick View
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="?m=product-detail&id_produk=<?= $row->id_produk ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?= $row->nama_produk ?>
									</a>

									<span class="stext-105 cl3">
										Rp <?= number_format($row->harga) ?>
									</span>
								</div>

								<!-- <div class="block2-txt-child2 flex-r p-t-3">
									<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
									</a>
								</div> -->
							</div>
						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</div>
</section>