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
Route::get('/category', [AdminController::class, 'category'])->name('a_category');
Route::post('/category', [AdminController::class, 'category_process']);
Route::post('/edit_category/{id}', [AdminController::class, 'edit_category_process']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category_process']);


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
Route::get('/banner_servis', [AdminController::class, 'banner_servis']);



Route::get('/advertising_one', [AdminController::class, 'advertising_one'])->name('advertising_one');
Route::post('/add_advertising_one', [AdminController::class, 'add_advertising_one']);
Route::post('/exit_advertising/{id}', [AdminController::class, 'exit_advertising']);
Route::get('/delete_advertising/{id}', [AdminController::class, 'delete_advertising']);


Route::get('/advertising_two', [AdminController::class, 'advertising_two'])->name('advertising_two');
Route::post('/advertising_two', [AdminController::class, 'advertising_two']);
// Route::post('/exit_advertising/{id}', [AdminController::class, 'exit_advertising']);
// Route::get('/delete_advertising/{id}', [AdminController::class, 'delete_advertising']);