<?php
class Home extends Controller{
    public function index(){
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        if (!isset($_SESSION['email']) && !isset($_POST['email']) ) {
            header('Location:'. BASEURL .'Login');
        }else{
       
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            if ( $this->model('User_model')->validateUser($_SESSION['email'], $_SESSION['password']) <= 0) {
                header('Location:'. BASEURL .'Login');
            }
        }
        $data['judul'] = "Home";
        $data['css'] = "home.css";
        $data['rekomendasi'] = $this->model("Rekomendasi_model")->getLastRekomendasi();
        $data['galeri'] = $this->model("Galeri_model")->getLastFoto();
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Home/index', $data);
        $this->view('Templates/footer');
    }
}