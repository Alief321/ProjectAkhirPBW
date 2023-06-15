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

    public function getKeranjangByIdProductrow($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idProduct=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getKeranjangUser($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idUser=:id ORDER BY idKeranjang DESC');
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

    public function hapusDataKeranjangFromProd($id){
        $query = "DELETE FROM keranjang WHERE idProduct=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function update($data, $Foto, $id)
    {
        $query = "UPDATE keranjang SET Nama=:nama,  Deskripsi=:desk,  Harga=:harga, Stok=:stok, Foto=:foto WHERE idProduct=:id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('desk', $data['deskripsi']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('stok', $data['stok']);
        $this->db->bind('id', $id);
        $this->db->bind('foto', $Foto);


        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function minstokKeranjang($id){

        $this->db->query('SELECT * FROM product WHERE idProduct=:id');
        $this->db->bind('id', $id);
        $data = $this->db->single();

        $count = $data['Stok'];
        $query = "UPDATE keranjang 
                SET Stok=:stok WHERE idProduct=:id";
         $this->db->query($query);
         $this->db->bind('stok', $count);
         $this->db->bind('id', $id);

         $this->db->execute();
            
         return $this->db->rowCount();
    }
};