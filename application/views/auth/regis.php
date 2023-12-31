<section class="h-100">
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                </div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="<?= base_url('Auth/cek_regis'); ?>">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="name">Name</label>
                                <input type="text" name="nama" value="<?= set_value('nama');?>"
                                class="form-control form-control-user"id="nama"placeholder="Nama Lengkap">
                                <?=form_error('nama','<small class="text-danger p1-3">','</small>');?>
                                <div class="invalid-feedback">
                                    Name is required
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input type="text" name="email" value="<?= set_value('email');?>"
                                class="form-control form-control-user"id="nama"placeholder="email">
                                <?=form_error('email','<small class="text-danger p1-3">','</small>');?>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Password</label>
                                <input type="text" name="password" value="<?= set_value('password');?>"
                                class="form-control form-control-user"id="password"placeholder="password">
                                <?=form_error('password','<small class="text-danger p1-3">','</small>');?>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                            <p class="form-text text-muted mb-3">
                                By registering you agree with our terms and condition.
                            </p>

                            <div class="align-items-center d-flex">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Already have an account? <a href="<?= base_url('Auth/login') ?>" class="text-dark">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>