<?php

class User
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // insert the donner input in the data

    public function signup($data)
    {

        $sql = 'INSERT INTO users (firstName, lastName, phone, email, password, confirm_password) VALUES (:firstName, :lastName, :phone, :email, :password, :confirm_password)';
        $this->db->query($sql);
        // bind value
        $this->db->bind(':firstName', $data['firstName']);
        $this->db->bind(':lastName', $data['lastName']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':confirm_password', $data['confirm_password']);

        // Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function signin($email, $password)
    {
        $sql = 'SELECT * FROM users WHERE email = :email';
        $this->db->query($sql);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    // find user by email
    public function findUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $this->db->query($sql);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }



    // PROFIL $$$$$$$$$$$$$$$$$$$$$$

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmailAndReturnUserData($email)
    {
        //Prepared statement
        $this->db->query('SELECT * FROM users WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        $res = $this->db->resultSet();

        return $res;
    }



    public function editeProfile($data)
    {
        $sql = 'UPDATE users SET firstName = :firstName ,lastName = :lastName ,email = :email ,phone = :phone WHERE id = :id';
        $this->db->query($sql);
        $this -> db -> bind(':id', $_SESSION['user_id']);
        $this -> db -> bind(':firstName', $data['firstName']);
        $this -> db -> bind(':lastName', $data['lastName']);
        $this -> db -> bind(':email', $data['email']);
        $this -> db -> bind(':phone', $data['phone']);

        //Execute function
        if ($this -> db-> execute()) {
            return true;
        } else {
            return false;
        }
    }
}
