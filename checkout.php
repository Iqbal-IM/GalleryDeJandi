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
						Form Order
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

		</div>
	</div>
</section>