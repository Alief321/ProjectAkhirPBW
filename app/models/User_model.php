<?php
class User_model{
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idUser=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
    public function getUserByEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Email=:Email');
        $this->db->bind('Email', $email);
        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO user
                    VALUES
                    ('', :Name, :Email, :Password, :ConPassword, DEFAULT)";
        $this->db->query($query);
        $this->db->bind('Name', $data['nama']);
        $this->db->bind('Email', $data['email']);
        $this->db->bind('Password', hash('sha1',$data['password']));
        $this->db->bind('ConPassword', hash('sha1',$data['password']));

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function validateUser($email, $password){
        $query = "SELECT * FROM " . $this->table . " WHERE Email=:email and Password=:Pass";
        $this->db->query($query);
        $this->db->bind('email', $email);
        $this->db->bind('Pass',hash('sha1',$password));
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateUser($data, $idUser)
    {
        $query = "UPDATE " . $this->table . " SET Password =:Pass, ConPassword =:Pass2 WHERE idUser=:iduser";
        $this->db->query($query);
        $this->db->bind('iduser', $idUser);
        $this->db->bind('Pass',hash('sha1',$data['Password']));
        $this->db->bind('Pass2',hash('sha1',$data['PasswordBaru']));
        
        $this->db->execute();
        return $this->db->rowCount();
    }
}