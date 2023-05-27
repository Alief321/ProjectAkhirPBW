<?php 

class Keranjang extends Controller{
    public function index()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        $data['judul'] = "Keranjang";
        $data['css'] = "Keranjang.css";
        $data['keranjang'] = $this->model('Keranjang_model')->getAllKeranjang();
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Keranjang/index', $data);
        $this->view('Templates/footer');
    }

    public function tambah()
    {
            // move data into database
            if($this->model('Keranjang_model')->tambahDataKeranjang($_POST) > 0) {
                header('Location: ' . BASEURL . 'Product');
                Flasher::setFlash('Data berhasil', 'ditambahkan', 'sukses');
                exit;
            }else {
                Flasher::setFlash('Data gagal', 'ditambahkan', 'gagal');
                header('Location: ' . BASEURL . 'Product');
                exit;
            }
    }
    public function hapus($id)
    {
         // delete data from database
        if( $this->model('Rekomendasi_model')->hapusDataKeranjang($id) > 0){
            Flasher::setFlash('Data berhasil', 'dihapus', 'sukses');
            header('Location: ' . BASEURL . 'Keranjang');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Keranjang');
            exit;
        }
    }
};