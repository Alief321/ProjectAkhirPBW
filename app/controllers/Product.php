<?php 

class Product extends Controller{
    public function index()
    {
        $data['judul'] = "Product";
        $data['css'] = "product.css";
        $data['product'] = $this->model('Product_model')->getAllProduct();
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Product/index');
        $this->view('Templates/footer');
    }
    public function detail(){
        
        $data['judul'] = "Detail Product";
        $data['css'] = "Detail-Product.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Product/detail');
        $this->view('Templates/footer');
    }

    public function tambah()
    {
        if(isset($_POST)){
            Flasher::setFlash('Data berhasil', 'ditambahkan', 'sukses');
            $this->model('Product_model')->tambahDataProduct($_POST);
            header('Location: ' . BASEURL . 'Admin/Product');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'ditambahkan', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Product');
            exit;
        }
    }

    public function hapus($id)
    {
        if(isset($id)){
            Flasher::setFlash('Data berhasil', 'dihapus', 'sukses');
            $this->model('Product_model')->hapusDataProduct($id);
            header('Location: ' . BASEURL . 'Admin/Product');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Product');
            exit;
        }
    }

};