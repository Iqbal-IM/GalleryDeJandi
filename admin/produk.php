<link href="style.css" rel="stylesheet" />

<!-- container -->
<div class="container">
    <h2 class="p-4">Produk</h2>
</div>
<!-- /container -->

<div class="container shadow p-4 mb-5 bg-body rounded">
    <div>
        <a href="index.php?m=produk_tambah"><button class="btn btn-primary"> Tambah Produk</button></a></br>
    </div>
    </br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $batas = 10;
                $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                $previous = $halaman - 1;
                $next = $halaman + 1;

                $data = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori");
                $jumlah_data = mysqli_num_rows($data);
                $total_halaman = ceil($jumlah_data / $batas);

                $query = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori LIMIT $halaman_awal, $batas");
                $no = $halaman_awal + 1;
                while ($row = mysqli_fetch_object($query)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->nama_produk; ?></td>
                        <td><?= $row->nama_kategori; ?></td>
                        <td>Rp. <?= number_format($row->harga) ?></td>
                        <td>
                            <img src="../asset/foto-produk/<?= $row->gambar; ?>" height="80px" width="80px">
                        </td>
                        <td><?= substr($row->deskripsi, 0, 20) ?></td>
                        <td>
                            <a class='btn btn-warning' href='?m=produk_ubah&id_produk=<?= $row->id_produk ?>'>Ubah</a>
                            <a class='btn btn-danger' href='aksi.php?act=produk_hapus&id_produk=<?= $row->id_produk ?>' onclick="return confirm('Hapus Data Produk ?')">Hapus</a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>

        <div class="store-filter clearfix">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman > 1) {
                                                echo "href='?halaman=$Previous'";
                                            } ?>>Previous</a>
                </li>
                <?php
                for ($x = 1; $x <= $total_halaman; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                echo "href='?halaman=$next'";
                                            } ?>>Next</a>
                </li>
            </ul>
        </div>

    </div>
    <!-- <?php
            $query = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk");
            $col = 6;
            $i = 0; ?>
    <div class="row">
        <?php while ($row = mysqli_fetch_object($query)) {
            if ($i >= $col) { ?>

            <?php $i = 0;
            }
            $i++; ?>
            <div class="col-sm-2 mb-3">
                <div class="card">
                    <img src="../asset/foto-produk/<?php echo $row->gambar ?>" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row->nama_produk ?></h5>
                        <p class="card-text"><?php echo $row->deskripsi ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo $row->harga ?></small>
                    </div>
                </div>
            </div>
        <?php } ?>
        
    </div> -->
    <!-- </div> -->
</div>