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
        $query = "INSERT INTO galery
                    VALUES
                    ('', :pathGalery, :Nama)";
        $this->db->query($query);
        $this->db->bind('pathGalery', $data['foto']);
        $this->db->bind('Nama', $data['nama']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataGaleri($id){
        $query = "DELETE FROM galery WHERE idFoto=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }
}