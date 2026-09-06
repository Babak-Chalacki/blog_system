<?php

use PHPUnit\Framework\TestCase;
use Src\Router;

class RouterTest extends TestCase
{
    public function test_get_route()
    {
        // Arrange
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/';

        $router = new Router();

        $router->get('/', function () {
            echo 'test Page';
        });

        // Assert
        $this->expectOutputString('test Page');

        // Act
        $router->dispatch();
    }

    public function test_post_route()
    {
        // Arrange
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_SERVER['REQUEST_URI'] = '/posts';

        $router = new Router();

        $router->post('/posts', function () {
            echo 'Post Created';
        });

        $this->expectOutputString('Post Created');

        // Act
        $router->dispatch();
    }

    public function test_get_does_not_match_post_route()
    {
        // Arrange
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/posts';

        $router = new Router();

        $router->post('/posts', function () {
            echo 'Post Created';
        });

        // Assert
        $this->expectOutputString('404 Not Found');

        // Act
        $router->dispatch();
    }

    public function test_unknown_route_returns_404()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/hello';

        $router = new Router();

        $router->get('/', function () {
            echo 'Home';
        });

        $this->expectOutputString('404 Not Found');

        $router->dispatch();
    }
}