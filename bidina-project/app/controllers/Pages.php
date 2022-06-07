<?php
  class Pages extends Controller {
    public function __construct(){

    }

    // methode the affichage index 
    public function index(){

      $data = [
        'title' => 'khalid',
      ];

      $this -> view('pages/index', $data);
    }

 
    
   
    public function panier(){

      $data = [
        'title' => 'formulaire Edite product',
      ];

      $this -> view('pages/panier', $data);
    }


    
  }