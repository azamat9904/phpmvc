<?php require_once APPROOT . '/views/inc/header.php'; ?>
   <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2>Login</h2>
                <p>Please fill your credentials to log in</p>
                <form action="<?= URLROOT; ?>/users/login" method="POST">  
                    <div class="form-group">
                        <label for="email">Email:<sub>*</sub></label>
                        <input 
                            type="email" 
                            class="form-control 
                            <?php !empty($data['email_err']) ? 'is-invalid' : '' ?>" 
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
                            <?php !empty($data['password_err']) ? 'is-invalid' : '' ?>" 
                            name="password"
                            value="<?= $data['password'] ?>"
                             />
                             <span class="invalid-feedback d-block"><?= $data['password_err']; ?></span>
                    </div>
                    <div class="row mb-2">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-block">Login</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="<?= URLROOT; ?>/users/register" class="btn btn-light btn-block">You are new? Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
   </div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
