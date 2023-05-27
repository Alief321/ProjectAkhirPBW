<?php 

class Admin extends Controller{
    public function index()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        $id = 1;
        $data['judul'] = "Admin";
        $data['Name'] = $this->model('User_model')->getUserById($id);
        $data['content'] = '../app/views/Admin/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Rekomendasi()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        $data['judul'] = "Rekomendasi";
        $data['rekomendasi'] = $this->model('Rekomendasi_model')->getAllRekomendasi();
        $data['content'] = '../app/views/Admin/Rekomendasi/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Product()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        $data['judul'] = "ProductAdmin";
        $data['product'] = $this->model('Product_model')->getAllProduct();
        $data['content'] = '../app/views/Admin/Product/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Galeri()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        $data['judul'] = "Galeri";
        $data['photos'] = $this->model('Galeri_model')->getAllFoto();
        $data['content'] = '../app/views/Admin/Galeri/index.php';
        $this->view('Templates/Admin', $data);
    }
};