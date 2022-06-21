<?php

class Commands extends Controller{

    public function __construct()
    {
       $this->commandModel = $this->model('Command');
       $this->panierModel = $this->model('Panier');
       $this->prodModel = $this->model('Products');
    }


    //ceart method insert produit from panier to command

    public function insertCommand()
    {
        $id_user = $_SESSION['user_id'];

        @$paniers = $this->panierModel->getCountQuantityProdInPanier($id_user);
        
        $this->commandModel->insertCommand($id_user);
        $this->deleteAllProdFromPanier($id_user);


        $data = [
            'paniers' => $paniers,
        ];
        
        $this->view('pages/index', $data);
    }


    // creat method delete all product from panier
    public function deleteAllProdFromPanier()
    {
        $id_user = $_SESSION['user_id'];
        $products = $this->prodModel->affichageProductLimit();
        @$paniers = $this->panierModel->getCountQuantityProdInPanier($id_user);

        $this->panierModel->deleteAllProdFromPanier($id_user);
        

        $data = [
            'paniers' => $paniers,
            'products' => $products,
        ];
        $this->view('pages/index',$data);

    }
    

}

