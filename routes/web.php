<?php
use App\Core\Route;

Route::get('/', [App\Controllers\MainController::class, 'index']);
Route::get('/login', [App\Controllers\MainController::class, 'show'])->name('login');