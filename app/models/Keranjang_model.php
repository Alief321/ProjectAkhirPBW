<?php
class Keranjang_model
{
    private $table = 'keranjang';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllKeranjang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getKeranjangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idKeranjang=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataKeranjang($data)
    {
        $query = "INSERT INTO keranjang
                    VALUES 
                    ('', :Nama, :Harga, :Deskripsi, :Stok, :idUser, :idProduct, :Foto)";
        $this->db->query($query);
        $this->db->bind('Nama', $data['nama']);
        $this->db->bind('Deskripsi', $data['deskripsi']);
        $this->db->bind('Harga', $data['harga']);
        $this->db->bind('Stok', $data['stok']);
        $this->db->bind('idUser', $data['idUser']);
        $this->db->bind('idProduct', $data['idProduct']);
        $this->db->bind('Foto', $data['foto']);


        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function hapusDataKeranjang($id){
        $query = "DELETE FROM product WHERE idKeranjang=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }
};