<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = "Home";
        $data['css'] = "home.css";
        $data['rekomendasi'] = $this->model("Rekomendasi_model")->getLastRekomendasi();
        $data['galeri'] = $this->model("Galeri_model")->getLastFoto();
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Home/index', $data);
        $this->view('Templates/footer');
    }
}