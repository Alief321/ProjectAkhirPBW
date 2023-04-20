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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idUser =:idUser)');
        $this->db->bind('idUser', $id);
        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO user
                    VALUES
                    ('', :Name, :Email, :Password, :ConPassword)";
        $this->db->query($query);
        $this->db->bind('Name', $data['name']);
        $this->db->bind('Email', $data['email']);
        $this->db->bind('Password', $data['password']);
        $this->db->bind('ConPassword', $data['password2']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}