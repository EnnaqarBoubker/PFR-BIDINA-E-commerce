<?php
  class Pages extends Controller {
    public function __construct(){

    }

    // methode the affichage index 
    public function index(){

      $data = [
        'title' => 'Home',
      ];

      $this -> view('pages/index', $data);
    }

    public function signin(){

      $data = [
        'title' => 'Signin User',
      ];

      $this -> view('pages/signin', $data);
    }
    public function signup(){

      $data = [
        'title' => 'Signin User',
      ];

      $this -> view('pages/signup', $data);
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
  }