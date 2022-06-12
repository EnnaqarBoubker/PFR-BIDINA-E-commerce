<?php

class Admin {

    private $db;

    public function __construct()
    {
        $this -> db = new Database;
    }

    public function signin($email, $password)
    {
        $sql = 'SELECT * FROM `admin` WHERE email = :email and password = :password' ;
        $this->db->query($sql);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $row = $this->db->single();

        if (!empty($row)) {
            return $row;
        }else{
            return false;
        }
    }

     // find user by email
     public function findUserByEmail($email)
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
    public function findAdminByEmailAndReturnAdminData($id)
    {
        //Prepared statement
        $this->db->query("SELECT * FROM `admin` WHERE email = '$id'");

        $res = $this->db-> single();

        return $res;
    }

}