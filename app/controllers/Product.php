<?php 

class Product extends Controller{

    // private $uploader;
    // public function __construct() {
    //     $this->uploader = new Uploader();
    // }

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
        // move file into directory
        if(isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
            $info = getimagesize($_FILES['foto']['tmp_name']);
            $size = $_FILES['foto']['size'];
            $allowedTypes = [IMAGETYPE_JPEG=>'.jpg',
                            IMAGETYPE_PNG=>'.png',
                            IMAGETYPE_GIF=>'.gif'];//accept jpg, png, gif
            if(($info === false) || ($size > 2000000)) {
                $data['error'] = "Bad file format or file size is over 2 MB";
                $this->view('Error', $data);
                exit;
            } elseif (!array_key_exists($info[2], $allowedTypes)) { // no go
                $data['error'] = "Bad file format";
                $this->view('Error', $data);
                exit;
            } else {
                //save the picture in the images folder
                $path = getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR . 'Product' . DIRECTORY_SEPARATOR;
                $filename = uniqid().$allowedTypes[$info[2]];
                move_uploaded_file($_FILES['foto']['tmp_name'], $path.$filename);
            }
        }
        // move file and data into database
        if($this->model('Product_model')->tambahDataProduct($_POST, $filename) > 0) {
            Flasher::setFlash('Data berhasil', 'ditambahkan', 'sukses');
            header('Location: ' . BASEURL . 'Admin/Product');
            exit;
        } else {
            Flasher::setFlash('Data gagal', 'ditambahkan', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Product');
            exit;
        }
}

    public function hapus($id)
    {
        
        // delete foto from local directori
        $Picture = $this->model('Product_model')->getProductById($id);
        unlink(getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. 'Product' . DIRECTORY_SEPARATOR. $Picture['Foto']);
        
        // delete data from database
        if($this->model('Product_model')->hapusDataProduct($id) > 0){
            Flasher::setFlash('Data berhasil', 'dihapus', 'sukses');
            header('Location: ' . BASEURL . 'Admin/Product');
            exit;

        } else{
            Flasher::setFlash('Data gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Product');
            exit;
        }
    }

    public function edit($id){
        $this->model('Product_model')->getProductById($id);
    }
};