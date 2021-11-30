<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
	<div class="container">
		<div class="flex-w flex-sb-m p-b-52">

			<!-- <div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<a href="?m=product">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1">
						All Products
					</button>
				</a>

				<?php
				$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori ORDER BY id_kategori");
				while ($r = mysqli_fetch_object($query)) { ?>
					<a href="?m=product&id_kategori=<?= $r->id_kategori ?>">
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5">
							<?= $r->nama_kategori ?>
						</button>
					</a>
				<?php } ?>


			</div> -->

			<!-- <div class="flex-w flex-c-m m-tb-10 m-l-auto">
				<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
					<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
					<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
					Filter
				</div>

				<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
					<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
					<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
					Search
				</div>

			</div> -->

			<!-- Search product -->
			<!-- <form class="dis-none panel-search w-full p-t-10 p-b-15">

				<div class="bor8 dis-flex p-l-15">
					<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input type="hidden" name="m" value="product" />
					<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" value="<?php echo $_GET['q'] ?>" name="q" autocomplete="off" placeholder="Search">
				</div>
			</form> -->

			<div class="btn-group m-l-auto">
				<button class=" btn btn-light border dropdown-toggle stext-106" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
					<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>Filter
				</button>
				<ul class="dropdown-menu" aria-labelledby="defaultDropdown">
					<li><a class="dropdown-item stext-106" href="?m=product">All Products</a></li>
					<?php
					$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori ORDER BY id_kategori");
					while ($r = mysqli_fetch_object($query)) { ?>

						<li><a class="dropdown-item stext-106" href="?m=product&id_kategori=<?= $r->id_kategori ?>"><?= $r->nama_kategori ?></a></li>
					<?php } ?>
				</ul>
			</div>

			<!-- <form class="form-inline">
				<label class="form-inline"> Sort by </label>
				<input type="hidden" name="m" value="product" />

				<select name="id_kategori" class="form-control" id="kategori" onchange="myFunction()">
					<option value="">All Product</option>
					<?php
					$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori ORDER BY id_kategori");
					while ($r = mysqli_fetch_object($query)) {
						if ($r->id_kategori == $_GET['id_kategori']) {
							echo "<option value='$r->id_kategori' selected>$r->nama_kategori</option>";
						} else {
							echo "<option value='$r->id_kategori'>$r->nama_kategori</option>";
						}
					}
					?>
				</select>
				<div class="form-inline p-l-5">
					<button class="btn btn-info"> <i class="fa fa-refresh"></i> Cari</button>
				</div>
			</form> -->


		</div>

		<div class="row isotope-grid">
			<?php
			if ($_GET['id_kategori'])
				$where .= " AND kategori.id_kategori='$_GET[id_kategori]'";
			$query = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori WHERE (nama_produk LIKE '%$_GET[q]%') $where ORDER BY id_produk");
			while ($row = mysqli_fetch_object($query)) { ?>
				<div class="col-6 col-md-4 col-lg-3 p-b-35 isotope-item">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<!-- <a href="?m=product-detail&id_produk=<?= $row->id_produk ?>">
								<img src="asset/foto-produk/<?= $row->gambar ?>" alt="<?= $row->nama_produk ?>">
							</a> -->

						</div>

						<a href="#mymodal?id_produk=<?= $row->id_produk ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
							Quick View
						</a>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="?m=product-detail&id_produk=<?= $row->id_produk ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $row->nama_produk ?>
								</a>

								<span class="stext-105 cl3">
									<!-- Rp <?= number_format($row->harga, 2, ",", ".") ?> -->
									Rp <?= number_format($row->harga) ?>
								</span>
							</div>

						</div>
					</div>
				</div>
			<?php } ?>


			<!-- <div class="col-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
				
				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="images/product-02.jpg" alt="IMG-PRODUCT">

						<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
							Quick View
						</a>
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								Herschel supply
							</a>

							<span class="stext-105 cl3">
								$35.31
							</span>
						</div>

						<div class="block2-txt-child2 flex-r p-t-3">
							<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
								<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
								<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 p-b-35 isotope-item men">

				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="images/product-03.jpg" alt="IMG-PRODUCT">

						<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
							Quick View
						</a>
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								Only Check Trouser
							</a>

							<span class="stext-105 cl3">
								$25.50
							</span>
						</div>

						<div class="block2-txt-child2 flex-r p-t-3">
							<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
								<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
								<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="images/product-04.jpg" alt="IMG-PRODUCT">

						<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
							Quick View
						</a>
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								Classic Trench Coat
							</a>

							<span class="stext-105 cl3">
								$75.00
							</span>
						</div>

						<div class="block2-txt-child2 flex-r p-t-3">
							<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
								<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
								<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="images/product-05.jpg" alt="IMG-PRODUCT">

						<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
							Quick View
						</a>
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								Front Pocket Jumper
							</a>

							<span class="stext-105 cl3">
								$34.75
							</span>
						</div>

						<div class="block2-txt-child2 flex-r p-t-3">
							<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
								<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
								<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6 col-md-4 col-lg-3 p-b-35 isotope-item watches">

				<div class="block2">
					<div class="block2-pic hov-img0">
						<img src="images/product-06.jpg" alt="IMG-PRODUCT">

						<a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
							Quick View
						</a>
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								Vintage Inspired Classic
							</a>

							<span class="stext-105 cl3">
								$93.20
							</span>
						</div>

						<div class="block2-txt-child2 flex-r p-t-3">
							<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
								<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
								<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
							</a>
						</div>
					</div>
				</div>
			</div> -->


		</div>

		<!-- Load more -->
		<!-- <div class="flex-c-m flex-w w-full p-t-45">
			<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
				Load More
			</a>
		</div> -->
	</div>
</div>