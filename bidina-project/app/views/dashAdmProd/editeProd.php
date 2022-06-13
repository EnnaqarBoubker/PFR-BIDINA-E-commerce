<?php require_once APPROOT . "/views/inc/header.php" ?>

<div class="container p-4">
    <a href="<?= URLROOT;?>/dashAdmProd/dashProd" class="btn btn-sm btn-secondary mr-2 mb-4">
        <i class="fas fa-home"></i>
    </a>
    
    <form method="POST" action="<?= URLROOT; ?>/dashAdmProd/editeProd/<?= @$data['id_product']?>" enctype="multipart/form-data">
   
        <div class="form-group mb-4">
            <label for="formFile" class="form-label">Choise Img Product</label>
            <input  type="file" id="formFile"name="img" class="form-control">
        </div>
        <div class="form-group mb-4">
            <label for="titre">Title Product*</label>
            <input type="text" name="titre"  placeholder="Title Product" class="form-control <?= (!empty($data['error_titre'])) ? 'is-invalid' : ''; ?>"  value="<?php echo $data['titre'] ;?>">
            <span class="invalid-feedback"><?= $data['error_titre'] ?></span>
        </div>
        <div class="form-group mb-4">
            <label for="sold">Sold*</label>
            <input type="text" name="sold"  placeholder="Sold" class="form-control <?= (!empty($data['error_sold'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['sold'];?>">
            <span class="invalid-feedback"><?= $data['error_sold'] ?></span>
        </div>
        <div class="form-group mb-4">
            <label for="allPrix">All Price*</label>
            <input type="text" name="allPrix"  placeholder="All Price" class="form-control <?= (!empty($data['error_allPrix'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['allPrix'];?>">
            <span class="invalid-feedback"><?= $data['error_allPrix'] ?></span>
        </div>
        <div class="form-group mb-4">
            <label for="remise">Remise*</label>
            <input type="text" name="remise"  placeholder="All Price" class="form-control <?= (!empty($data['error_remise'])) ? 'is-invalid' : ''; ?>"  value="<?= $data['remise'];?>">
            <span class="invalid-feedback"><?= $data['error_remise'] ?></span>
        </div>
        <div class="form-group mb-4">
            <label>New</label>
            <select class="form-control" name="new">
                <option value="<?= $data['new'];?>"><?= $data['new']; ?></option>
                <option value="new">New</option>
                <option value="old">Old</option>
            </select>
        </div>
        <div class="form-group mb-4">
            <label>Categoris*</label>
            <select class="form-control" name="categoris">
                <option value="<?= $data['categoris'];?>"><?= $data['categoris']; ?></option>
                <option value="Table">Table</option>
                <option value="Chair">Chair</option>
                <option value="Poufs">Poufs</option>
                <option value="Bibliotéques">Biblioteque</option>
                <option value="soucle">Soucle</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="submit" value="Valider">
        </div>
    </form>
</div>

<?php require_once APPROOT . "/views/inc/footerDash.php" ?>