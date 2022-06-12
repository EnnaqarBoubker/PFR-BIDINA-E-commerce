<?php require_once APPROOT . "/views/inc/headerDash.php" ?>

<div class="container-fluid">
    <div class="titl d-flex justify-content-between align-items-center">
        <h2 class="my-4 ">Table User</h2>
    </div>

    <section>
        <div class="container">
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <?php foreach($data['posts'] as $post) : ?>
                <div class="card" style="width: 16rem; border: 1px solid #ee870d;">
                    <div class="card-body">
                        <ul class="list-unstyled text-center fw-bold">
                            <li class="mb-2"><?php echo $post -> firstName . ' ' . $post -> lastName ; ?></li>
                            <li class="mb-2"><?php echo $post -> email; ?></li>
                            <li class="mb-2"><?php echo $post -> phone; ?></li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div> 
</div>
</div>
<?php require_once APPROOT . "/views/inc/footerDash.php"; ?>