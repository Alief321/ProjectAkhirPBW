<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = "Login";
        $data['css'] = "Login.css";
        $this->view('Templates/header', $data);
        $this->view('Login/index');
    }
}