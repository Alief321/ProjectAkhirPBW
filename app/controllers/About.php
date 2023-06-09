<?php

class About extends Controller{
    public function index(){
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        // cek cookie
        include('../app/lib/cookieCheck.php');
        if ($_SESSION['login']== false) {
            header('Location:'. BASEURL .'Login');
        }
        $data['judul'] = "About Us";
        $data['css'] = "AboutUs.css";
        $data['foto']= $this->model("Galeri_model")->getAllFoto();
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar',  $data);
        $this->view('About/index', $data);
        $this->view('Templates/footer');
    }
}