<?php
  class Pages extends Controller {

    public function __construct(){

      $this -> prodModel -> model('Products');
    }

    // methode the affichage index 
    public function index(){

  
      $products = $this->prodModel->affichageProduct();
      

    $data = [
      'products' => $products,
    ];
die(var_dump($products));

      $this -> view('pages/index', $data);
    }
    
   
    public function panier(){

      $data = [
        'title' => 'formulaire Edite product',
      ];

      $this -> view('pages/panier', $data);
    }


    
  }