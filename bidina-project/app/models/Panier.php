<?php
class Panier
{

    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }


    // creat method insert produit to panier
    public function insertPanier($data)
    {
        $sql = 'INSERT INTO `panier`( `img`, `titre`, `sold`, `allPrix`, `id_product`) VALUES (:img, :titre, :sold, :allPrix, :id_product)';
        $this->db->query($sql);
        $this->db->bind(':img', $data['img']);
        $this->db->bind(':titre', $data['titre']);
        $this->db->bind(':sold', $data['sold']);
        $this->db->bind(':allPrix', $data['allPrix']);
        $this->db->bind(':id_product', $data['id_product']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //creat method get all produit from panier by id user
    public function getAllPanier($id)
    {
        $sql = 'SELECT * FROM `panier` WHERE id_user = :id';
        $this->db->query($sql);
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }

    
}
