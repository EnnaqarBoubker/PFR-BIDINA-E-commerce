<?php

//creat class Panier controller
class Paniers extends Controller
{
    public function __construct()
    {
        $this->prodModel = $this->model('Products');
        $this->userModel = $this->model('User');
        $this->panierModel = $this->model('Panier');
    }

    // creat methode afficher panier
    public function panier()
    {
        // get all products
        $data = [];
        $this->view('pages/panier', $data);
    }


    //creat function to add produit to panier
    public function addToPanier()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form
            $data = $_POST;
                if ($this->panierModel->insertPanier($data)) {
                    $this->userModel->gitUserById($_SESSION['user_id']);
                    redirect('pages/panier');
                } else {
                    die('something went wonrg');
                }
        }
    }
}
