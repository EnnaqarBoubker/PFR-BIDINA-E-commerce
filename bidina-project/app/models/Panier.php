<?php
class Panier
{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    // git produit by id 
    public function getProdById($id)
    {
        $sql = "SELECT * FROM `products` WHERE id_product = '$id'";
        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
