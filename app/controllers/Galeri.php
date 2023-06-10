<?php 

class Galeri extends Controller
{
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
                $path = getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. 'Galeri' . DIRECTORY_SEPARATOR;
                $filename = uniqid().$allowedTypes[$info[2]];
                move_uploaded_file($_FILES['foto']['tmp_name'], $path.$filename);
            }
        }

        // move file and data into database
        if($this->model('Galeri_model')->tambahDataGaleri($_POST, $filename) > 0) {
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
         // delete foto from local directori
         $Picture = $this->model('Galeri_Model')->getFotoById($id);
         unlink(getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. 'Galeri' . DIRECTORY_SEPARATOR.$Picture['Path']);
         
         // delete data from database
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
    
    public function showFoto(){
        $data['foto'] =  $this->model('Galeri_Model')->showFotoById($_GET['id']);
        return $data['foto'];
    }

    public function update($id){

        // delete foto from local directori
        $Picture = $this->model('Galeri_Model')->getFotoById($id);
        unlink(getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. 'Galeri' . DIRECTORY_SEPARATOR.$Picture['Path']);

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
                $path = getcwd().DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR. 'Galeri' . DIRECTORY_SEPARATOR;
                $filename = uniqid().$allowedTypes[$info[2]];
                move_uploaded_file($_FILES['foto']['tmp_name'], $path.$filename);
            }
        }

        // move file and data into database
        if($this->model('Galeri_model')->updateGaleri($id, $_POST['nama'], $filename) > 0) {
            Flasher::setFlash('Data berhasil', 'diupdate', 'sukses');
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        } else{
            Flasher::setFlash('Data gagal', 'diupdate', 'gagal');
            header('Location: ' . BASEURL . 'Admin/Galeri');
            exit;
        }
    }
}