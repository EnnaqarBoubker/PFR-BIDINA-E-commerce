<?php 
class Products {

    private $db;

    public function __construct()
    {
        $this -> db = new Database;
    }

    public function affichageProduct()
    {
        $sql = 'SELECT * FROM `products`';
        $this -> db -> query($sql);
        
       return $this -> db -> resultSet();
    }


    public function addProduct($data)
    {
        $sql = 'INSERT INTO `products` (`titre`, `sold`, `allPrix`, `categoris`) VALUES (:titre, :sold, :allPrix, :categoris)';
        $this -> db -> query($sql);
        $this -> db -> bind(':titre', $data['titre']);
        $this -> db -> bind(':sold', $data['sold']);
        $this -> db -> bind(':allPrix', $data['allPrix']);
        $this -> db -> bind(':categoris', $data['categoris']);

        // Execute
        if ($this -> db -> execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editeProduct($data,$id)
    {
        $sql = "UPDATE products SET titre = :titre ,sold = :sold, allPrix = :allPrix, categoris = :categoris WHERE id_product = '$id'";
        $this->db->query($sql);
        // $this -> db -> bind(':id', $data['id']);
        $this -> db -> bind(':titre', $data['titre']);
        $this -> db -> bind(':sold', $data['sold']);
        $this -> db -> bind(':allPrix', $data['allPrix']);
        $this -> db -> bind(':categoris', $data['categoris']);

        //Execute function
        if ($this -> db-> execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getprodById($id){
        $this->db->query('SELECT * FROM `products` WHERE id_product = :id');
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
  
        return $row;
    }


    public function deleteProduct($id)
    {
        $this->db->query('DELETE FROM products WHERE id_product = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}