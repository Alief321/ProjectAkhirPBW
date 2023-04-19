<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = "Home";
        $data['css'] = "home.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Home/index');
        $this->view('Templates/footer');
    }
}