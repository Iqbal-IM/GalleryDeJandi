<?php

require_once("session.php");


?>

<!-- DataTales Example -->
<div class="card shadow mb-4 mt-5">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Kategori</h3>
    </div>
    <div class="card-body">
        <div class="section">
            <a href="index.php?m=kategori_tambah"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Kategori</button></a>
        </div>

        </br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama kategori</th>
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
                                <a class='btn btn-sm btn-warning' href='?m=kategori_ubah&id_kategori=<?= $row->id_kategori ?>'><i class="fa fa-pen-fancy"></i></a>
                                <a class='btn btn-sm btn-danger' href='aksi.php?act=kategori_hapus&id_kategori=<?= $row->id_kategori ?>' onclick="return confirm('Hapus Data Kategori?')"><i class="fa fa-trash"></i></a>

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