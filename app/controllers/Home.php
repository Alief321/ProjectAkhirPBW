<?php
class Home extends Controller{
    public function index(){
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        // cookie check
        include('../app/lib/cookieCheck.php');
        if ($_SESSION['login']== false) {
            header('Location:'. BASEURL .'Login');
        }else{
            if ( $this->model('User_model')->validateUser($_SESSION['email'], $_SESSION['password']) <= 0) {
                header('Location:'. BASEURL .'Login');
                Flasher::setFlash('Password atau Email', 'salah', 'gagal');
                exit;
            }
        }
        $data['judul'] = "Home";
        $data['css'] = "home.css";
        $data['rekomendasi'] = $this->model("Rekomendasi_model")->getLastRekomendasi();
        $data['galeri'] =  $this->model("Galeri_model")->getLastFoto();
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Home/index', $data);
        $this->view('Templates/footer');
    }
}