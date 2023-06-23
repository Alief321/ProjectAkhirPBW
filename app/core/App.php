<?php
class App{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];
    

    public function __construct() {
        if(!isset($_SESSION)){ 
            session_start(); 
        }
        $url = $this->parseURL();

        //setup controller
        if(isset($url[0])){
            if(file_exists('../app/controllers/'. $url[0].'.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }else if($url[0] == '='){
                $this->controller = "Home";
                unset($url[0]);
            }
            else{
                $this->controller = 'ErrorCon';
                unset($url[0]);
            }
        }

        require_once '../app/controllers/'. $this->controller.'.php';
        $this->controller = new $this->controller;

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method= $url[1];
                unset($url[1]);
            }else{
                $this->controller = 'ErrorCon';
                require_once '../app/controllers/'. $this->controller.'.php';
                $this->controller = new $this->controller;
                $this->method = 'index';
                unset($url[1]);
            }
        }

        if(!empty($url)) {
            $this->params = array_values($url);
            }
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        $url = ['Home'];
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
        }
        return $url;
    }
}
