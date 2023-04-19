<?php 

class Product extends Controller{
    public function index()
    {
        $data['judul'] = "Product";
        $data['css'] = "product.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Product/index');
        $this->view('Templates/footer');
    }
    public function detail(){
        
        $data['judul'] = "Product name";
        $data['css'] = "Detail-Product.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar');
        $this->view('Product/detail');
        $this->view('Templates/footer');
    }
};