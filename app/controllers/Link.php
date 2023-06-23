<?php

class Link extends Controller{
    public function index(){
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        // cek cookie
        include('../app/lib/cookieCheck.php');
        if ($_SESSION['login']== false) {
            header('Location:'. BASEURL .'Login');
        }

        $data['judul'] = "Link";
        $data['css'] = "Link.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Link/index');
        $this->view('Templates/footer');
    }
}