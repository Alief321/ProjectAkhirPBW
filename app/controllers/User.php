<?php

class User extends Controller{
    public function index($nama = 'alief', $email = 'alief321'){
        $data['judul'] = "User";
        $data['nama']= $nama;
        $data['email']= $email;
        $data['css'] = "user.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('User/index');
        $this->view('Templates/footer');
    }
}