<?php
$query = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori WHERE id_produk='$_GET[id_produk]'");
$row = mysqli_fetch_object($query);
?>
<div class="section">
	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">

			<div class="col-md-7">

				<!-- Product main img -->
				<div class="col-md-9 col-md-push-3">
					<div id="product-main-img">
						<div class="product-preview">
							<img src="asset/foto-produk/<?= $row->gambar ?>" alt="">
						</div>

					</div>
				</div>
				<!-- /Product main img -->

				<!-- Product thumb imgs -->
				<div class="col-md-3  col-md-pull-9">
					<div id="product-imgs">
						<div class="product-preview">
							<img src="./img/product01.png" alt="">
						</div>

						<div class="product-preview">
							<img src="./img/product03.png" alt="">
						</div>

						<div class="product-preview">
							<img src="./img/product06.png" alt="">
						</div>

						<div class="product-preview">
							<img src="./img/product08.png" alt="">
						</div>
					</div>
				</div>
				<!-- /Product thumb imgs -->

			</div>


			<!-- Product details -->
			<div class="col-md-5">
				<div class="product-details">
					<h2 class="product-name"><?= $row->nama_produk ?></h2>
					<!-- <div>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<a class="review-link" href="#">10 Review(s) | Add your review</a>
					</div> -->
					<br>
					<div>
						<h3 class="product-price">Rp. <?= number_format($row->harga) ?></h3>
					</div>
					<!-- <p><?= substr($row->deskripsi, 0, 25)  ?></p> -->

					<div class="add-to-cart">
						<div class="qty-label">
							Qty
							<div class="input-number">
								<input type="number">
								<span class="qty-up">+</span>
								<span class="qty-down">-</span>
							</div>
						</div>
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Beli Sekarang</button>
					</div>


					<ul class="product-links">
						<li>Category:</li>
						<li><a href="#"><?= $row->nama_kategori; ?></a></li>
					</ul>

					<ul class="product-links">
						<li>Share:</li>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-envelope"></i></a></li>
					</ul>

				</div>
			</div>
			<!-- /Product details -->

			<!-- Product tab -->
			<div class="col-md-12">
				<div id="product-tab">
					<!-- product tab nav -->
					<ul class="tab-nav">
						<li class="active"><a data-toggle="tab" href="#tab1">Deskripsi</a></li>
						<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
					</ul>
					<!-- /product tab nav -->
					<div class="container">
						<!-- product tab content -->
						<div class="tab-content">

							<!-- tab1  -->
							<div id="tab1" class="tab-pane fade in active">
								<div class="row">
									<div class="col-md-3">
										<p><?= $row->deskripsi ?></p>
									</div>
								</div>
							</div>
							<!-- /tab1  -->

							<!-- tab3  -->
							<div id="tab3" class="tab-pane fade in">
								<div class="row">
									<!-- Rating -->
									<div class="col-md-12">
										<div id="rating">
											<div class="rating-avg">
												<span>4.5</span>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<ul class="rating">
												<li>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-progress">
														<div style="width: 80%;"></div>
													</div>
													<span class="sum">3</span>
												</li>
												<li>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
													</div>
													<div class="rating-progress">
														<div style="width: 60%;"></div>
													</div>
													<span class="sum">2</span>
												</li>
												<li>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													</div>
													<div class="rating-progress">
														<div></div>
													</div>
													<span class="sum">0</span>
												</li>
												<li>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													</div>
													<div class="rating-progress">
														<div></div>
													</div>
													<span class="sum">0</span>
												</li>
												<li>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
														<i class="fa fa-star-o"></i>
													</div>
													<div class="rating-progress">
														<div></div>
													</div>
													<span class="sum">0</span>
												</li>
											</ul>
										</div>
									</div>
									<!-- /Rating -->

									<!-- Reviews -->
									<div class="col-md-6">
										<div id="reviews">
											<ul class="reviews">
												<li>
													<div class="review-heading">
														<h5 class="name">John</h5>
														<p class="date">27 DEC 2018, 8:0 PM</p>
														<div class="review-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
													</div>
												</li>
												<li>
													<div class="review-heading">
														<h5 class="name">John</h5>
														<p class="date">27 DEC 2018, 8:0 PM</p>
														<div class="review-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
													</div>
												</li>
											</ul>
											<ul class="reviews-pagination">
												<li class="active">1</li>
												<li><a href="#">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
											</ul>
										</div>
									</div>
									<!-- /Reviews -->
								</div>
							</div>
							<!-- /tab3  -->
						</div>
						<!-- /product tab content  -->
					</div>
				</div>
			</div>
			<!-- /product tab -->
			<!-- /row -->
		</div>
	</div>
	<!-- /container -->

	<!-- /SECTION -->
</div>

<!-- Section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">Related Products</h3>
				</div>
			</div>

			<!-- product -->
			<div class="col-md-3 col-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/product01.png" alt="">
						<div class="product-label">
							<span class="sale">-30%</span>
						</div>
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			<!-- /product -->

			<!-- product -->
			<div class="col-md-3 col-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/product02.png" alt="">
						<div class="product-label">
							<span class="new">NEW</span>
						</div>
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			<!-- /product -->

			<div class="clearfix visible-sm visible-xs"></div>

			<!-- product -->
			<div class="col-md-3 col-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/product03.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			<!-- /product -->

			<!-- product -->
			<div class="col-md-3 col-6">
				<div class="product">
					<div class="product-img">
						<img src="./img/product04.png" alt="">
					</div>
					<div class="product-body">
						<p class="product-category">Category</p>
						<h3 class="product-name"><a href="#">product name goes here</a></h3>
						<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						<div class="product-rating">
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			</div>
			<!-- /product -->

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /Section -->