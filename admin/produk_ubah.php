<?php
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk='$_GET[id_produk]'");
$row = mysqli_fetch_object($query);

require_once("session.php");


?>

<h1 class="h3 mb-4 text-gray-800" style="text-align: center;">Ubah Produk</h1>

<div class="row d-flex justify-content-center">
    <div class="col col-8 p-4 bg-light  shadow p-3 mb-5 rounded">

        <form action="aksi.php?act=produk_ubah&id_produk=<?php echo $row->id_produk ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk" value="<?php echo $row->nama_produk ?>">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="id_kategori" class="form-select">
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori ");
                    while ($r = mysqli_fetch_object($query)) {
                        if ($row->id_kategori == $r->id_kategori) {
                            echo "<option value='$r->id_kategori' selected>$r->nama_kategori</option>";
                        } else {
                            echo "<option value='$r->id_kategori'>$r->nama_kategori</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label>Harga (Rp.)</label>
                <input type="number" class="form-control" name="harga" value="<?= $row->harga ?>">
            </div>

            <div class="form-group">
                <label>Panjang (cm)</label>
                <input type="text" class="form-control" name="panjang" value="<?= $row->panjang ?>">
            </div>

            <div class="form-group">
                <label>Lebar (cm)</label>
                <input type="text" class="form-control" name="lebar" value="<?= $row->lebar ?>">
            </div>

            <div class="form-group">
                <img class="preview" src="../asset/foto-produk/<?= $row->gambar ?>" style="height:120px; width:120px;" />
                <!-- <a href="aksi.php?act=hapus_foto&id_produk=<?= $row->id_produk ?>">Hapus Gambar</a> -->
            </div>
            <div class="form-group">
                <label>Ganti Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="5"><?= $row->deskripsi ?></textarea>
            </div>
            </br>
            <button class="btn btn-success" name="save">Simpan</button>
            <a href="?m=produk" class="btn btn-secondary">Batal</a>
        </form>

    </div>

</div>