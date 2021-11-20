<div class="section">
    <!-- container -->
    <div class="container">
        <h2 class="p-4">Kategori</h2>
    </div>
    <!-- /container -->
</div>


<div class="container shadow p-4 mb-5 bg-body rounded">
    <div>
        <a href="index.php?m=kategori_tambah"><button class="btn btn-primary"> Tambah Kategori</button></a>
    </div>
    </br>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori");
                $a = 1;
                while ($row = mysqli_fetch_object($query)) { ?>
                    <tr>
                        <td><?= $a; ?></td>
                        <td><?= $row->nama_kategori; ?></td>
                        <td>
                            <a class='btn btn-warning' href='?m=kategori_ubah&id_kategori=<?= $row->id_kategori ?>'>Ubah</a>
                            <a class='btn btn-danger' href='aksi.php?act=kategori_hapus&id_kategori=<?= $row->id_pid_kategori ?>' onclick="return confirm('Hapus Data Kategori ?')">Hapus</a>

                        </td>
                    </tr>
                <?php $a++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>