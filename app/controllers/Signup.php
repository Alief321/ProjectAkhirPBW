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
                Flasher::setFlash('Data User berhasil', 'ditambahkan', 'sukses');
                header('Location: ' . BASEURL . 'Login');
                exit;
            } else{
                Flasher::setFlash('Data User gagal', 'ditambahkan', 'gagal');
                header('Location: ' . BASEURL . 'Signup');
                exit;
            }
        }
        // if contains integrity contraint in unique field email
        catch (PDOException $e) {
            if ($e->errorInfo[1] == 1062) {
                Flasher::setFlash('Email tersebut sudah', 'terdaftar', 'gagal');
                header('Location: ' . BASEURL . 'Signup');
            }
        }
      
    }
}
?>