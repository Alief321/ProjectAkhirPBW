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

    public function getPesananByApprove($approve)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Status=:app');
        $this->db->bind('app', $approve);
        return $this->db->resultSet();
    }


    public function tambahDataPesanan($data, $file)
    {
        $query = "INSERT INTO pesanan
                    VALUES 
                    ('', :Nama, :Harga, :bukti, default, :id)";
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

    public function editStatus($id){
        $query = "UPDATE pesanan
                    SET Status=:status WHERE idPesanan=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('status', 1);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }
    
    public function showFotobyId($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idPesanan=:id');
        $this->db->bind('id', $id);
        $data = $this->db->single();
            echo json_encode($data);
        return $data;
    }
}