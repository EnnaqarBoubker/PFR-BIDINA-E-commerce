<?php require_once APPROOT . "/views/inc/header.php" ?>

<div class="container p-4">
    <a href="<?= URLROOT;?>/dashboardAdmin/dashProd" class="btn btn-sm btn-secondary mr-2 mb-4">
        <i class="fas fa-home"></i>
    </a>
    <form method="post">
        <div class="form-group mb-4">
            <label for="formFile" class="form-label">Choise Img Product</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="form-group mb-4">
            <label for="nom">Title Product*</label>
            <input type="text" name="nom" class="form-control" placeholder="Title Product">
        </div>
        <div class="form-group mb-4">
            <label for="prenom">Sold*</label>
            <input type="text" name="prenom" class="form-control" placeholder="Sold">
        </div>
        <div class="form-group mb-4">
            <label for="mat">All Price*</label>
            <input type="text" name="mat" class="form-control" placeholder="All Price">
        </div>
        <div class="form-group mb-4">
            <label>Categoris*</label>
            <select class="form-control" name="statut">
                <option value="1">Table</option>
                <option value="2">Chair</option>
                <option value="3">Poufs</option>
                <option value="4">Biblioteque</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="submit">Valider</button>
        </div>
    </form>
</div>

<?php require_once APPROOT . "/views/inc/footerDash.php" ?>