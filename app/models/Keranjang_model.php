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
    public function getKeranjangByIdProduct($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idProduct=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    public function getKeranjangUser($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idUser=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function tambahDataKeranjang($data, $idUser)
    {
        $query = "INSERT INTO keranjang
                    VALUES 
                    ('', :Nama, :Harga, :Deskripsi, :Stok, :idUser, :idProduct, :Foto)";
        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('Deskripsi', $data['Deskripsi']);
        $this->db->bind('Harga', $data['Harga']);
        $this->db->bind('Stok', $data['Stok']);
        $this->db->bind('idUser', $idUser);
        $this->db->bind('idProduct', $data['idProduct']);
        $this->db->bind('Foto', $data['Foto']);


        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function hapusDataKeranjang($id){
        $query = "DELETE FROM keranjang WHERE idKeranjang=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }
};