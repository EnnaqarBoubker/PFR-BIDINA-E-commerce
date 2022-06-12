<?php require_once APPROOT . "/views/inc/head.php" ?>
<main>
    <div class=" card border-0 p-4 m-5 col-lg-5 col-md-6 col-sm-7 mx-auto">
        <div class="signin-a card-body row">
            <form action="<?= URLROOT; ?>/profile/editeProfile/<?= $data['id'] ?>" method="POST">
                <div class="mb-3">
                    <label for="firstName" class="form-label ">First Name <span class="text-danger fs-5">*</span></label>
                    <input type="text" name="firstName" placeholder="Enter First Name" class="form-control <?= (!empty($data['firstName_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['firstName']; ?>">
                    <span class="invalid-feedback"><?php echo $data['firstName_error']; ?></span>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label ">Last Name <span class="text-danger fs-5">*</span></label>
                    <input type="text" name="lastName" placeholder="Enter Last Name" class="form-control <?= (!empty($data['lastName_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['lastName']; ?>">
                    <span class="invalid-feedback"><?= $data['lastName_error'] ?></span>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label ">Email <span class="text-danger fs-5">*</span></label>
                    <input type="email" name="email" placeholder="Enter your email" class="form-control <?= (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?= $data['email_error'] ?></span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label ">Phone <span class="text-danger fs-5">*</span></label>
                    <input type="text" name="phone" placeholder="Enter your Phone" class="form-control <?= (!empty($data['phone_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phone']; ?>">
                    <span class="invalid-feedback"><?= $data['phone_error'] ?></span>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <div class="">
                    <input class="buton btn btn-lg text-white fs-5 valide" type="submit" name="submit" value="Valide">
                    </div>
                    <div class="buton-a py-3">
                        <a class=" udme udme-a d-inline-block" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Back to the list" href="<?= URLROOT; ?>/profile/profile"><i class="fas fa-home"></i></a>
                    </div>
                </div>
            </form>
            <!-- bay bay alert confirmation form -->
           
        </div>
    </div>
</main>
 <script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
            </script>
<?php require_once APPROOT . "/views/inc/footerDash.php" ?>