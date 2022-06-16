<?php require APPROOT . '/views/inc/header.php'; ?>
    
    <main class="mt-5">
        <h2 class="text-center mt-4 m-3">Welcome the Best Admin BIDINA</h2>
        <div class=" card border-0 p-4 m-5 col-lg-5 col-md-6 col-sm-7 mx-auto">
            <div class="signin-a card-body row">
                <form action="<?= URLROOT; ?>/dashboardAdmin/signin" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger fs-5">*</span></label>
                        <input type="text" name="email"  placeholder="Enter your email" class="form-control <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['email'] ?>">
                        <span class="invalid-feedback"><?= $data['email_err'] ?></span>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password <span class="text-danger fs-5">*</span></label>
                        <input type="password" name="password" placeholder="Enter your password" class="form-control <?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['password'] ?>">
                        <span class="invalid-feedback"><?= $data['password_err'] ?></span>
                    </div>
                    <input class="buton btn btn-lg w-100 text-white" type="submit" name="submit" value="Sign In">

                </form>
            </div>
        </div>
    </main>
    
<?php require APPROOT . '/views/inc/footerDash.php'; ?>