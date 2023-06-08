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
        header("Location:". BASEURL . "Home");
    }
}