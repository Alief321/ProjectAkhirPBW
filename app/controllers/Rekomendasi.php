<?php 

class Rekomendasi extends Controller
{
    public function tambah()
    {
            // move data into database
            if($this->model('Rekomendasi_model')->tambahDataRekomendasi($_POST) > 0) {
                header('Location: ' . BASEURL . 'Admin/Rekomendasi');
                Flasher::setFlash('Data berhasil', 'ditambahkan', 'sukses');
                exit;
            }else {
                Flasher::setFlash('Data gagal', 'ditambahkan', 'gagal');
                header('Location: ' . BASEURL . 'Admin/Rekomendasi');
                exit;
            }
    }
    public function hapus($id)
    {
         // delete data from database
        if( $this->model('Rekomendasi_model')->hapusDataRekomendasi($id) > 0){
            Flasher::setFlash('Data berhasil', 'dihapus', 'sukses');
            header('Location: ' . BASEURL . 'Admin/Rekomendasi');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'dihapus', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Rekomendasi');
            exit;
        }
    }
}
