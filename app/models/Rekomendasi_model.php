<?php
class Rekomendasi_model{
    private $table = 'rekomendasi';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllRekomendasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getRekomendasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idrekomendasi=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataRekomendasi($data)
    {
        $query = "INSERT INTO user
                    VALUES
                    ('', :Name, :Email, :Password, :ConPassword)";
        $this->db->query($query);
        $this->db->bind('Nama', $data['name']);
        $this->db->bind('Email', $data['email']);
        $this->db->bind('Password', $data['password']);
        $this->db->bind('ConPassword', $data['password2']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}