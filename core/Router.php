<?php

class Router
{
    private $routes = [];
    public static function load($file){
        $router = new self;
        require $file;
        return $router;
    }

    public function define($routes){
        $this->routes = $routes;
    }
    public function direct($url){
        if(array_key_exists($url,$this->routes)) {
            return $this->routes[$url];
        }
        throw New Exception('404');
    }
}