<?php
class Galeri_model{
    private $table = 'galery';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllFoto()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getFotoById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idGaleri=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataGaleri($data)
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