<?php

class Admin {

    private $db;

    public function __construct()
    {
        $this -> db = new Database;
    }

    public function signin($email, $password)
    {
        $sql = 'SELECT * FROM `admin` WHERE email = :email';
        $this->db->query($sql);
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        return $row;
    }

     // find user by email            
     public function findAdminByEmail($email)
     {
         $sql = "SELECT * FROM `admin` WHERE email = :email";
         $this->db->query($sql);
         $this->db->bind(':email', $email);
 
          $this->db->single();
 
         if ($this->db->rowCount() > 0) {
             return true;
         } else {
             return false;
         }
     }

     //Find admin by email. Email is passed in by the Controller.
    public function findAdminByEmailAndReturnAdminData($email)
    {
        //Prepared statement
        $this->db->query("SELECT * FROM `admin` WHERE email = '$email'");

        $res = $this->db-> single();

        return $res;
    }

}