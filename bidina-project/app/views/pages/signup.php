<?php require APPROOT . '/views/inc/header.php'; ?>
<main>
        <div class="container-fluid p-0 text-center">
            <div class="signin container-fluid">
                <h2 class="">CREATE ACCOUNT</h2>
                <div class="list">
                    <ul class="list-all p-0">
                        <li class="list-a"><a href="<?= URLROOT; ?>">home </a></li>
                        <li class="list-a">/</li>
                        <li class="list-a list-b"> signup</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=" card border-0 p-4 m-5 col-lg-5 col-md-6 col-sm-7 mx-auto">
            <div class="signin-a card-body row">
                <form>
                    <div class="name mb-3 d-flex flex-column justify-content-between flex-md-row flex-lg-row">
                        <div class="w-100">
                            <label for="name-a" class="form-label ">First Name <span class="text-danger fs-5">*</span></label>
                            <input type="text" class="form-control" id="name-a" placeholder="Enter First Name" >
                        </div>
                        <div class="w-100">
                            <label for="name-b" class="form-label ">Last Name <span class="text-danger fs-5">*</span></label>
                            <input type="text" class="form-control" id="name-b" placeholder="Enter Last Name" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label ">Email <span class="text-danger fs-5">*</span></label>
                        <input type="email" class="form-control" id="mail" placeholder="Enter your email" name="email" value="">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label ">Phone <span class="text-danger fs-5">*</span></label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your Phone">
                    </div>
                    <div class="mb-3">
                        <label for="password1" class="form-label ">Password <span class="text-danger fs-5">*</span></label>
                        <input type="password" class="form-control" id="password1" placeholder="Enter your password" name="password" value="">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label ">Confirm Password <span class="text-danger fs-5">*</span></label>
                        <input type="password" class="form-control" id="password2" placeholder="Confirm Password " name="password" value="">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault" style="width: 20px; height: 20px; ">
                        <label class="form-check-label" for="flexCheckDefault"> 
                            I've read and accept the Privacy Policy
                        </label>
                      </div>
                    <input class="buton btn btn-lg w-100 text-white mt-4" type="submit" name="submit" value="Sign In">
                    <div class="buton-a d-flex flex-column flex-lg-row flex-md-column justify-content-between py-3">
                        <a class=" udme udme-a d-inline-block w-100" href="<?= URLROOT; ?>/pages/signin">Already have a account?</a>
                    </div>

                    
                </form>
            </div>
        </div>
    </main>
<?php require APPROOT . '/views/inc/footer.php'; ?>