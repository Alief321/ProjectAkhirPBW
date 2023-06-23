<?php

class User extends Controller{

    public function index(){
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        // cek cookie
        include('../app/lib/cookieCheck.php');
        if ($_SESSION['login']== false) {
            header('Location:'. BASEURL .'Login');
        }
        $data['judul'] = "User";
        $data['User']= $this->model('User_model')->getUserByEmail($_SESSION['email']);
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

    public function update()
    {
        if ($this->model('User_model')->updateUser($_POST, $_SESSION['idUser']) > 0) {
            Flasher::setFlash('Data User berhasil', 'diedit', 'sukses');
            header('Location: ' . BASEURL . 'User');
            exit;
        }
        else {
            Flasher::setFlash('Data User gagal', 'diedit', 'gagal');
            header('Location: ' . BASEURL . 'User');
            exit;
        }
    }
}