<?php
namespace App\Core;


class View
{
    protected static $twig;

    public function __construct($twig)
    {
        self::$twig = $twig;
    }

    public static function make($path, $vars = [])
    {
        return self::$twig->render("$path.html", $vars);
    }
}