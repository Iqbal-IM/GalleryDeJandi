<h1 class="h3 mb-4 text-gray-800" style="text-align: center;">Tambah Kategori</h1>


<div class="row d-flex justify-content-center">
    <div class="col col-8 p-4 bg-light  shadow p-3 mb-5 rounded">

        <form action="aksi.php?act=kategori_tambah" method="post">
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" autocomplete="off" required>
            </div>
            </br>
            <button class="btn btn-success" name="save">Simpan</button>
            <a href="?m=kategori" class="btn btn-secondary">Batal</a>
        </form>

    </div>

</div>