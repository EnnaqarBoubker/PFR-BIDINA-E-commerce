<?php require APPROOT . '/views/inc/header.php'; ?>
    
    <main>
        <div class="container-fluid p-0 text-center">
            <div class="signin container-fluid">
                <h2 class="">LOGIN</h2>
                <div class="list">
                    <ul class="list-all p-0">
                        <li class="list-a"><a href="<?= URLROOT; ?>">home </a></li>
                        <li class="list-a">/</li>
                        <li class="list-a list-b"> signin</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=" card border-0 p-4 m-5 col-lg-5 col-md-6 col-sm-7 mx-auto">
            <div class="signin-a card-body row">
                <form>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email <span class="text-danger fs-5">*</span></label>
                        <input type="text" class="form-control" id="mail" placeholder="Enter your email" name="email" value="">
                    </div>
                    <div class="mb-4">
                        <label for="password1" class="form-label">Password <span class="text-danger fs-5">*</span></label>
                        <input type="password" class="form-control" id="password1" placeholder="Enter your password" name="password" value="">
                    </div>
                    <input class="buton btn btn-lg w-100 text-white" type="submit" name="submit" value="Sign In">

                    <div class="buton-a d-flex flex-column flex-lg-row flex-md-column justify-content-between py-3">
                        <a class=" udme udme-a d-inline-block" href="<?= URLROOT; ?>/pages/signup">Create a account</a>
                        <a class=" udme udme-b" href="#">Forget Password?</a> 
                    </div>
                </form>
            </div>
        </div>
    </main>
    
<?php require APPROOT . '/views/inc/footer.php'; ?>
    
