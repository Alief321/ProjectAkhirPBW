<?php
 
class Flasher {

    public static function setFlash($pesan, $aksi, $tipe){
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '<span class="'. $_SESSION['flash']['tipe'] .'">' . $_SESSION['flash']['pesan'] . ' ' . $_SESSION['flash']['aksi'] . '</span>' ;

            unset($_SESSION['flash']);
        }
    }
}
?>