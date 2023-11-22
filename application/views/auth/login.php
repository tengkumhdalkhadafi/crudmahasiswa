<section class="h-100" style="background-color: #f7f7f7;">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5">
                    <!-- Your content here -->
                </div>
                <?= $this->session->flashdata('message'); ?>
                <div class="card shadow-lg" style="border-radius: 15px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4" style="color: #333;">Login</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="<?= base_url('Auth/cek_login'); ?>">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email" style="color: #333;">E-Mail Address</label>
                                <input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" name="email" id="email" placeholder="Enter Email Address...">
                                <?= form_error('email', '<small class="text-danger p-1-3">', '</small>'); ?>
                                <div class="invalid-feedback">
                                    Email is invalid
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password" style="color: #333;">Password</label>
                                    <a href="#" class="float-end" style="color: #007BFF;">Forgot Password?</a>
                                </div>
                                <input type="password" class="form-control form-control-user" value="<?= set_value('password'); ?>" name="password" id="password" placeholder="Password">
                                <?= form_error('password', '<small class="text-danger p-1-3">', '</small>'); ?>
                                <div class="invalid-feedback">
                                    Password is required
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember" class="form-check-label" style="color: #333;">Remember Me</label>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-primary ms-auto" style="background-color: #007BFF; color: #fff; border: none; padding: 10px 20px; border-radius: 10px;">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0" style="background-color: #007BFF;">
                        <div class="text-center">
                            Don't have an account? <a href="<?= base_url('Auth/regis') ?>" class="text-white">Create One</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
