<?php
use App\Core\Route;

Route::get('/', [App\Controllers\MainController::class, 'index'])->name('home');
Route::get('login', [App\Controllers\AuthController::class, 'show'])->name('show_login');
Route::post('login', [App\Controllers\AuthController::class, 'login'])->name('login');
Route::get('register', [App\Controllers\AuthController::class, 'showRegister'])->name('show_register');
Route::get('createFakeAdmin', [App\Controllers\AuthController::class, 'createFakeAdmin']);
Route::get('admin', [App\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth_admin');
Route::get('customer', [App\Controllers\AdminController::class, 'index'])->name('admin')->middleware('auth');


Route::post('register', [App\Controllers\AuthController::class, 'register'])->name('register');