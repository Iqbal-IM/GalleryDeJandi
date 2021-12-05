<?php

require_once("session.php");


?>
<h1 class="h3 mb-4 text-gray-800" style="text-align: center;">Tambah Produk</h1>

<div class="row d-flex justify-content-center">
  <div class="col col-8 p-4 bg-light  shadow p-3 mb-5 rounded">

    <form action="aksi.php?act=produk_tambah" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" placeholder="Masukkan Nama Produk" required>
      </div>
      <div class="form-group">
        <label>Kategori</label>
        <select name="id_kategori" class="form-select" required>
          <option value="">- Pilih Kategori -</option>
          <?php
          $query = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY id_kategori");
          while ($r = mysqli_fetch_object($query)) {
            echo "<option value='$r->id_kategori'>$r->nama_kategori</option>";
          }
          ?>
        </select>
      </div>

      <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga" required>
      </div>

      <div class="form-group">
        <label>Panjang (cm)</label>
        <input type="text" class="form-control" name="panjang" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Lebar (cm)</label>
        <input type="text" class="form-control" name="lebar" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Gambar</label>
        <input type="file" class="form-control" name="gambar" required>
      </div>

      <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="5" required></textarea>
      </div>
      </br>
      <button class="btn btn-success" name="save">Simpan</button>
      <!-- <button class="btn btn-secondary" type="reset">Reset</button> -->
      <!-- <a href="?m=produk" class="btn btn-secondary">Batal</a> -->
    </form>
  </div>

</div>