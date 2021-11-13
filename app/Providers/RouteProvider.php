<?php
namespace App\Providers;

use App\Core\Route;

class RouteProvider implements Provider
{
    private $routes;

    public function boot()
    {
        require_once realpath('routes/web.php');
    }
}