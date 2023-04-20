<?php 

class Admin extends Controller{
    public function index()
    {
        $data['judul'] = "Admin";
        $data['css'] = "";
        $this->view('Templates/header', $data);
        $this->view('Admin/User/Create');
        $this->view('Templates/footer');
    }
    public function user()
    {
        $data['judul'] = "Admin";
        $data['css'] = "";
        $this->view('Templates/header', $data);
        $this->view('Admin/User/Create');
        $this->view('Templates/footer');
    }
};