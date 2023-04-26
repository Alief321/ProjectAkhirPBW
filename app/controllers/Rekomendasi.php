<?php 

class Rekomendasi extends Controller
{
    public function tambah()
    {
        if(isset($_POST)) {
            $this->model('Rekomendasi_model')->tambahDataRekomendasi($_POST);
            header('Location: ' . BASEURL . 'Admin/Rekomendasi');
            exit;
        }
    }

    public function hapus($id)
    {
        if(isset($id)){
            Flasher::setFlash('Data berhasil', 'dihapus', 'sukses');
            $this->model('Rekomendasi_model')->hapusDataRekomendasi($id);
            header('Location: ' . BASEURL . 'Admin/Rekomendasi');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Rekomendasi');
            exit;
        }
    }
}
