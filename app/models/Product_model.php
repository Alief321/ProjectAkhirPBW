<?php
class Product_model{
    private $table = 'product';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllProduct()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getProductById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idProduct=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataProduct($data)
    {
        $query = "INSERT INTO product
                    VALUES
                    ('', :Nama, :Deskripsi, :Harga, :Stok, :Category, :LinkShopee, :LinkTokped, :LinkBiliBli, :LinkLazada, :LinkBukalapak, '', :Foto)";
        $this->db->query($query);
        $this->db->bind('Nama', $data['nama']);
        $this->db->bind('Deskripsi', $data['Deskripsi']);
        $this->db->bind('Harga', $data['Harga']);
        $this->db->bind('Stok', $data['Stok']);
        $this->db->bind('Category', $data['Kategori']);
        $this->db->bind('LinkShopee', $data['shopee']);
        $this->db->bind('LinkTokped', $data['Tokped']);
        $this->db->bind('LinkBiliBli', $data['blibli']);
        $this->db->bind('LinkLazada', $data['Lazada']);
        $this->db->bind('LinkBukalapak', $data['bukalapak']);
        $this->db->bind('Foto', $data['foto']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}