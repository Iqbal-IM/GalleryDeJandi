<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Produk</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
    </div>
    <div class="card-body">
        <div class="section">
            <a href="index.php?m=produk_tambah"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Produk</button></a>
        </div>

        </br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
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
                    $query = mysqli_query($koneksi, "SELECT * FROM produk JOIN kategori ON kategori.id_kategori=produk.id_kategori ORDER BY id_produk");
                    $a = 1;
                    while ($row = mysqli_fetch_object($query)) { ?>
                        <tr>
                            <td><?= $a; ?></td>
                            <td><?= $row->nama_produk; ?></td>
                            <td><?= $row->nama_kategori; ?></td>
                            <td>Rp <?= number_format($row->harga) ?></td>
                            <td>
                                <img src="../asset/foto-produk/<?= $row->gambar; ?>" height="80px" width="80px">
                            </td>
                            <td><?= substr($row->deskripsi, 0, 20) ?></td>
                            <td>
                                <a class='btn btn-warning' href='?m=produk_ubah&id_produk=<?= $row->id_produk ?>'><i class="fa fa-pen-fancy"></i></a>
                                <a class='btn btn-danger' href='aksi.php?act=produk_hapus&id_produk=<?= $row->id_produk ?>' onclick="return confirm('Hapus Data Produk ?')"><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                    <?php $a++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>