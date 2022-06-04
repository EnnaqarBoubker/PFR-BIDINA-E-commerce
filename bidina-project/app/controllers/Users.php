<?php

class Users extends Controller
{
    public function __construct(){
        $this -> userModel = $this -> model('User');
    }

    public function signup()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
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

            // validate first name input
            if(empty($data['firstName'])){
                $data['firstName_err'] = 'Enter your First Name';
            }

            // validate last name input
            if(empty($data['lastName'])){
                $data['lastName_err'] = 'Enter your Last Name';
            }

            // validate email input
            if(empty($data['email'])){
                $data['email_err'] = 'Enter your email';
            }else{
                //check mail
                if($this -> userModel -> verifAcoun($data['email'])){
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // validate phone input
            if(empty($data['phone'])){
                $data['phone_err'] = 'Enter your phone';
            }

            // validate password input
            if(empty($data['password'])){
                $data['password_err'] = 'Enter your password';
            }elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least 6 characters';
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
                // Validated
                die('SUCCESS');
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
            ];

            // validate email input
            if(empty($data['email'])){
                $data['email_err'] = 'Enter your email';
            }

            // validate password input
            if(empty($data['password'])){
                $data['password_err'] = 'Enter your password';
            }


             // Make sure errors are empty
             if(empty($data['email_err']) && empty($data['password_err'])){
                // Validated
                die('SUCCESS');
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
                
            ];

            $this->view('users/signin', $data);
        }
    }
}