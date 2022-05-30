<?php
  class Pages extends Controller {
    public function __construct(){

    }

    // methode the affichage index 
    public function index(){

      $data = [
        'title' => 'boubker',
      ];

      $this -> view('pages/index', $data);
    }

    public function about(){
    }
  }