<?php

class Login extends Controller{
    public function index(){
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        $data['judul'] = "Login";
        $data['css'] = "Login.css";
        $this->view('Templates/header', $data);
        $this->view('Login/index');
        session_unset();
        session_destroy();

        setcookie('email', '', time()-3600);
        setcookie('key', '', time()-3600) ;
        setcookie('role', '', time()-3600) ;
        setcookie('id', '', time()-3600);
    }
}