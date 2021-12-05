<!-- DataTales Example -->
<div class="card shadow mb-4 mt-5">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Produk</h3>
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
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Dimensi</th>
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
                            <td>
                                <img src="../asset/foto-produk/<?= $row->gambar; ?>" height="80px" width="80px" style="object-fit: cover;">
                            </td>
                            <td><?= $row->nama_produk; ?></td>
                            <td><?= $row->nama_kategori; ?></td>
                            <td>Rp <?= number_format($row->harga, 0, ",", ".") ?></td>
                            <td style="white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 120px;"><?= $row->deskripsi ?></td>
                            <td><?= $row->panjang ?> x <?= $row->lebar ?></td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href='?m=produk_ubah&id_produk=<?= $row->id_produk ?>'><i class="fa fa-edit"></i> Edit</a>
                                        <a class="dropdown-item" href='aksi.php?act=produk_hapus&id_produk=<?= $row->id_produk ?>' onclick="return confirm('Hapus Data Produk?')"><i class="fa fa-trash"></i> Delete</a>
                                    </div>
                                </div>
                                <!-- <a class='btn btn-sm btn-warning' href='?m=produk_ubah&id_produk=<?= $row->id_produk ?>'><i class="fa fa-edit"></i></a>
                                <a class='btn btn-sm btn-danger' href='aksi.php?act=produk_hapus&id_produk=<?= $row->id_produk ?>' onclick="return confirm('Hapus Data Produk?')"><i class="fa fa-trash"></i></a> -->

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