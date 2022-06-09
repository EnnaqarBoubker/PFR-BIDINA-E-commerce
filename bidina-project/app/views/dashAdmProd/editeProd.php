<?php require_once APPROOT . "/views/inc/header.php" ?>

<div class="container p-4">
    <a href="<?= URLROOT;?>/dashAdmProd/dashProd" class="btn btn-sm btn-secondary mr-2 mb-4">
        <i class="fas fa-home"></i>
    </a>
    <form method="post" action="<?= URLROOT; ?>/dashAdmProd/editeProd">
    <?php var_dump($getEditeMod)  ?>
        <!-- <div class="form-group mb-4">
            <label for="formFile" class="form-label">Choise Img Product</label>
            <input  type="file" id="formFile" class="form-control">
        </div> -->
        <div class="form-group mb-4">
            <label for="titre">Title Product*</label>
            <input type="text" name="titre"  placeholder="Title Product" class="form-control <?= (!empty($data['error_titre'])) ? 'is-invalid' : ''; ?>"  value="<?= $_SESSION['prod_titre'];?>">
            <span class="invalid-feedback"><?= $data['error_titre'] ?></span>
        </div>
        <div class="form-group mb-4">
            <label for="sold">Sold*</label>
            <input type="text" name="sold"  placeholder="Sold" class="form-control <?= (!empty($data['error_sold'])) ? 'is-invalid' : ''; ?>"  value="<?= $_SESSION['prod_sold'];?>">
            <span class="invalid-feedback"><?= $data['error_sold'] ?></span>
        </div>
        <div class="form-group mb-4">
            <label for="allPrix">All Price*</label>
            <input type="text" name="allPrix"  placeholder="All Price" class="form-control <?= (!empty($data['error_allPrix'])) ? 'is-invalid' : ''; ?>"  value="<?= $_SESSION['prod_allPrix'];?>">
            <span class="invalid-feedback"><?= $data['error_allPrix'] ?></span>
        </div>
        <div class="form-group mb-4">
            <label>Categoris*</label>
            <select class="form-control" name="categoris">
                <option value="<?= $_SESSION['prod_categoris'];?>"></option>
                <option value="Table">Table</option>
                <option value="Chair">Chair</option>
                <option value="Poufs">Poufs</option>
                <option value="Bibliotéques">Biblioteque</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Valider">
        </div>
    </form>
</div>

<?php require_once APPROOT . "/views/inc/footerDash.php" ?>