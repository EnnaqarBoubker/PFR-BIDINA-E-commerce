<?php

class DashboardAdmin extends Controller
{

    public function __construct()
    {
        $this->adminModel = $this->model('Admin');
        $this->userModel = $this->model('User');
        $this->prodModel = $this->model('Products');
    }



    public function dashAdm()
    {
        $products = $this->prodModel->countAllProd();
        
        $data = [
            'products' => $products,
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

            // Check for user/email
            if ($this->adminModel->findAdminByEmail($data['email'])) {
                redirect('dashboardAdmin/dashAdm');
            } else {
                $data['password_err'] = 'Password is incorrect';
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Validated
                $logined = $this->adminModel->signin($data['email'], $data['password']);
                if ($logined) {
                    // creat session var
                    $this->creatSessionAdmin($logined);
                    var_dump($logined);
                    exit;
                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('dashboardAdmin/dashAdm', $data);
                }
            } else {
                // Load view with errors
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
        $_SESSION['admin_id'] = $admin->id;
        $_SESSION['admin_name'] = $admin->name;
        $_SESSION['admin_email'] = $admin->email;
        redirect('dashboardAdmin/dashAdm');
    }

    public function logout()
    {
        unset($_SESSION['id_admin']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);

        session_destroy();

        redirect('dashboardAdmin/signin');
    }
}
