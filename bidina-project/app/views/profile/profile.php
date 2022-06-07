<?php require APPROOT . '/views/inc/header.php'; ?>

<section class="my-5" style="background-color: #eee;">
    <div class="container py-5">

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="<?= URLROOT; ?>/img/image-2/3519275.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">John Smith</h5>
                        <p class="text-muted mb-4">example@example.com</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn batin">Profile</button>
                            <button type="button" class="btn ms-1" style="border: 1px solid #ee870d;">Edite Profile</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body p-0">
                        <div class="p-4" style="background-color: #ee870d;">
                            <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo rem asperiores sunt deserunt quo placeat</p>
                        </div>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Johnatan Smith</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">example@example.com</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(097) 234-5678</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(098) 765-4321</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row p-2">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
</div>


<?php require_once APPROOT . "/views/inc/footerDash.php" ?>