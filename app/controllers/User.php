<?php

class User extends Controller{

    public function index(){
        $data['judul'] = "User";
        $data['nama']= $this->model('User_model')->getName('1');
        $data['email']= $this->model('User_model')->getEmail('1');
        $data['css'] = "user.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('User/index', $data);
        $this->view('Templates/footer');
    }
}