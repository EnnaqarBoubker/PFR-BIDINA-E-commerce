<?php

class DashboardAdmin extends Controller
{

    public function __construct()
    {
        $this -> adminModel = $this -> model('Admin');
    }

    // public function dashIndex()

    public function dashAdm()
    {

        $data = [
            'title' => 'dashAdmin',
        ];

        $data['data'] = $this -> adminModel -> findAdminByEmailAndReturnAdminData($_SESSION['admin_email']);


        $this->view('dashboardAdmin/dashAdm', $data);
    }

    public function dashAdmUse()
    {

        $data = [
            'title' => 'dashboard Admin User',
        ];

        $this->view('dashboardAdmin/dashAdmUse', $data);
    }


    public function dashIndex()
    {
        
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form

            $data = [
                'email' => trim(htmlspecialchars($_POST['email'])),
                'password' => trim(htmlspecialchars($_POST['password'])),
                'email_erro' => '',
                'password_erro' => '',
            ];

            $passwordValidation = "/^(.{0,6}|[^a-z]*|[^\d]*)$/i";
            $emailValidation = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

            // validate email input
            if (empty($data['email'])) {
                $data['email_erro'] = 'Enter your email';
            } elseif (!preg_match($emailValidation, $data['email'])) {
                $data['email_erro'] = 'E-mail can only contain letters .';
            }

            // validate password input
            if (empty($data['password'])) {
                $data['password_erro'] = 'Enter your password';
            } elseif (!preg_match($passwordValidation, $data['email'])) {
                $data['password_erro'] = 'Password must be at least 6 characters.';
            }


            // check for user / email
            if ($this->adminModel->findUserByEmail($data['email'])) {
                //user found
            } else {
                //user is not
                $data['email_erro'] = 'User Not found';
            }


            // Make sure errors are empty
            if (empty($data['email_erro']) && empty($data['password_erro'])) {
                // Validated
                $logined = $this -> adminModel -> signin($data['email'], $data['password']);

                if($logined){
                    //creat session var
                    $this->creatSessionAdmin($logined);
                }else{
                    $data['password_erro'] = 'Password or email is incorrect. Please try again.';
                    // redirect to next page
                    $this->view('dashboardAdmin/dashAdm', $data);
                    
                    
                }
            } else {
                // Load view with errors
                $this->view('dashboardAdmin/dashIndex', $data);
            }
        } else {
            // load form
            // echo 'load form';
            // init data
            $data = [
                'email' => '',
                'password' => '',
                'email_erro' => '',
                'password_erro' => '',

            ];

            $this->view('dashboardAdmin/dashIndex', $data);
        }
    }
         // the session makes server identify the information user;
    public function creatSessionAdmin($user)
    {
       $_SESSION['id_admin'] = $user -> id_admin; // the id came from model
       $_SESSION['user_name'] = $user -> name;
       $_SESSION['user_email'] = $user -> email;
       $_SESSION['user_password'] = $user -> password;
       
       redirect('dashboardAdmin/dashAdm');
    }

    public function logout()
    {
       unset($_SESSION['id_admin']);
       unset($_SESSION['name']);
       unset($_SESSION['email']);
       unset($_SESSION['password']);

       session_destroy();
       redirect('dashboardAdmin/dashIndex');
    }
    
}
