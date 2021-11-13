<div class="container">
    <h3 class="p-4">Kategori Tambah</h3>
</div>

<div id="form">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col col-8 p-4 bg-light  shadow p-3 mb-5 rounded">

                <form action="aksi.php?act=kategori_tambah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="nama_produk" autocomplete="off" required>
                    </div>
                    </br>
                    <button class="btn btn-success" name="save">Simpan</button>
                </form>

            </div>

        </div>
    </div>
</div>