<?php 

class Keranjang extends Controller{
    public function index()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        // cek cookie
        if(isset($_COOKIE['key']) && isset($_COOKIE['email'])){
            $email = $_COOKIE['email'];
            $key = $_COOKIE['key'];

            $row = $this->model('User_model')->getUserByEmail($email);

            if($key == $row['Password']){
                $_SESSION['login'] == true;
            }
        }
        if ($_SESSION['login']== false) {
            header('Location:'. BASEURL .'Login');
        }
        
        $data['judul'] = "Keranjang";
        $data['css'] = "Keranjang.css";
        $data['keranjang'] = $this->model('Keranjang_model')->getKeranjangUser($_SESSION['idUser']);
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Keranjang/index', $data);
        $this->view('Templates/footer');
    }

    public function tambah($id)
    {
            // mencari data product
            $data = $this->model('Product_model')->getProductById($id);

            // move data into database
            if($this->model('Keranjang_model')->tambahDataKeranjang($data, $_SESSION['idUser']) > 0) {
                Flasher::setFlash('Keranjang berhasil', 'ditambahkan', 'sukses');
                header('Location: ' . BASEURL . 'Keranjang');
                exit;
            }else {
                Flasher::setFlash('Keranjang gagal', 'ditambahkan', 'gagal');
                header('Location: ' . BASEURL . 'Product');
                exit;
            }
    }
    public function hapus($id)
    {
         // delete data from database
        if( $this->model('Keranjang_model')->hapusDataKeranjang($id) > 0){
            Flasher::setFlash('Keranjang berhasil', 'dihapus', 'sukses');
            header('Location: ' . BASEURL . 'Keranjang');
            exit;
        } else{
            Flasher::setFlash('Keranjang gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Keranjang');
            exit;
        }
    }
};