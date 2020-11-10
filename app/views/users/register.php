<?php require_once APPROOT . '/views/inc/header.php'; ?>
   <div class="row my-5">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Create an account</h2>
                <p>Please fill out this form to register with us</p>
                <form action="<?= URLROOT; ?>/users/register" method="POST">
                    <div class="form-group">
                        <label for="name">Name:<sub>*</sub></label>
                        <input 
                            type="text" 
                            class="form-control 
                            <?= !empty($data['name_err']) ? 'is-invalid' : '' ?>" 
                            name="name"
                            value="<?= $data['name'] ?>"
                             />
                             <span class="invalid-feedback d-block"><?= $data['name_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:<sub>*</sub></label>
                        <input 
                            type="email" 
                            class="form-control
                            <?= !empty($data['email_err']) ? 'is-invalid' : '' ?>" 
                            name="email"
                            value="<?= $data['email'] ?>"
                             />
                        <span class="invalid-feedback d-block"><?= $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:<sub>*</sub></label>
                        <input 
                            type="password" 
                            class="form-control
                            <?= !empty($data['password_err']) ? 'is-invalid' : '' ?>" 
                            name="password"
                            value="<?= $data['password'] ?>"
                             />
                             <span class="invalid-feedback d-block"><?= $data['password_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm password:<sub>*</sub></label>
                        <input 
                            type="password" 
                            class="form-control
                            <?= !empty($data['confirm_password_err']) ? 'is-invalid' : '' ?>" 
                            name="confirm_password"
                            value="<?= $data['confirm_password'] ?>"
                             />
                             <span class="invalid-feedback d-block"><?= $data['confirm_password_err']; ?></span>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-block">Register</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="<?= URLROOT; ?>/users/login" class="btn btn-light btn-block">Hava an account? Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   </div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
