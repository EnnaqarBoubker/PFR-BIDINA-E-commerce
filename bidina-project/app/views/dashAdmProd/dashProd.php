        <?php require_once APPROOT . "/views/inc/headerDash.php" ?>
            

            <div class="container-fluid">
                <div class="titl d-flex justify-content-between align-items-center">
                    <h3 class="mt-4">Simple Poduct</h3>
                    <a class="add-pro" href="<?= URLROOT; ?>/dashAdmProd/addProd" >Add Product &emsp; <i class="fas fa-plus-circle"></i></a>
                </div>
                  <div class="" >
                    <div class="card card-body border-0 p-0">
                        <section style="background-color: #eee;">
                            <div class="container-fluid">
                                <h3 class="text-center p-3">The Categories</h3>
                                <div class="d-flex justify-content-around">
                                    <a href="#" class="text-center">
                                        <h6>Tables</h6>
                                        <p>4</p>
                                    </a>
                                    <a href="#" class="text-center">
                                        <h6>Biblioteques</h6>
                                        <p>4</p>
                                    </a>
                                    <a href="#" class="text-center">
                                        <h6>Poufs</h6>
                                        <p>4</p>
                                    </a>
                                    <a href="#" class="text-center">
                                        <h6>Chaises</h6>
                                        <p>4</p>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                  </div>
                <section>
                    <div class="table-responsive" style="max-height:415px;">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th class="">Img Produit</th>
                                <th class="">Titre Produit</th>
                                <th class="">All Price</th>
                                <th class="">Sold</th>
                                <th class="">categorises</th>
                                <th class=""></th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($data['data'] as $val) :
                                ?>
                              <tr>
                                <td><img class="prod-dash" src="<?= URLROOT; ?>/img/image-2/75 (1).jpg" alt="produit-1"></td>
                                <td><?php echo $val -> titre ?></td>
                                <td><?php echo $val -> allPrix ?> <span class="fw-bold" style="font-size: 10px;">MAD</span></td>
                                <td><?php echo $val -> sold ?> <span class="fw-bold" style="font-size: 10px;">MAD</span></td>
                                <td><?php echo $val -> categoris ?></td>
                                <td>
                                    <a href="<?= URLROOT; ?>/dashAdmProd/editeProd" class="fs-5 add text-decoration-none me-2" title="Edite"><i class="fas fa-edit"></i></a>
                                    <a href="" class="fs-5 delete text-decoration-none" title="Delete"><i class="fas fa-backspace"></i></a>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php require_once APPROOT . "/views/inc/footerDash.php" ; ?>