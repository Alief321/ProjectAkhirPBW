<?php

class About extends Controller{
    public function index(){
        $data['judul'] = "About Us";
        $data['css'] = "AboutUs.css";
        $data['foto']= $this->model("Galeri_model")->getAllFoto();
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar',  $data);
        $this->view('About/index', $data);
        $this->view('Templates/footer');
    }
}