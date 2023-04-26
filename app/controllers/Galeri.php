<?php 

class Galeri extends Controller
{
    public function tambah()
    {
        if(isset($_POST)) {
            $this->model('Galeri_model')->tambahDataGaleri($_POST);
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        }
    }

    public function hapus($id)
    {
        if(isset($id)){
            Flasher::setFlash('Data berhasil', 'dihapus', 'sukses');
            $this->model('Galeri_model')->hapusDataGaleri($id);
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        }
    }
}