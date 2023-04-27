<?php 

class Galeri extends Controller
{
    public function tambah()
    {
        if($this->model('Galeri_model')->tambahDataGaleri($_POST) > 0) {
            Flasher::setFlash('Data berhasil', 'ditambahkan', 'sukses');
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'ditambahkan', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Galeri_model')->hapusDataGaleri($id) > 0){
            Flasher::setFlash('Data berhasil', 'dihapus', 'sukses');
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        }
    }
}