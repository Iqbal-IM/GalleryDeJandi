<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5" style="max-width: 500px; margin:auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row d-flex justify-content-center">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Register an Account!</h1>
                        </div>
                        <form class="user" action="aksi.php?act=register" method="POST">
                            <div class="form-group row">
                                <div class="col-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Name" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" autocomplete="off" required>
                            </div>
                            <div class="form-group row">
                                <div class="col-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" name="password" id="password" onkeyup='check();' placeholder="Password" required>
                                </div>
                                <div class="col-6">
                                    <input type="password" class="form-control form-control-user" name="re-password" id="re-password" onkeyup='check();' placeholder="Repeat Password" required>
                                </div>
                            </div>

                            <input name="submit" type="submit" class="btn btn-primary btn-user btn-block" value="Register" />

                            <span id="msg-reg"></span>
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