<?php
if(isset($_COOKIE['key']) && isset($_COOKIE['email']) && isset($_COOKIE['id']) && isset($_COOKIE['role'])){
    $email = $_COOKIE['email'];
    $key = $_COOKIE['key'];

    $row = $this->model('User_model')->getUserByEmail($email);

    if(hash('sha1', $key) == $row['Password']){
        $_SESSION['login'] = true;
        $_SESSION['password']=  $key;
        $_SESSION['idUser'] = $_COOKIE['id'];
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $_COOKIE['role'];
    }
}