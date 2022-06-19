<?php

class Users extends Controller{

    public function __construct(){
        $this -> userModel = $this -> model('User');
    }

    public function signup()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form
            $data = [
                'firstName' => trim(htmlspecialchars($_POST['firstName'])),
                'lastName' => trim(htmlspecialchars($_POST['lastName'])),
                'email' => trim(htmlspecialchars($_POST['email'])),
                'phone' => trim(htmlspecialchars($_POST['phone'])),
                'password' => trim(htmlspecialchars($_POST['password'])),
                'confirm_password' => trim(htmlspecialchars($_POST['confirm_password'])),
                'firstName_err' => '',
                'lastName_err' => '',
                'email_err' => '',
                'phone_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];


            // validation with regix

            $nameValidation = "/^[a-zA-Z' ]*$/";
            $phoneValidation = "/^[0-9]*$/";
            $passwordValidation = "/^(.{0,6}|[^a-z]*|[^\d]*)$/i";
            $emailValidation = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

            // validate first name input
            if(empty($data['firstName'])){
                $data['firstName_err'] = 'Enter your First Name';
            }elseif (!preg_match($nameValidation, $data['firstName'])) {
                $data['firstName_err'] = 'First Name can only contain letters .';
            }

            // validate last name input
            if(empty($data['lastName'])){
                $data['lastName_err'] = 'Enter your Last Name';
            }elseif (!preg_match($nameValidation, $data['lastName'])) {
                $data['lastName_err'] = 'Last Name can only contain letters .';
            }

            // validate email input
            if(empty($data['email'])){
                $data['email_err'] = 'Enter your email';
            }elseif (!preg_match($emailValidation, $data['email'])) {
                $data['email_err'] = 'E-mail can only contain letters .';
            }
            else{
                //check mail
                if($this -> userModel -> findUserByEmail($data['email'])){
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // validate phone input
            if(empty($data['phone'])){
                $data['phone_err'] = 'Enter your phone';
            }elseif (!preg_match($phoneValidation, $data['phone'])) {
                $data['phone_err'] = 'Phone can only contain letters .';
            }

            // validate password input
            if(empty($data['password'])){
                $data['password_err'] = 'Enter your password';
            }elseif (!preg_match($passwordValidation, $data['password'])) {
                $data['password'] = 'Password must be at least 6 characters.';
            }

            // validate coonfirm password input
            if(empty($data['confirm_password'])){
                $data['confirm_password_err'] = 'Enter your Confirm Password';
            }else{
                if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err'] = 'Password is not match';
                }
            }
            // Make sure errors are empty
            if(empty($data['firstName_err']) && empty($data['lastName_err']) && empty($data['email_err']) && empty($data['phone_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
    
                // creat count signup
               if ( $this -> userModel -> signup($data)) {
                    redirect('users/signin');
               }else{
                   echo 'something went wonrg';
               }
            } else {
                // Load view with errors
                $this->view('users/signup', $data);
            }

        } else {
            // load form
            // echo 'load form';
            // init data
            $data = [ 
                'firstName' => '',
                'lastName' => '',
                
                'email' => '',
                'phone' => '',
                
                'password' => '',
                'confirm_password' => '',
                'firstName_err' => '',
                'lastName_err' => '',
                'email_err' => '',
                'phone_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            $this->view('users/signup', $data);
        }
    }


    public function signin()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form

            $data = [
                'email' => trim(htmlspecialchars($_POST['email'])),
                'password' => trim(htmlspecialchars($_POST['password'])),
                'email_err' => '',
                'password_err' => '',
                'fullName' => '',
                'role' => '',
            ];

            // validate email input
            if(empty($data['email'])){
                $data['email_err'] = 'Enter your email';
            }

            // validate password input
            if(empty($data['password'])){
                $data['password_err'] = 'Enter your password';
            }


            // check for user / email
            if($this -> userModel -> findUserByEmail($data['email'])){
                //user found
            }else{
                //user is not
                $data['email_err'] = 'User Not found';
            }


             // Make sure errors are empty
             if(empty($data['email_err']) && empty($data['password_err'])){
            
                    $user = $this -> userModel -> signin($data['email'], $data['password']);
                    if($user){
                        $data['role'] = $user -> role;
                        // if user found
                        if($data['role'] !== 'admin'){
                            // create session
                            $this->creatSessionUser($user);
                            return redirect('pages/index');
                        }else{
                            $this->creatSessionUser($user);
                            return redirect('dashboardAdmin/dashAdm');
                        }
                    }
                    else{
                        // if user not found
                        $data['password_err'] = 'Password Incorrect';
                        $this->view('users/signin', $data);
                    }
            } else {
                // Load view with errors
                $this->view('users/signin', $data);
            }

        } else {
            // load form
            // echo 'load form';
            // init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
                'fullName' => '',
                'role' => '',
                
            ];

            $this->view('users/signin', $data);
        }
    }
    // the session makes server identify the information user;
    public function creatSessionUser($user)
    {
        $_SESSION['user_id'] = $user -> id; // the id came from model
        $_SESSION['user_firstName'] = $user -> firstName;
        $_SESSION['user_lastName'] = $user -> lastName;
        $_SESSION['user_fullName'] = $user -> fullName;
        $_SESSION['user_email'] = $user -> email;
        $_SESSION['user_phone'] = $user -> phone;
        $_SESSION['user_role'] = $user -> role;

       redirect('pages/index');
    }

    public function logout()
    {
       unset($_SESSION['user_id']);
       unset($_SESSION['user_email']);
       unset($_SESSION['user_password']);


       session_destroy();
       redirect('pages/index');
    }
}
