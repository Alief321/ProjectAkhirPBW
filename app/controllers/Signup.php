<?php
class Signup extends Controller{
    public function index(){
        $data['judul'] = "SignUp";
        $data['css'] = "Login.css";
        $this->view('Templates/header', $data);
        $this->view('Login/signup');
    }
    public function tambah(){
        if($this->model('User_model')->tambahDataUser($_POST) > 0) {
            header('Location: ' . BASEURL . 'Auth');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'ditambahkan', 'gagal');
            header('Location: ' . BASEURL . 'Signup');
            exit;
        }
    }
}
?>