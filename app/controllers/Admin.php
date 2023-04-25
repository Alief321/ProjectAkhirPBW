<?php 

class Admin extends Controller{
    public function index()
    {
        $id = 1;
        $data['judul'] = "Admin";
        $data['Name'] = $this->model('User_model')->getUserById($id);
        $data['content'] = '../app/views/Admin/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Rekomendasi()
    {
        $data['judul'] = "Rekomendasi";
        $data['rekomendasi'] = $this->model('Rekomendasi_model')->getAllRekomendasi();
        $data['content'] = '../app/views/Admin/Rekomendasi/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Product()
    {
        $data['judul'] = "ProductAdmin";
        $data['product'] = $this->model('Product_model')->getAllProduct();
        $data['content'] = '../app/views/Admin/Product/index.php';
        $this->view('Templates/Admin', $data);
    }
    public function Galeri()
    {
        $data['judul'] = "Galeri";
        $data['photos'] = $this->model('Galeri_model')->getAllFoto();
        $data['content'] = '../app/views/Admin/Galeri/index.php';
        $this->view('Templates/Admin', $data);
    }
};