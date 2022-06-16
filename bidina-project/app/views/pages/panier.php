<?php require APPROOT . '/views/inc/head.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-5 bg-white rounded shadow-sm mb-5">

                <!-- Shopping cart table -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Price</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Quantity</div>
                                </th>
                                <th scope="col" class="border-0 bg-light">
                                    <div class="py-2 text-uppercase">Remove</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="p-2">
                                        <img src="https://bootstrapious.com/i/snippets/sn-cart/product-3.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a></h5><span class="text-muted font-weight-normal font-italic">Category: Fashion</span>
                                        </div>
                                    </div>
                                <td class="align-middle"><strong>$79.00</strong></td>
                                <td class="align-middle">
                                    <div class="coun d-flex justify-content-around" style="margin: 18px 12px;">
                                        <div class="btns btn" id="decrement" style="border: 1px solid #6c757d; background: #ee870d; color: #fff;">-</div>
                                        <form method="post">
                                            <input id="counter" type="text" value="1" class="mt-1" name="quantity" style="width: 65px; text-align: center; border: 2px solid #ee870d;">
                                        </form>
                                        <div class="btns btn" id="increment" style="    border: 1px solid #6c757d; background: #ee870d; color: #fff;">+</div>
                                    </div>
                                </td>
                                <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End -->
            </div>
            <div class="col-lg-4 p-5 bg-white rounded shadow-sm mb-5">

                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Order Subtotal </strong><strong>$390.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Shipping and handling</strong><strong>$10.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Tax</strong><strong>$0.00</strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                            <h5 class="font-weight-bold">$400.00</h5>
                        </li>
                    </ul><a href="#" class="btn batin rounded-pill p-3 w-100 btn-block">Commander</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    let btnIncrement = document.getElementById('increment');
    let btnDecrement = document.getElementById('decrement');
    let counter = document.getElementById('counter');
    btnIncrement.addEventListener('click', function() {
        let value = parseInt(counter.value);
        if (value < 30) {
            value++;
            counter.value = value;
        }
    })
    btnDecrement.addEventListener('click', function() {
        let value = parseInt(counter.value);
        if (value > 1) {
            value--;
            counter.value = value;
        }
    })
</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>