<?php

class User extends Controller{

    public function index(){
        $id = 1;
        $data['judul'] = "User";
        $data['User']= $this->model('User_model')->getUserById($id);
        $data['css'] = "user.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('User/index', $data);
        $this->view('Templates/footer');
    }

    public function tambah()
    {
        if( $this->model('User_model')->tambahDataUser($_POST) > 0){
            header('Location: ' . BASEURL . 'Admin');
            exit;
        }
    }
}