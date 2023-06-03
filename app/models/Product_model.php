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

    // getproductby category
    public function getProductByCategory($category)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Category=:category');
        $this->db->bind('category', $category);
        return $this->db->resultSet();
    }

    public function tambahDataProduct($data, $file)
    {
        $query = "INSERT INTO product
                    VALUES 
                    ('', :Nama, :Deskripsi, :Harga, :Stok, :Category, :LinkShopee, :LinkTokped, :LinkBiliBli, :LinkLazada, :LinkBukalapak, default, :Foto, 0)";
        $this->db->query($query);
        $this->db->bind('Nama', $data['nama']);
        $this->db->bind('Deskripsi', $data['deskripsi']);
        $this->db->bind('Harga', $data['harga']);
        $this->db->bind('Stok', $data['stok']);
        $this->db->bind('Category', $data['kategori']);
        $this->db->bind('LinkShopee', $data['shopee']);
        $this->db->bind('LinkTokped', $data['tokped']);
        $this->db->bind('LinkBiliBli', $data['blibli']);
        $this->db->bind('LinkLazada', $data['lazada']);
        $this->db->bind('LinkBukalapak', $data['bukalapak']);
        $this->db->bind('Foto', $file);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function hapusDataProduct($id){
        $query = "DELETE FROM product WHERE idProduct=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        
        return $this->db->rowCount();
    }

    public function toRekom($data){
        $query = "UPDATE product SET isRekom=:isRekom WHERE idProduct=:idProduct";
        $this->db->query($query);
        $this->db->bind('isRekom', 1);
        $this->db->bind('idProduct', $data['idProduct']);
        $this->db->execute();
    }
    
    // uncheck higlight
    public function delRekom($id){
        $query = "UPDATE product SET isRekom=:isRekom WHERE idProduct=:idProduct";
        $this->db->query($query);
        $this->db->bind('isRekom', 0);
        $this->db->bind('idProduct', $id);
        $this->db->execute();
    }

    // gethint
    public function getHint($suggest)
    {
        $query = "SELECT * From product WHERE Nama Like '%$suggest%'";
        $this->db->query($query);
        $data = $this->db->resultSet();
        // // lookup all hints if query result is not empty
        // $hint = "";
        // if ($data) {
        //     foreach($data as $row) {
        //         if ($hint === "") {
        //         $hint = $row["Nama"];
        //         } else {
        //             $hint .= ", " .$row["Nama"];
        //         }
        //     }
        // }
        // // Output "no suggestion" if no hint was found or output correct values
        foreach ($data as $value) {
            echo $value["Nama"], "<br>";
        }
        return $data;
    }
}