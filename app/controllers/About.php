<?php

class About extends Controller{
    public function index(){
        $data['judul'] = "About Us";
        $data['css'] = "AboutUs.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar',  $data);
        $this->view('About/index');
        $this->view('Templates/footer');
    }
}