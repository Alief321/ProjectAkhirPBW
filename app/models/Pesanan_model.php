<?php
class Pesanan_model{
    private $table = 'pesanan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPesanan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getPesananById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idPesanan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function tambahDataPesanan($data, $file)
    {
        $query = "INSERT INTO pesanan
                    VALUES 
                    ('', :Nama, :Harga, default, :id, :bukti)";
        $this->db->query($query);
        $this->db->bind('Nama', $data['nama']);
        $this->db->bind('Harga', $data['harga']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('bukti', $file);
        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function hapusDataPesanan($id){
        $query = "DELETE FROM product WHERE idPesanan=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    }