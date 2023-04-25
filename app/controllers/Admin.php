<?php 

class Admin extends Controller{
    public function index()
    {
        $data['judul'] = "Admin";
        $data['Name'] = "Bambang";
        $data['content'] = '../app/views/Admin/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Rekomendasi()
    {
        $data['judul'] = "Rekomendasi";
        $data['content'] = '../app/views/Admin/Rekomendasi/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Product()
    {
        $data['judul'] = "ProductAdmin";
        $data['content'] = '../app/views/Admin/Product/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Galeri()
    {
        $data['judul'] = "Galeri";
        $data['content'] = '../app/views/Admin/Galeri/index.php';
        $this->view('Templates/Admin', $data);
    }
};