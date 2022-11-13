<?php
namespace App\Core;


class Router
{
    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new self;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (!array_key_exists($uri, $this->routes[$requestType])) {
            throw new Exception('404 Teapot');
        }
        $this->callAction(
            ...explode('@', $this->routes[$requestType][$uri]));

    }

    private function callAction($controller, $method)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if (!method_exists($controller, $method)) {
            throw new Exception("${controller} has no method called: ${method}");
        }
        return (new $controller)->$method();
    }
}