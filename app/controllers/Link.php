<?php

class Link extends Controller{
    public function index(){
        $data['judul'] = "Link";
        $data['css'] = "Link.css";
        $this->view('Templates/header', $data);
        $this->view('Templates/navbar', $data);
        $this->view('Link/index');
        $this->view('Templates/footer');
    }
}