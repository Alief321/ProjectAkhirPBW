<?php 

class Admin extends Controller{
    public function index()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        if ($_SESSION["role"]!= "admin") {
            header("Location: ". BASEURL . "Home");
        } 
        $data['judul'] = "Admin";
        $data['Name'] = $this->model('User_model')->getUserByEmail($_SESSION["email"]);
        $data['content'] = '../app/views/Admin/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Rekomendasi()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        if ($_SESSION["role"]!= "admin") {
            header("Location: ". BASEURL . "Home");
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
        if ($_SESSION["role"]!= "admin") {
            header("Location: ". BASEURL . "Home");
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
        if ($_SESSION["role"]!= "admin") {
            header("Location: ". BASEURL . "Home");
        } 
        $data['judul'] = "Galeri";
        $data['photos'] = $this->model('Galeri_model')->getAllFoto();
        $data['content'] = '../app/views/Admin/Galeri/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Pesanan()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        if ($_SESSION["role"]!= "admin") {
            header("Location: ". BASEURL . "Home");
        }  
        $data['judul'] = "Pesanan";
        $data['pesanan'] = $this->model('Pesanan_model')->getPesananByApprove(0);
        $data['content'] = '../app/views/Admin/Pesanan/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Pesanan_done()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        if ($_SESSION["role"]!= "admin") {
            header("Location: ". BASEURL . "Home");
        }  
        $data['judul'] = "Pesanan";
        $data['pesanan'] = $this->model('Pesanan_model')->getPesananByApprove(1);
        $data['content'] = '../app/views/Admin/Pesanan/done.php';
        $this->view('Templates/Admin', $data);
    }
};