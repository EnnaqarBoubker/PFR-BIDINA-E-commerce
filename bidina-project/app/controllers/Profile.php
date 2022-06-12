<?php

class Profile extends Controller
{

  public function __construct()
  {
    // if(!isLoggedIn()){
    //   redirect('users/signin');
    // }
    $this->userModel = $this -> model('User');
  }

  public function profile()
  {

    $posts = $this -> userModel -> findUserByEmailAndReturnUserData($_SESSION['user_email']);

    $data = [
      'title' => 'formulaire Edite product',
      'posts' => $posts,
    ];


    $this->view('profile/profile', $data);
  }


  


  // public function editeProfile($id){

  //   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //     // process form
  //     $data = [
  //       'id' => $id,
  //       'firstName' => trim(htmlspecialchars($_POST['firstName'])),
  //       'lastName' => trim(htmlspecialchars($_POST['lastName'])),
  //       'email' => trim(htmlspecialchars($_POST['email'])),
  //       'phone' => trim(htmlspecialchars($_POST['phone'])),
  //       'user_id' => $_SESSION['user_id'],
  //       'firstName_error' => '',
  //       'lastName_error' => '',
  //       'email_error' => '',
  //       'phone_error' => ''
  //     ];

  //     $nameValidation = "/^[a-zA-Z' ]*$/";
  //     $phoneValidation = "/^[0-9]*$/";
  //     $emailValidation = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

  //     //verifier firs Name
  //     if (empty($data['firstName'])) {
  //       $data['firstName_error'] = 'Enter your First Name';
  //     } elseif (!preg_match($nameValidation, $data['firstName'])) {
  //       $data['firstName_error'] = 'First Name can only contain letters';
  //     }

  //     //verifier last Name
  //     if (empty($data['lastName'])) {
  //       $data['lastName_error'] = 'Enter your last Name';
  //     } elseif (!preg_match($nameValidation, $data['lastName'])) {
  //       $data['lastName_error'] = 'last Name can only contain letters';
  //     }

  //     //verifier email
  //     if (empty($data['email'])) {
  //       $data['email_error'] = 'Enter your Email';
  //     } elseif (!preg_match($emailValidation, $data['email'])) {
  //       $data['email_error'] = 'Email can only contain letters';
  //     }

  //     //verifier firs Name
  //     if (empty($data['phone'])) {
  //       $data['phone_error'] = 'Enter your Phone';
  //     } elseif (!preg_match($phoneValidation, $data['phone'])) {
  //       $data['phone_error'] = 'Phone can only contain letters';
  //     }

  //     // Make sure errors are empty
  //     if (empty($data['firstName_error']) && empty($data['lastName_error']) && empty($data['email_error']) && empty($data['phone_error'])) {

  //       //Register user from model function
  //       $prof = $this -> userModel -> editeProfile($data) ;
  //       if ($prof) {
  //         redirect('profile/profile');
  //       } else {
  //         die('Something went wrong.');
  //       }
  //     } else {
  //       // Load view with errors
  //       $this -> view('profile/profile', $data);
  //     }
  //   } else {

  //     $post = $this -> userModel -> findUserById($id);

  //      // Check for owner
  //      if($post->user_id != $_SESSION['user_id']){
  //       redirect('/profile/editeProfile');
  //     }

  //     $data = [
  //       'id' => $id,
  //       'firstName' => $post -> firstName,
  //       'lastName' => $post -> lastName,
  //       'email' =>  $post -> email,
  //       'phone' =>  $post -> phone,
  //     ];
      
  //     $this -> view('profile/editeProfile', $data);
  //   }
  // }

  
  // public function editeProfile($id){

    

  //   if($_SERVER['REQUEST_METHOD'] == 'GET'){
      
  //     $data = [
  //     'firstName' => trim(htmlspecialchars($_POST['firstName'])),
  //     'lastName' => trim(htmlspecialchars($_POST['lastName'])),
  //     'email' => trim(htmlspecialchars($_POST['email'])),
  //     'phone' => trim(htmlspecialchars($_POST['phone'])),
  //     'firstName_error' => '',
  //     'lastName_error' => '',
  //     'email_error' => '',
  //     'phone_error' => ''
  //   ];
  //     $user = $this -> userModel -> gitUserById($id);
  //     $this -> view('profile/editeProfile', (array)$user);
  //   }elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
  //     // $data = $_POST;
  //     // $this -> userModel -> editeProfile($data, $id);
  //     // $this -> view('profile/profile');


  //     // process form
  //     $data = [
  //       'firstName' => trim(htmlspecialchars($_POST['firstName'])),
  //       'lastName' => trim(htmlspecialchars($_POST['lastName'])),
  //       'email' => trim(htmlspecialchars($_POST['email'])),
  //       'phone' => trim(htmlspecialchars($_POST['phone'])),
  //       'firstName_error' => '',
  //       'lastName_error' => '',
  //       'email_error' => '',
  //       'phone_error' => ''
  //     ];

  //     // $nameValidation = "/^[a-zA-Z' ]*$/";
  //     // $phoneValidation = "/^[0-9]*$/";
  //     // $emailValidation = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

  //     //verifier firs Name
  //     if (empty($data['firstName'])) {
  //       $data['firstName_error'] = 'Enter your First Name';
  //     } 

  //     //verifier last Name
  //     if (empty($data['lastName'])) {
  //       $data['lastName_error'] = 'Enter your last Name';
  //     } 

  //     //verifier email
  //     if (empty($data['email'])) {
  //       $data['email_error'] = 'Enter your Email';
  //     } 

  //     //verifier firs Name
  //     if (empty($data['phone'])) {
  //       $data['phone_error'] = 'Enter your Phone';
  //     } 

  //     // Make sure errors are empty
  //     if (empty($data['firstName_error']) && empty($data['lastName_error']) && empty($data['email_error']) && empty($data['phone_error'])) {

  //       //Register user from model function
  //       $this -> userModel -> editeProfile($data, $id) ;
  //       $this -> view('profile/profile');
  //   } else {
  //     $data = [
  //       'id' => '',
  //       'firstName' => '',
  //       'lastName' => '',
  //       'email' =>  '',
  //       'phone' => '',
  //     ];
      
  //     $this -> view('profile/editeProfile', $data);
  //   }

  // }

  // }


  public function editeProfile($id){
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
      $user = $this->userModel->gitUserById($id);
      $this -> view('profile/editeProfile',(array) $user);

   }else if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $data =  $_POST;
      $this->userModel->editeProfile($data, $id);
      redirect('/profile/profile');
   }
  }


  public function createnewUserSession($data)
  {
    $_SESSION['user_firstName'] = $data['firstName'];
    $_SESSION['user_lastName'] = $data['lastName'];
    $_SESSION['user_email'] = $data['email'];
    $_SESSION['user_phone'] = $data['phone'];
  }

}
