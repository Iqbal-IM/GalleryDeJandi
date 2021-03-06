<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
	<div class="container">
		<div class="flex-w flex-sb-m p-b-52">

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

		</div>

		<div class="row isotope-grid">

			<?php

			if ($_GET['id_kategori'])
				$where .= " AND kategori.id_kategori='$_GET[id_kategori]'";

			$query = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori WHERE (nama_produk LIKE '%$_GET[q]%') $where ORDER BY id_produk");

			$cek = mysqli_num_rows($query);
			if (empty($cek)) {
				echo "<script>alert('Data yang Anda Cari Tidak Ada');window.close()</script>";
				// echo "<script>alert('Data yang Anda Cari Tidak Ada');document.location='index.php?m=product'</script>";
			}
			while ($row = mysqli_fetch_object($query)) { ?>
				<div class="col-6 col-md-4 col-lg-3 p-b-35 p-lr-15 isotope-item">

					<div class="block2">
						<div class="block2-pic hov-img0">
							<a href="?m=product-detail&id_produk=<?= $row->id_produk ?>">
								<img id="gambar1" src="asset/foto-produk/<?= $row->gambar ?>" alt="<?= $row->nama_produk ?>">
							</a>

							<button id="quick-view" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1" data-target="#modal-view" data-id="<?= $row->id_produk ?>" data-kategori="<?= $row->nama_kategori ?>" data-image="<?= $row->gambar ?>" data-deskripsi="<?= $row->deskripsi ?>" data-harga="<?= $row->harga ?>" data-pjg="<?= $row->panjang ?>" data-lbr="<?= $row->lebar ?>" data-nama="<?= $row->nama_produk ?>">
								Quick View
							</button>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="?m=product-detail&id_produk=<?= $row->id_produk ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $row->nama_produk ?>
								</a>

								<span class="stext-105 cl3">
									Rp <?= number_format($row->harga, 0, ",", ".") ?>
								</span>
							</div>

						</div>
					</div>
				</div>
			<?php } ?>

		</div>

		<!-- <div class="flex-c-m flex-w w-full p-t-38">
			<a <?php if ($halaman > 1) {
					echo "href='?halaman=$Previous'";
				} ?> class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1">
				1
			</a>

			<?php
			for ($x = 1; $x <= $total_halaman; $x++) {
			?>

				<a class="flex-c-m how-pagination1 trans-04 m-all-7" href="?halaman=<?php echo $x ?>"><?php echo $x; ?>>
				</a>

			<?php

			} ?>

			<a class="flex-c-m how-pagination1 trans-04 m-all-7" <?php if ($halaman < $total_halaman) {
																		echo "href='?halaman=$next'";
																	} ?>>
				2
			</a>
		</div> -->



		<!-- Load more -->
		<!-- <div class="flex-c-m flex-w w-full p-t-45">
			<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
				Load More
			</a>
		</div> -->
	</div>
</div>