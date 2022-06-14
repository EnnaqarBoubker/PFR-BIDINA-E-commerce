<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container  single-product my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-sm-8 ">
                <img src="<?= URLROOT; ?>/public/img/imgProducts/<?= $data ->img; ?>" class="border p-3 border-dark border-2" style="width: 20rem; height: 25rem;" id="ProductImg">
        </div>
  
        <div class="col-lg-4 col-sm-8">
            <h1 class="fontliv"><?= $data ->titre; ?></h1>
            <h4 class="fonts text-secondary fw-lighter fonts" style="font-size: 17px;">All Prix</h4>
            <del  class="fonts line" style="font-size: 17px;"><?= $data -> allPrix; ?> Dhs</del>
            <h4 class="fonts text-secondary fw-lighter fonts">Sold</h4>
            <h3  class="fonts"><?= $data -> sold; ?> Dhs</h3>
            <!-- <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>Large</option>
                <option>Large</option>
                <option>Large</option>
            </select>
            <input type="number"value="1"> -->
            <label for="quantity">Quantity (between 1 and 5):</label>
            <input type="number" id="quantity" name="quantity" min="1" max="5">
            <button type="button" class=" w-100 bg-light text-dark b batin py-2 px-4 rounded-0 border-1  ms-auto fonts  border-dark ">
                <b>AJOUTER AU PANIER </b> 
            </button>
        </div>
   </div> 
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>