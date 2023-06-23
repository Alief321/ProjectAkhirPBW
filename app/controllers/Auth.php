<?php
class Auth extends Controller
{
    public function index()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        } 
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION["role"] = $this->model("User_model")->getUserByEmail($_SESSION["email"])["Role"];
        $_SESSION["idUser"] = $this->model("User_model")->getUserByEmail($_SESSION["email"])["idUser"];
        $_SESSION['login']= true;

        // setcookie satu minggu
        if (isset($_POST['remember'])){
            setcookie('email', $_SESSION['email'], time()+(3600*24*7));
            setcookie('emailKey', hash('sha1', $_SESSION['email']), time()+(3600*24*7));
            setcookie('key', hash('sha1', $_SESSION['password']), time()+(3600*24*7)) ;
            setcookie('pass', $_SESSION['password'], time()+(3600*24*7)) ;
            setcookie('role', $_SESSION['role'], time()+(3600*24*7)) ;
            setcookie('id', $_SESSION['idUser'], time()+(3600*24*7));
        }
        if ($_SESSION['role'] == 'admin') {
            header("Location:". BASEURL . "Admin");
        }else{
            header("Location:". BASEURL . "Home");
        }
    }
}