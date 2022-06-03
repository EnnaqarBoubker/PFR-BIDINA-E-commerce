        <?php require_once APPROOT . "/views/inc/headerDash.php" ?>
            
            <div class="container-fluid">
                <div class="titl d-flex justify-content-between align-items-center">
                    <h2 class="mt-4">Simple Poduct</h2>
                    <a class="add-pro" href="./add-prod.html">Add Product &emsp; <i class="fas fa-plus-circle"></i></a>
                </div>
                  <div class="collapse" id="collapseExample">
                    <div class="card card-body border-0 p-0">
                        <section style="background-color: #eee;">
                            <div class="container pt-2 pb-4">
                                <h1 class="text-center p-3">The Categories</h1>
                                <div class="row ">
                                    <div class="col-12 col-md-6 col-lg-3 pb-sm-2">
                                        <div class="categoris categoris-A">
                                            <a href="#" class="d-flex flex-column">
                                                <div class="cate-item">
                                                    <img src="<?= URLROOT; ?>/img/image-2/table_4090 (1).png" alt="" style="width: 30px">
                                                    <h5 class="pt-3">Table</h5>
                                                </div>
                                                <div class="categ-item">
                                                    <h6 class="float-end fs-4">4</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 pb-sm-2">
                                        <div class="categoris categoris-B">
                                            <a href="#" class="d-flex flex-column">
                                                <div class="cate-item">
                                                    <img src="<?= URLROOT; ?>/img/image-2/pouf.png" alt="" style="width: 30px">
                                                    <h5 class="pt-3">Poufs</h5>
                                                </div>
                                                <div class="categ-item ">
                                                    <h6 class="float-end fs-4">4</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 pb-sm-2">
                                        <div class="categoris categoris-C">
                                            <a href="#" class="d-flex flex-column">
                                                <div class="cate-item">
                                                    <img src="<?= URLROOT; ?>/img/image-2/table_4090 (1).png" alt="" style="width: 30px">
                                                    <h5 class="pt-3">Chair</h5>
                                                </div>
                                                <div class="categ-item">
                                                    <h6 class="float-end fs-4">4</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-3 pb-sm-2">
                                        <div class="categoris categoris-D">
                                            <a href="#" class="d-flex flex-column">
                                                <div class="cate-item">
                                                    <img src="<?= URLROOT; ?>/img/image-2/table_4090 (1).png" alt="" style="width: 30px">
                                                    <h5 class="pt-3">Biblioteque</h5>
                                                </div>
                                                <div class="categ-item ">
                                                    <h6 class="float-end fs-4">4</h6>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="view-all-por">
                                        <a class="href-view" href="#">view all</a>
                                </div> -->
                            </div>
                        </section>
                    </div>
                  </div>
                <div class="mb-3 view-all-por">
                    <button class="btn btn-view-cate" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        View All Categoris
                  </button>
                </div>

                
                <section>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Img Produit</th>
                                <th>Titre Produit</th>
                                <th>All Price</th>
                                <th>Sold</th>
                                <th>categorises</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><img class="prod-dash" src="<?= URLROOT; ?>/img/image-2/75 (1).jpg" alt="produit-1"></td>
                                <td>Grey Scandinavian Chair </td>
                                <td>89.12 <span>$</span></td>
                                <td>90.12</td>
                                <td>chair</td>
                                <td>
                                    <a href="" class="fs-5 add text-decoration-none me-2" title="Edite"><i class="fas fa-edit"></i></a>
                                    <a href="" class="fs-5 delete text-decoration-none" title="Delete"><i class="fas fa-backspace"></i></a>
                                </td>
                              </tr>
                              <tr>
                                <td><img class="prod-dash" src="<?= URLROOT; ?>/img/image-2/75 (1).jpg" alt="produit-1"></td>
                                <td>Grey Scandinavian Chair </td>
                                <td>89.12 <span>$</span></td>
                                <td>90.12</td>
                                <td>chair</td>
                                <td>
                                    <a href="" class="fs-5 add text-decoration-none me-2" title="Edite"><i class="fas fa-edit"></i></a>
                                    <a href="" class="fs-5 delete text-decoration-none" title="Delete"><i class="fas fa-backspace"></i></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <?php require_once APPROOT . "/views/inc/footerDash.php" ; ?>