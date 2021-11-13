<div class="container">
    <h3 class="p-4">Register</h3>
</div>

<div id="form">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col col-8 p-4 p-4 bg-light  shadow p-3 mb-5 rounded">
                <form action="aksi.php?act=register" method="POST">

                    <div class="form-group mb-2">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" placeholder="Alamat E-mail">
                    </div>

                    <div class="form-group mb-2">
                        <label for="nama">Nama Lengkap</label>
                        <input id="nama" class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" placeholder="Kata Sandi" />
                    </div>
                    <div class="form-group mb-2">
                        <label for="re-password">Konfirmasi Password</label>
                        <input id="re-password" class="form-control" type="password" name="re-password" placeholder="Konfirmasi Password" />
                    </div>
                    <input name="submit" type="submit" class="btn btn-success" value="Simpan" />


                </form>
            </div>

        </div>
    </div>
</div>