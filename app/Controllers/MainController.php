<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Core\View;

class MainController extends Controller
{
    public function index()
    {
        return View::make('home');
    }

    public function show()
    {
        return View::make('auth.login');
    }
}