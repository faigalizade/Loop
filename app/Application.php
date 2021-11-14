<?php
namespace App;
use App\Core\Request;
use App\Core\Route;
use App\Core\View;

class Application
{

    // URL prefix. Current Project Opened at MAMP where we have SmartSoft prefix in urls
    private string $prefix = '';

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
        if (!$route) {
            return View::make('404');
        }

        $middleware = Route::routeHasMiddleware($route['path']);

        if ($middleware) {
            $middleware = new (config("app.middlewares.$middleware"))();
            $middleware->run();
        }
        // TODO we can use DTO but don't have enough time
        $controller = new $route['route'][0]();
        $method = $route['route'][1];
        $arguments = $route['arguments'];
        if (!method_exists($controller, $method)) {
            die("Method <b>$method</b> is not found in <b>".get_class($controller)."</b>");
        }
        return call_user_func_array([$controller, $method], $arguments);
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