<?php

function redirect($path)
{
    header("Location: $path");
}

function config($path)
{
    return App\Core\Config::getConfig($path);
}

function dd(...$args)
{
    echo "<pre>";
    foreach ($args as $arg)
    {
        print_r($arg);
    }
    die();
}

function route($name, $args = [])
{
    return \App\Core\Route::getRouteByName($name, $args);
}