<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<?php //foreach ($data['products'] as $product) :?>
<div class="container  single-product my-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-sm-8 ">
                <img src="<?= URLROOT; ?>/public/img/imgProducts/<?= $products -> img; ?>" class="border p-3 border-dark border-2 w-100" id="ProductImg">
        </div>
  
        <div class="col-lg-4 col-sm-8">
            <h1 class="fontliv">Amlou beldi</h1>
            <h4 class="fonts text-secondary fw-lighter fonts">Prix</h4>
            <h3  class="fonts">50.00 Dhs</h3>
            <!-- <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>Large</option>
                <option>Large</option>
                <option>Large</option>
            </select>
            <input type="number"value="1"> -->
            <h3 class="fonts">Product Details</h3>
            <p class="fonts" >Give your summer wardrobeastyle upgrade with the HRXMen's ActiveT-shirt.Team it withapair of shorts foryour morning workout oradenims for an evening out withthe guys.</p>
            <button type="button" class=" w-100 bg-light text-dark b  py-2 px-4 rounded-0 border-1  ms-auto fonts  border-dark ">
                <b>AJOUTER AU PANIER </b> 
            </button>
        </div>
   </div> 
</div>
<div class="container w-75 form-group">
    <label for="exampleFormControlTextarea1 " class="fonts f mb-3 fs-3 fw-bold" >votre avis est prÃ©cieux</label>
    <textarea class="form-control border-dark rounded-0" id="exampleFormControlTextarea1" rows="3"></textarea>
    <button type="button" class="mt-3 w-100 text-black bg-light b  py-2 px-4 rounded-0   ms-auto fonts  border-dark ">
        <b>COMMENTER</b> 
    </button>
</div>
<?php //endforeach; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>