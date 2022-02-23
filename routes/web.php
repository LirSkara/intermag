<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/product', [MainController::class, 'product']);

Route::get('/admin_home', [AdminController::class, 'admin_home']);
Route::get('/main_carousel', [AdminController::class, 'main_carousel'])->name('main_carousel');
Route::post('/add_carousel', [AdminController::class, 'add_carousel']);
Route::post('/exit_carousel/{id}', [AdminController::class, 'exit_carousel']);
Route::get('/delete_carousel/{id}', [AdminController::class, 'delete_carousel']);

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