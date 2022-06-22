<?php

class DashboardAdmin extends Controller
{

    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->prodModel = $this->model('Products');
        $this->commandModel=$this->model('Command');
    
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



    public function command()
    {
        $data = $this->commandModel->getAllCommand();
        $this->view('dashboardAdmin/command', $data);
    }
    
}
