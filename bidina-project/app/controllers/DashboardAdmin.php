<?php

class DashboardAdmin extends Controller
{

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->userModel = $this->model('User');
        $this->prodModel = $this->model('Products');

    // creat condition check if admin is loggedin 
    // if not redirect to login page
    // if (isset($_SESSION['admin_id'])) {
    //     if ($_SESSION['admin_id'] == 0) {
    //         redirect('dashboardAdmin/signin');
    //     }
    // } else {
    //     redirect('dashboardAdmin/signin');
    // }
    
    
    }



    public function dashAdm()
    {
        $products = $this->prodModel->countAllProd();
        $users = $this->userModel->countAllUser();

        $data = [
            'products' => $products,
            'users' => $users,
        ];

        $this->view('dashboardAdmin/dashAdm', $data);
    }



    public function dashAdmUse()
    {
        $posts = $this->userModel->getAllUsers();

        $data = [
            'posts' => $posts,
        ];

        $this->view('dashboardAdmin/dashAdmUse', $data);
    }

    //creat method signin from admin

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
            if (empty($data['email'])) {
                $data['email_err'] = 'Enter your email';
            }

            // validate password input
            if (empty($data['password'])) {
                $data['password_err'] = 'Enter your password';
            } 
            
            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {


            $loggedIn = $this->adminModel->signin($data['email'], $data['password']);
        //    echo 'lihihoh';
        

                if ($loggedIn) {
                    $this->creatSessionAdmin($loggedIn);
                    redirect('dashboardAdmin/dashAdm');
                } else {
                    $_SESSION['admin_email'] = $data['email'];
                    redirect('dashboardAdmin/dashAdm');
                }
            } else {
                $data['password_err'] = 'Password or email is incorrect. Please try again.';

                $this->view('dashboardAdmin/signin', $data);
            } 
            
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            $this->view('dashboardAdmin/signin', $data);
        }
    }

    //creat session admin
    public function creatSessionAdmin($admin)
    {
        $_SESSION['admin_id'] = $admin->id_admin;
        $_SESSION['admin_name'] = $admin->name;
        $_SESSION['admin_email'] = $admin->email;
        $_SESSION['admin_password'] = $admin->password;
        redirect('dashboardAdmin/dashAdm');
    }

    public function logout()
    {
        unset($_SESSION['id_admin']);
        unset($_SESSION['admin_name']);
        unset($_SESSION['admin_email']);
        unset($_SESSION['admin_password']);

        session_destroy();

        redirect('dashboardAdmin/signin');
    }


    //creat function message from user
    public function message()
    {
        $posts = $this->userModel->getAllMessage();

        $data = [
            'posts' => $posts,
        ];

        $this->view('dashboardAdmin/message', $data);
    }
    
}
