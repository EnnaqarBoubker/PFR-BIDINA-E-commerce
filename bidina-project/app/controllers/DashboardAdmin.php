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
        $messages = $this->userModel->countAllMessage();

        $data = [
            'products' => $products,
            'users' => $users,
            'messages' => $messages,
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


    //creat function message from user
    public function message()
    {
        $messages = $this->userModel->getAllMessage();

        $data = [
            'messages' => $messages,
        ];

        $this->view('dashboardAdmin/message', $data);
    }
    
}
