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

		<span class="stext-109 cl4">
			Checkout
		</span>
	</div>
</div>

<section class="bg0 p-t-50 p-b-85">
	<div class="container">
		<div class="flex-w flex-tr d-flex justify-content-center">
			<div class="size-210 bor10 p-lr-70 p-t-45 p-b-70 p-lr-15-lg w-full-md">
				<form>
					<h4 class="mtext-105 cl2 txt-center p-b-30">
						Form Pemesanan
					</h4>

					<label for="" class="stext-111">Nama Produk</label>
					<div class="bor8 m-b-10 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30 bg-light" type="text" name="product" id="product" value="<?= $row->nama_produk ?>" readonly>
					</div>

					<!-- <label for="" class="stext-111">Harga</label>
					<div class="bor8 m-b-10 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30 bg-light" type="number" name="harga" value="<?= $row->harga ?>" readonly>
					</div> -->

					<label for="" class="stext-111">Jumlah Order</label>
					<div class="bor8 m-b-10 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="number" name="jumlah" id="jumlah" required>
					</div>

					<label for="" class="stext-111">Nama</label>
					<div class="bor8 m-b-10 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="text" name="name" id="name" placeholder="Masukkan Nama Anda">
					</div>

					<label for="" class="stext-111">Email</label>
					<div class="bor8 m-b-10 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="email" name="email" id="email" placeholder=" Masukkan Alamat Email Anda" required>
					</div>

					<label for="" class="stext-111">Alamat Pengiriman</label>
					<div class="bor8 m-b-10 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="text" name="alamat" id="alamat" placeholder=" Masukkan Alamat Lengkap" required>
					</div>

					<label for="" class="stext-111">No. Telepon</label>
					<div class="bor8 m-b-10 how-pos4-parent">
						<input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="number" name="phone" id="phone" placeholder="No. Telepon Anda">
					</div>

					<label for="" class="stext-111">Catatan</label>
					<div class="bor8 m-b-30">
						<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="catatan" id="catatan"></textarea>
					</div>

					<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer send">
						Order
					</button>

					<div id="text-info"></div>
				</form>
			</div>

			<!-- <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
				<div class="flex-w w-full p-b-42">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-map-marker"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Address
						</span>

						<p class="stext-115 cl6 size-213 p-t-18">
							Coza Store Center 8th floor, 379 Hudson St, New York, NY 10018 US
						</p>
					</div>
				</div>

				<div class="flex-w w-full p-b-42">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-phone-handset"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Lets Talk
						</span>

						<p class="stext-115 cl1 size-213 p-t-18">
							+1 800 1236879
						</p>
					</div>
				</div>

				<div class="flex-w w-full">
					<span class="fs-18 cl5 txt-center size-211">
						<span class="lnr lnr-envelope"></span>
					</span>

					<div class="size-212 p-t-2">
						<span class="mtext-110 cl2">
							Sale Support
						</span>

						<p class="stext-115 cl1 size-213 p-t-18">
							contact@gmail.com
						</p>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</section>

<!-- Shoping Cart -->
<!-- <form class="bg0 p-t-75 p-b-85">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
				<div class="m-l-25 m-r--38 m-lr-0-xl">
					<div class="wrap-table-shopping-cart">
						<table class="table-shopping-cart">
							<tr class="table_head">
								<th class="column-1">Product</th>
								<th class="column-2"></th>
								<th class="column-3">Price</th>
								<th class="column-4">Quantity</th>
								<th class="column-5">Total</th>
							</tr>

							<tr class="table_row">
								<td class="column-1">
									<div class="how-itemcart1">
										<img src="asset/foto-produk/<?= $row->gambar ?>" alt="IMG">
									</div>
								</td>
								<td><?= $row->nama_produk ?></td>
								<td><?= $row->harga ?></td>
								<td>
									<div class="wrap-num-product flex-w m-l-auto m-r-0">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
								</td>
								<td class="column-5"><?= $row->harga ?></td>
							</tr>

							<tr class="table_row">
								<td class="column-1">
									<div class="how-itemcart1">
										<img src="images/item-cart-05.jpg" alt="IMG">
									</div>
								</td>
								<td class="column-2">Lightweight Jacket</td>
								<td class="column-3">$ 16.00</td>
								<td class="column-4">
									<div class="wrap-num-product flex-w m-l-auto m-r-0">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product2" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>
								</td>
								<td class="column-5">$ 16.00</td>
							</tr>
						</table>
					</div>

					<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
						<div class="flex-w flex-m m-r-20 m-tb-5">
							<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

							<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
								Apply coupon
							</div>
						</div>

						<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
							Update Cart
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
				<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
					<h4 class="mtext-109 cl2 p-b-30">
						Cart Totals
					</h4>

					<div class="flex-w flex-t bor12 p-b-13">
						<div class="size-208">
							<span class="stext-110 cl2">
								Subtotal:
							</span>
						</div>

						<div class="size-209">
							<span class="mtext-110 cl2">
								$79.65
							</span>
						</div>
					</div>

					<div class="flex-w flex-t bor12 p-t-15 p-b-30">
						<div class="size-208 w-full-ssm">
							<span class="stext-110 cl2">
								Shipping:
							</span>
						</div>

						<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
							<p class="stext-111 cl6 p-t-2">
								There are no shipping methods available. Please double check your address, or contact us if you need any help.
							</p>

							<div class="p-t-15">
								<span class="stext-112 cl8">
									Calculate Shipping
								</span>

								<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
									<select class="js-select2" name="time">
										<option>Select a country...</option>
										<option>USA</option>
										<option>UK</option>
									</select>
									<div class="dropDownSelect2"></div>
								</div>

								<div class="bor8 bg0 m-b-12">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="state" placeholder="State /  country">
								</div>

								<div class="bor8 bg0 m-b-22">
									<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="postcode" placeholder="Postcode / Zip">
								</div>

								<div class="flex-w">
									<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
										Update Totals
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="flex-w flex-t p-t-27 p-b-33">
						<div class="size-208">
							<span class="mtext-101 cl2">
								Total:
							</span>
						</div>

						<div class="size-209 p-t-1">
							<span class="mtext-110 cl2">
								$79.65
							</span>
						</div>
					</div>

					<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>
	</div>
</form> -->