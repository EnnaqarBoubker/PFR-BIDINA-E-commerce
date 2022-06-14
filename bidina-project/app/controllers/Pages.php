<?php
  class Pages extends Controller {

    public function __construct(){

       $this -> prodModel = $this -> model('Products');
    }

    // methode the affichage index 
    public function index(){

  
      $products = $this->prodModel->affichageProductLimit();
      

    $data = [
      'products' => $products,
    ];
    

      $this -> view('pages/index', $data);
    }
//method affiche le detaille d'un produit
    public function productDet($id){

      // $this->prodModel->getprodById($_GET['id']);
      $data = $this->prodModel->getprodById($id);
    
      $this -> view('pages/productDet', $data);

    }

    public function viewAll(){

  
      $products = $this->prodModel->affichageProduct();
      

    $data = [
      'products' => $products,
    ];
    

      $this -> view('pages/viewAll', $data);
    }
    
   
    public function panier(){

      $data = [
        'title' => 'formulaire Edite product',
      ];

      $this -> view('pages/panier', $data);
    }


    
  }