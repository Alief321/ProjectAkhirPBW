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
    public function getAllProductSortedByOlder()
    {
        $this->db->query('SELECT * FROM ' . $this->table . 'ORDER BY idProduct DESC');
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
                    ('', :Nama, :Deskripsi, :Harga, :Stok, :Category, default, :Foto, 0)";
        $this->db->query($query);
        $this->db->bind('Nama', $data['nama']);
        $this->db->bind('Deskripsi', $data['deskripsi']);
        $this->db->bind('Harga', $data['harga']);
        $this->db->bind('Stok', $data['stok']);
        $this->db->bind('Category', $data['kategori']);
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
    public function getHint($suggest, $filter, $sort)
    {
        $query = "SELECT * From product WHERE Nama Like '%$suggest%' ORDER BY $filter $sort";
        $this->db->query($query);
        $data = $this->db->resultSet();
            echo json_encode($data);
        return $data;
    }
    public function getHintCategory($suggest, $category,  $filter, $sort)
    {
        $query = "SELECT * From product WHERE Nama Like '%$suggest%' AND Category=:category ORDER BY $filter $sort";
        $this->db->query($query);
        $this->db->bind('category', $category);
        $data = $this->db->resultSet();
            echo json_encode($data);
        return $data;
    }

    public function filter($filter, $sort){
        $query = "SELECT * From product ORDER BY $filter $sort";
        $this->db->query($query);
        $data = $this->db->resultSet();
            echo json_encode($data);
        return $data;
    }

    public function filterGroup($filter, $sort, $group){
        $query = "SELECT * From product WHERE Category=:category ORDER BY $filter $sort";
        $this->db->query($query);
        $this->db->bind('category', $group);
        $data = $this->db->resultSet();
            echo json_encode($data);
        return $data;
    }

    public function showProductById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idProduct=:id');
        $this->db->bind('id', $id);
        $data = $this->db->single();
            echo json_encode($data);
        return $data;
    }
    public function updateProduct($data, $file, $id){
            $query = "UPDATE product 
                        SET Nama=:nama, Deskripsi=:deskripsi, Harga=:harga, Stok=:stok, Category=:kategori, Foto=:foto
                        WHERE idProduct=:id";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('deskripsi', $data['deskripsi']);
            $this->db->bind('harga', $data['harga']);
            $this->db->bind('stok', $data['stok']);
            $this->db->bind('kategori', $data['kategori']);
            $this->db->bind('foto', $file);
            $this->db->bind('id', $id);
    
            $this->db->execute();
            
            return $this->db->rowCount();
        }

    public function countByCategory(){
        $query = "SELECT Category, COUNT(*) as count FROM product GROUP BY Category";
        $this->db->query($query);
        $data = $this->db->resultSet();
            echo json_encode($data);
        return $data;
    }

    public function minstok($id){

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE idProduct=:id');
        $this->db->bind('id', $id);
        $data = $this->db->single();

        $count = $data['Stok'];
        $query = "UPDATE product 
                SET Stok=:stok WHERE idProduct=:id";
         $this->db->query($query);
         $this->db->bind('stok', $count-1);
         $this->db->bind('id', $id);

         $this->db->execute();
            
         return $this->db->rowCount();
    }
    }