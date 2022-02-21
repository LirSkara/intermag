<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [MainController::class, 'home']);
Route::get('/product', [MainController::class, 'product']);

Route::get('/admin_panel', [AdminController::class, 'admin_panel']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
