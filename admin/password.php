<?php

session_start()
?>
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5" style="max-width: 500px; margin:auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row d-flex justify-content-center">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Ubah Password</h1>
                        </div>
                        <form class="user" action="aksi.php?act=password" method="POST">

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="pass1" placeholder="Password Lama" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="pass2" placeholder="Password Baru" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="pass3" placeholder="Konfirmasi Password Baru" required>
                            </div>
                            <input name="submit" type="submit" class="btn btn-primary btn-user btn-block" value="Ubah Password" />
                        </form>
                        <!-- <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>