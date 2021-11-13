<?php
namespace App;
use App\Core\Route;
use App\Core\View;

class Application
{

    // URL prefix. Current Project Opened at MAMP where we have SmartSoft prefix in urls
    private $prefix;

    private array $middlewares = [];

    public function __construct()
    {
        $this->prefix = config('app.path_prefix');
        $this->loadProviders(config('app.providers'));
    }

    public function run()
    {
        $uri = parse_url(str_replace($this->prefix, '', $_SERVER['REQUEST_URI']))['path'];
        $route = Route::checkRoute($uri);

        $middleware = Route::routeHasMiddleware($route['path']);

        if ($middleware) {
            $middleware = new (config("app.middlewares.$middleware"))();
            $middleware->run();
        }

        if ($route) {
            $controller = new $route['route'][0]();
            $method = $route['route'][1];
            $arguments = $route['arguments'];
            return call_user_func_array([$controller, $method], $arguments);
        } else {
            return View::make('404');
        }
    }

    private function loadProviders($providers)
    {
        foreach ($providers as $provider) {
            $instance = new $provider;
            $instance->boot();
            $this->providers[] = $instance;
        }
    }
}