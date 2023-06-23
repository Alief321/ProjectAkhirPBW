<?php
if(isset($_COOKIE['key']) && isset($_COOKIE['email']) && isset($_COOKIE['id']) && isset($_COOKIE['role'])&& isset($_COOKIE['emailKey']) && isset($_COOKIE['pass'])){
    $email = $_COOKIE['email'];
    $emailKey = $_COOKIE['emailKey'];
    $key = $_COOKIE['key'];

    $row = $this->model('User_model')->getUserByEmail($email);

    if(($key == $row['Password']) && ($emailKey == hash('sha1',$row['Email']) )){
        $_SESSION['login'] = true;
        $_SESSION['password']=  $_COOKIE['pass'];
        $_SESSION['idUser'] = $_COOKIE['id'];
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $_COOKIE['role'];
    }
}