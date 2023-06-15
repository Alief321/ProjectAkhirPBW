<?php 
class Pesanan extends Controller{
    public function index($id, $idk){
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        $data['judul'] = "Pesanan";
        $data['css'] = "Pesanan.css";
        $data['pesanan'] = $this->model('Product_model')->getProductById($id);
        $data['keranjang'] = $this->model('Keranjang_model')->getKeranjangbyId($idk);
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Pesanan/index', $data);
        $this->view('Templates/footer');
    }

    public function tambah(){
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
                $path = getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. 'Bukti' . DIRECTORY_SEPARATOR;
                $filename = uniqid().$allowedTypes[$info[2]];
                move_uploaded_file($_FILES['foto']['tmp_name'], $path.$filename);
            }
        }

        // move file and data into database
        if($this->model('Pesanan_model')->tambahDataPesanan($_POST, $filename) > 0) {
            $this->model('Keranjang_model')-> hapusDataKeranjang($_POST['idKer']);
            $this->model('Product_model')->minstok($_POST['idProd']);
            $this->model('Keranjang_model')->minstokKeranjang($_POST['idProd']);
            Flasher::setFlash('Item berhasil', 'dibeli', 'sukses');
            header('Location: ' . BASEURL . 'Keranjang');
            exit;
        } else{
            Flasher::setFlash('Item gagal', 'dibeli', 'gagal');
            header('Location: ' . BASEURL . 'Keranjang');
            exit;
        }
    }

    public function approve($id){
        if($this->model('Pesanan_model')->editStatus($id) > 0) {
            Flasher::setFlash('Pesanan berhasil', 'diapprove', 'sukses');
            header('Location: ' . BASEURL . 'Admin/Pesanan_done');
            exit;
        } else{
            Flasher::setFlash('Pesanan gagal', 'diapprove', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Pesanan');
            exit;
        }
    }

    public function showFoto(){
        $data['foto'] =  $this->model('Pesanan_Model')->showFotoById($_GET['id']);
        return $data['foto'];
    }

    public function hapus($id){
        $Picture = $this->model('Pesanan_model')->getPesananById($id);
        unlink(getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. 'Bukti' . DIRECTORY_SEPARATOR. $Picture['Bukti_invoice']);
          // delete data from database
          if( $this->model('Pesanan_model')-> hapusDataPesanan($id) > 0){
            Flasher::setFlash('Data berhasil', 'dihapus', 'sukses');
            header('Location: ' . BASEURL . 'Admin/Pesanan');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Pesanan');
            exit;
        }
    }
}