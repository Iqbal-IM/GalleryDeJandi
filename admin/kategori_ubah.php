<?php
$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$_GET[id_kategori]'");
$row = mysqli_fetch_object($query);
?>
<div class="container">
    <h3 class="p-4">Kategori Ubah</h3>
</div>

<div id="form" class="pt-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col col-8 p-4 bg-light  shadow p-3 mb-5 rounded">

                <form action="aksi.php?act=kategori_ubah&id_kategori=<?php echo $row->id_kategori ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_produk" value="<?php echo $row->nama_kategori ?>">
                    </div>
                    </br>
                    <button class="btn btn-success" name="save">Simpan</button>
                </form>

            </div>

        </div>
    </div>
</div>