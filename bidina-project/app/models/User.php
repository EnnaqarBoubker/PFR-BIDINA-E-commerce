<?php

    class User{

        private $db;

        public function __construct(){
             $this->db = new Database;
        }

        // find user by email
        public function verifAcoun($email){
            $sql = "SELECT * FROM users WHERE email = :email";
            $this -> db -> query($sql);
            $this -> db -> bind(':email', $email);

            $row = $this -> db -> single();

            if ($this -> db -> rowCount() > 0) {
                return true;
            }else{
                return false;
            }

        }
       
    }