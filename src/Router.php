<?php

namespace Src;

class Router
{
    private array $routes = [];

    private string $basePath;

    public function __construct()
    {
        $this->basePath = dirname($_SERVER['SCRIPT_NAME']);
    }
    public function get(string $url, callable $action): void
    {
        $this->routes['GET'][$url] = $action;
    }

    public function post(string $url, callable $action): void
    {
        $this->routes['POST'][$url] = $action;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];

        $url = parse_url(
            $_SERVER['REQUEST_URI'],
            PHP_URL_PATH
        );

        $url = str_replace($this->basePath, '', $url);

        if ($url === '') {
            $url = '/';
        }

        if (isset($this->routes[$method][$url])) {
            call_user_func($this->routes[$method][$url]);
            return;
        }

        http_response_code(404);
        echo '404 Not Found';
    }
}