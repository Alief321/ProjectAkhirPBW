<?php
class Signup extends Controller{
    public function index(){
        $data['judul'] = "SignUp";
        $data['css'] = "Login.css";
        $this->view('Templates/header', $data);
        $this->view('Login/signup');
    }
    
    public function tambah(){
        try {
            if($this->model('User_model')->tambahDataUser($_POST) > 0) {
                header('Location: ' . BASEURL . 'Auth');
                exit;
            } else{
                Flasher::setFlash('Data User gagal', 'ditambahkan', 'gagal');
                header('Location: ' . BASEURL . 'Signup');
                exit;
            }
        }
        catch (\PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                Flasher::setFlash('Email tersebut sudah', 'terdaftar', 'gagal');
                header('Location: ' . BASEURL . 'Signup');
            }
        }
      
    }
}
?>