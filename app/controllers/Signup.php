<?php
class Signup extends Controller{
    public function index(){
        $data['judul'] = "SignUp";
        $data['css'] = "Login.css";
        $this->view('Templates/header', $data);
        $this->view('Login/signup');
    }
}
?>