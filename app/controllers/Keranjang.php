<?php 

class Keranjang extends Controller{
    public function index()
    {
        $data['judul'] = "Keranjang";
        $data['css'] = "Keranjang.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Keranjang/index');
        $this->view('Templates/footer');
    }
};