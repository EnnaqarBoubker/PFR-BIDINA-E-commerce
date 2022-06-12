<?php
class DashAdmProd extends Controller
{

  public function __construct()
  {
    $this->prodModel = $this->model('Products');
  }


  public function dashProd()
  {

    $products = $this->prodModel->affichageProduct();

    $data = [
      'products' => $products,
    ];

    $this->view('dashAdmProd/dashProd', $data);
  }




  public function addProd()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'titre' => trim(htmlspecialchars($_POST['titre'])),
        'sold' => trim(htmlspecialchars($_POST['sold'])),
        'allPrix' => trim(htmlspecialchars($_POST['allPrix'])),
        'categoris' => trim(htmlspecialchars($_POST['categoris'])),
        // 'prod_id' => $_SESSION['id_product'],
        'error_titre' => '',
        'error_sold' => '',
        'error_allPrix' => '',
        'error_categoris' => '',
      ];

      $validationPrix = "/^[0-9]*$/";
      $validationTitre =  "/^[a-zA-Z' ]*$/";

      //validation the titre product
      if (empty($data['titre'])) {
        $data['error_titre'] = 'Enter title product';
      } elseif (!preg_match($validationTitre, $data['titre'])) {
        $data['error_titre'] = 'titre can only contain letters';
      }

      //validation the sold product
      if (empty($data['sold'])) {
        $data['error_sold'] = 'Enter Sold product';
      } elseif (!preg_match($validationPrix, $data['sold'])) {
        $data['error_sold'] = 'Sold can only contain letters';
      }

      //validation the allPrix product
      if (empty($data['allPrix'])) {
        $data['error_allPrix'] = 'Enter title product';
      } elseif ($data['sold'] > $data['allPrix']) {
        $data['error_allPrix'] = 'All Pris can only be more than a sold';
      }


      // Make sure errors are empty
      if (empty($data['error_titre']) && empty($data['error_sold']) && empty($data['error_allPrix'])) {
        // function add Product
        if ($this->prodModel->addProduct($data)) {
          redirect('dashAdmProd/dashProd');
        } else {
          die('something went wonrg');
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
    $this->view('dashAdmProd/addProd', $data);
  }



  // public function editeProd($id)
  // {

  //   if($_SERVER['REQUEST_METHOD'] == 'GET'){

  //      $product = $this -> prodModel -> getprodById($id);

  //         $this->view('dashAdmProd/editeProd', (array)$product);

  //  }elseif($_SERVER['REQUEST_METHOD'] == 'POST') {

  //     $data = [
  //       'titre' => trim(htmlspecialchars($_POST['titre'])),
  //       'sold' => trim(htmlspecialchars($_POST['sold'])),
  //       'allPrix' => trim(htmlspecialchars($_POST['allPrix'])),
  //       'categoris' => trim(htmlspecialchars($_POST['categoris'])),
  //       'error_titre' => '',
  //       'error_sold' => '',
  //       'error_allPrix' => '',
  //       'error_categoris' => '',
  //     ];

  //     $validationPrix = "/^[0-9]*$/";
  //     $validationTitre = "/^(?!0\d)\d*(\.\d+)?$/";

  //     //validation the titre product
  //     if (empty($data['titre'])) {
  //       $data['error_titre'] = 'Enter title product';
  //     }

  //     //validation the sold product
  //     if (empty($data['sold'])) {
  //       $data['error_sold'] = 'Enter Sold product';
  //     } elseif (!preg_match($validationPrix, $data['sold'])) {
  //       $data['error_sold'] = 'Sold can only contain letters';
  //     }

  //     //validation the allPrix product
  //     if (empty($data['allPrix'])) {
  //       $data['error_allPrix'] = 'Enter title product';
  //     } elseif ($data['sold'] > $data['allPrix']) {
  //       $data['error_allPrix'] = 'allPrix can only contain letters';
  //     }


  //     // Make sure errors are empty
  //     if (empty($data['error_titre']) && empty($data['error_sold']) && empty($data['error_allPrix'])) {
  //       // function edite Product

  //       $data = $this->prodModel->editeProduct($data, $id);

  //       if($data){
  //         redirect('/dashAdmProd/dashProd');
  //       }else{
  //         die('Something went wrong');
  //       }
  //     } else {

  //       $data = [
  //         'id' => $_SESSION['prod_id'],
  //         'titre' => '',
  //         'sold' =>'',
  //         'allPrix' => '',
  //         'categoris' => '',
  //         'prod_id' => '',
  //         'error_titre' => '',
  //         'error_sold' => '',
  //         'error_allPrix' => '',
  //         'error_categoris' => '',
  //       ];

  //       $this->view('dashAdmProd/editeProd',$data);
  //     }
  //   }


  public function editeProd($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      $product = $this->prodModel->getprodById($id);
      $this->view('dashAdmProd/editeProd', (array) $product);
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'titre' => trim(htmlspecialchars($_POST['titre'])),
        'sold' => trim(htmlspecialchars($_POST['sold'])),
        'allPrix' => trim(htmlspecialchars($_POST['allPrix'])),
        'categoris' => trim(htmlspecialchars($_POST['categoris'])),
        'error_titre' => '',
        'error_sold' => '',
        'error_allPrix' => '',
      ];
      if (empty($data['titre'])) {
        $data['error_titre'] = 'wrong';
      }
      if (empty($data['sold'])) {
        $data['error_sold'] = 'wrong';
      }
      if (empty($data['allPrix'])) {
        $data['error_allPrix'] = 'wrong';
      }

      if (empty($data['error_titre']) && empty($data['error_sold']) && empty($data['error_allPrix'])) {
        $data =  $_POST;
        if ($this->prodModel->editeProduct($data, $id)) {
          redirect('/dashAdmProd/dashProd');
        }
      } else {

        $data = [
          'titre' => '',
          'sold' => '',
          'allPrix' => '',
          'categoris' => '',
          'error_titre' => '',
          'error_sold' => '',
          'error_allPrix' => '',
        ];
      }
    }
  }




















  

  public function delete($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Get existing post from model
      $data =  $this->prodModel->getprodById($id);
      // Check for owner
      if ($data['id'] != $_SESSION['id_product']) {

        redirect('/dashAdmProd/dashProd');
      }
      if ($this->prodModel->deleteProduct($id)) {
        redirect('/dashAdmProd/dashProd');
      } else {
        die('Something went wrong');
      }
    } else {
      echo 'is wrong';
      // redirect('/dashAdmProd/dashProd');;
    }
  }
}
