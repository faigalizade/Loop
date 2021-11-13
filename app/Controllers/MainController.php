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

    public function show($id)
    {
        return "Routing like Laravel is working and ID is = $id";
    }
}