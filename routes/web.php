<?php

use Src\Router;

$router = new Router();

$router->get('/', function () {
    echo 'test Page';
});

return $router;