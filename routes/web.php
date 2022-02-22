<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/product', [MainController::class, 'product']);

Route::get('/admin_panel', [AdminController::class, 'admin_panel']);

Route::middleware('auth')->group(function () {
    Route::get('/exit', [AuthController::class, 'exit']);
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login_process']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'register_process']);
});

Route::get('/about', [MainController::class, 'about']);
Route::get('/FAQ', [MainController::class, 'FAQ']);