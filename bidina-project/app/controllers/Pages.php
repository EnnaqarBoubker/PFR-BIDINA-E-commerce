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

 
    
    public function dashAdm(){

      $data = [
        'title' => 'dashAdmin',
      ];

      $this -> view('pages/dashAdm', $data);
    }
    public function dashProd(){

      $data = [
        'title' => 'dashproduct',
      ];

      $this -> view('pages/dashProd', $data);
    }
    public function dashAdmUse(){

      $data = [
        'title' => 'dashboard Admin User',
      ];

      $this -> view('pages/dashAdmUse', $data);
    }
    public function addProd(){

      $data = [
        'title' => 'formulaire add product',
      ];

      $this -> view('pages/addProd', $data);
    }
    public function editeProd(){

      $data = [
        'title' => 'formulaire Edite product',
      ];

      $this -> view('pages/editeProd', $data);
    }
    public function panier(){

      $data = [
        'title' => 'formulaire Edite product',
      ];

      $this -> view('pages/panier', $data);
    }
  }