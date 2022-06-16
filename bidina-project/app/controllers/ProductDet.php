<?php

//creat class product detail controller
class ProductDet extends Controller
{
  public function __construct()
  {
    $this->prodModel = $this->model('Products');
    $this->userModel = $this->model('User');
    $this->panierModel = $this->model('Panier');
  }

  //method affiche le detaille d'un produit
  public function productDet($id)
  {
    
    $data = $this->prodModel->getprodById($id);

    $this->view('pages/productDet', $data);
  }

  
  

  
}
