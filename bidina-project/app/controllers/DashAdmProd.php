<?php
class DashAdmProd extends Controller{

    public function __construct(){
        $this -> prodModel = $this -> model('Products');
    }


    public function dashProd(){
      
        $data['data'] = $this -> prodModel->affichageProduct();

        $this -> view('dashAdmProd/dashProd',$data);
    }

     

      
    public function addProd(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $data = [
          'titre' => trim(htmlspecialchars($_POST['titre'])),
          'sold' => trim(htmlspecialchars($_POST['sold'])),
          'allPrix' => trim(htmlspecialchars($_POST['allPrix'])),
          'categoris' => trim(htmlspecialchars($_POST['categoris'])),
          'error_titre' => '',
          'error_sold' => '',
          'error_allPrix' => '',
          'error_categoris' => '',
        ];

        $validationPrix = "/^[0-9]*$/";
        $validationTitre = "/^(?!0\d)\d*(\.\d+)?$/";

        //validation the titre product
        if (empty($data['titre'])) {
          $data['error_titre'] = 'Enter title product';
        }

        //validation the sold product
        if (empty($data['sold'])) {
          $data['error_sold'] = 'Enter Sold product';
        }elseif(!preg_match($validationPrix, $data['sold'])){
          $data['error_sold'] = 'Sold can only contain letters';
        }

        //validation the allPrix product
        if (empty($data['allPrix'])) {
          $data['error_allPrix'] = 'Enter title product';
        }elseif($data['sold'] > $data['allPrix']){
          $data['error_allPrix'] = 'allPrix can only contain letters';
        }


      // Make sure errors are empty
        if(empty($data['error_titre']) && empty($data['error_sold']) && empty($data['error_allPrix']) ){
          // function add Product
        if ( $this -> prodModel -> addProduct($data)) {
              redirect('dashAdmProd/dashProd');
        }else{
            echo 'something went wonrg';
        }
        } else {
          // Load view with errors
          $this->view('dashAdmProd/addProd', $data);
        }

        } else {
        // load form
        // echo 'load form';
        // init data
        $data = [
          'titre' => '',
          'sold' => '',
          'allPrix' => '',
          'error_titre' => '',
          'error_sold' => '',
          'error_allPrix' => '',
        ];


      }
        $this -> view('dashAdmProd/addProd', $data);
    }



    public function editeProd(){
  
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $data = [
          'titre' => trim(htmlspecialchars($_POST['titre'])),
          'sold' => trim(htmlspecialchars($_POST['sold'])),
          'allPrix' => trim(htmlspecialchars($_POST['allPrix'])),
          'categoris' => trim(htmlspecialchars($_POST['categoris'])),
          'error_titre' => '',
          'error_sold' => '',
          'error_allPrix' => '',
          'error_categoris' => '',
        ];

        $validationPrix = "/^[0-9]*$/";
        $validationTitre = "/^(?!0\d)\d*(\.\d+)?$/";

        //validation the titre product
        if (empty($data['titre'])) {
          $data['error_titre'] = 'Enter title product';
        }

        //validation the sold product
        if (empty($data['sold'])) {
          $data['error_sold'] = 'Enter Sold product';
        }elseif(!preg_match($validationPrix, $data['sold'])){
          $data['error_sold'] = 'Sold can only contain letters';
        }

        //validation the allPrix product
        if (empty($data['allPrix'])) {
          $data['error_allPrix'] = 'Enter title product';
        }elseif($data['sold'] > $data['allPrix']){
          $data['error_allPrix'] = 'allPrix can only contain letters';
        }


      // Make sure errors are empty
        if(empty($data['error_titre']) && empty($data['error_sold']) && empty($data['error_allPrix']) ){
          // function edite Product

          $getEditeMod = $this -> prodModel -> editProduct($data);
          
        if ($getEditeMod) {
              $this -> createProductSession($data);
              redirect('dashAdmProd/dashProd');
        }else{
            echo 'something went wonrg';
        }
        } else {
          // Load view with errors
          $this->view('dashAdmProd/editeProd', $data);
        }

        } else {
        // load form
        // echo 'load form';
        // init data
        $data = [
          'titre' => '',
          'sold' => '',
          'allPrix' => '',
          'error_titre' => '',
          'error_sold' => '',
          'error_allPrix' => '',
        ];


      }
  
        $this -> view('dashAdmProd/editeProd', $data);
    }

   public function createProductSession($data)
   {
     $_SESSION['prod_titre'] = $data['titre'];
     $_SESSION['prod_sold'] = $data['sold'];
     $_SESSION['prod_allPrix'] = $data['allPrix'];
     $_SESSION['prod_categoris'] = $data['categoris'];
   }
}
