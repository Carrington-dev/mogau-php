<?php

class App{
    protected $controller = "home";
    protected $method = "index";
    protected $params = [];

    public function __construct(){
        echo "<p>App</p>";
        echo $this->parseUrl();
    }

    public function parseUrl(){
        if(isset($_GET['url'])){
            echo $_GET['url'];
        }
    }
}