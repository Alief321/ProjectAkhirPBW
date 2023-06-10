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
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idFoto=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getLastFoto()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT 4');
        return $this->db->resultSet();
    }

    public function tambahDataGaleri($data, $file)
    {
        $query = "INSERT INTO galery
                    VALUES
                    ('', :pathGalery, :Nama)";
        $this->db->query($query);
        $this->db->bind('pathGalery', $file);
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

    public function showFotobyId($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idFoto=:id');
        $this->db->bind('id', $id);
        $data = $this->db->single();
            echo json_encode($data);
        return $data;
    }

    public function updateGaleri($id, $data, $file){
        $query = "UPDATE galery SET Nama=:nama, Path=:pathGalery WHERE idFoto=:id";
        $this->db->query($query);
        $this->db->bind('pathGalery', $file);
        $this->db->bind('nama', $data);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}