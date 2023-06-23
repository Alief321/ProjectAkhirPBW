<?php
class ErrorCon extends Controller
{
    public function index()
    {
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        $data['css'] = "error404.css";
        $this->view('Error/404', $data);
    }
}