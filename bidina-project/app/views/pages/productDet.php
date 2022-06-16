<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container  single-product my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-sm-8 ">
            <img src="<?= URLROOT; ?>/public/img/imgProducts/<?= $data->img; ?>" class="border p-3 border-dark border-2" style="width: 20rem; height: 25rem;" id="ProductImg">
        </div>

        <div class="col-lg-4 col-sm-8">
            <h1 class="fontliv"><?= $data->titre; ?></h1>
            <h4 class="fonts text-secondary fw-lighter fonts" style="font-size: 17px;">All Prix</h4>
            <del class="fonts line" style="font-size: 17px;"><?= $data->allPrix; ?> Dhs</del>
            <h4 class="fonts text-secondary fw-lighter fonts">Sold</h4>
            <h3 class="fonts"><?= $data->sold; ?> Dhs</h3>


            <!-- crate form hiden -->
            <form method="post" action="<?= URLROOT; ?>/paniers/addToPanier">
                <input type="hidden" name="titre" value="<?= $data->titre; ?>">
                <input type="hidden" name="img" value="<?php echo $data->img; ?>">
                <input type="hidden" name="allPrix" value="<?= $data->allPrix; ?>">
                <input type="hidden" name="sold" value="<?= $data->sold; ?>">
                <input type="hidden" name="id_product" value="<?= $data->id_product; ?>">
                <!-- <input type="hidden" name="quantity" value="1"> -->
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <input type="submit" name="submit" value="ADD TO CARD" class="batin p-3 border-0 text-light ">
                <?php else : ?>
                    <a class="batin position-relative p-3 border-0 text-light" style="top: 28px;" href="<?= URLROOT; ?>/users/signin">LOG IN TO ADD TO CART</a>
                <?php endif; ?>


            </form>
        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>