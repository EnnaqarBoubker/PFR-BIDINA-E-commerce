<?php

//creat class Panier controller
class Paniers extends Controller
{
    public function __construct()
    {

        $this->panierModel = $this->model('Panier');
    }

    //creat method affichie product in panier
    // public function panier()
    // {
    //     $products = $this->panierModel->affichagePanier();

    //     $data = [
    //         'products' => $products,
    //     ];

    //     $this->view('pages/panier', $data);
    // }







    //creat function to add produit to panier
    public function addToPanier()
    {

        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $row = $this->panierModel->getAllProdFromPanier();
            // process form
            $data = $_POST;
        foreach ($row as $key) {
         if ($key->id_product == $_POST['id_product'] && $key->id_user == $_SESSION['user_id']) {
            $data['id_product'] = $key->id_product;
            $data['id_user'] = $key->id_user;
            $data['quantity'] = $key->quantity + $_POST['quantity'];
            $this->panierModel->updateQuantityProdFromPanier($key->id_product, $_SESSION['user_id'], $data['quantity']);
            redirect('pages/panier');
            return;
        }
    }
            if ($this->panierModel->insertPanier($data)) {
                redirect('pages/panier');
            } else {
                die('something went wonrg');
            }
        }
    }

    //delete produit from panier by id produit and id user

    public function deleteProdFromPanier($id_product)
    {
        $id_user = $_SESSION['user_id'];
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if ($this->panierModel->deleteProdFromPanierById($id_product, $id_user)) {

                redirect('pages/panier');
            } else {
                die('something went wonrg');
            }
        }
    }
}
