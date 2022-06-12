<?php
 
 class HeaderDash extends Controller{
     public function __construct()
     {
         $this -> adminModel -> model('Admin');
     }

   public function headerDash()
   {
    $admins = $this -> adminModel -> findAdminByEmail($_SESSION['email']);
    $data = [
        'admins' => $admins,
    ];

    $this -> view('inc/headerDash', $data);
   }
 }