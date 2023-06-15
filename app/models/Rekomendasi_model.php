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
    public function getRekomendasiByIdProductrow($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idProduct=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getLastRekomendasi()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY idRekomendasi DESC LIMIT 3');
        return $this->db->resultSet();
    }

    public function tambahDataRekomendasi($data)
    {
        $query = "INSERT INTO rekomendasi
                    VALUES
                    ('', :Nama, :Harga, :Deskripsi, :Foto, :idProduct)";
        $this->db->query($query);
        $this->db->bind('Nama', $data['nama']);
        $this->db->bind('Harga', $data['harga']);
        $this->db->bind('Deskripsi', $data['deskripsi']);
        $this->db->bind('Foto', $data['foto']);
        $this->db->bind('idProduct', $data['idProduct']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataRekomendasi($id){
        $query = "DELETE FROM rekomendasi WHERE idrekomendasi=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function hapusDataRekomendasifromProduct($id){
        $query = "DELETE FROM rekomendasi WHERE idProduct=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function update($data, $id)
    {
        $query = "UPDATE rekomendasi SET Nama=:nama,  Deskripsi=:desk,  Harga=:harga WHERE idProduct=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('desk', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }
}