<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/product', [MainController::class, 'product']);
Route::get('/FAQ', [MainController::class, 'FAQ']);

Route::get('/admin_home', [AdminController::class, 'admin_home']);
Route::get('/main_carousel', [AdminController::class, 'main_carousel'])->name('main_carousel');
Route::post('/add_carousel', [AdminController::class, 'add_carousel']);
Route::post('/edit_carousel/{id}', [AdminController::class, 'edit_carousel']);
Route::get('/delete_carousel/{id}', [AdminController::class, 'delete_carousel']);


Route::get('/main_tovar', [AdminController::class, 'main_tovar'])->name('main_tovar');
Route::post('/add_tovar', [AdminController::class, 'add_tovar']);
Route::post('/edit_tovar/{id}', [AdminController::class, 'edit_tovar']);
Route::get('/delete_tovar/{id}', [AdminController::class, 'delete_tovar']);
Route::get('/details_product/{id}', [AdminController::class, 'details_product']);

Route::get('/main_faq', [AdminController::class, 'main_faq'])->name('main_faq');
Route::post('/add_faq', [AdminController::class, 'add_faq']);
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
Route::post('/add_advertising_two', [AdminController::class, 'add_advertising_two']);
Route::post('/exit_advertisingTwo/{id}', [AdminController::class, 'exit_advertisingTwo']);
Route::get('/delete_advertisingTwo/{id}', [AdminController::class, 'delete_advertisingTwo']);

Route::get('/advertising_three', [AdminController::class, 'advertising_three'])->name('advertising_three');
Route::post('/add_advertising_three', [AdminController::class, 'add_advertising_three']);
Route::post('/exit_advertisingThree/{id}', [AdminController::class, 'exit_advertisingThree']);
Route::get('/delete_advertisingThree/{id}', [AdminController::class, 'delete_advertisingThree']);


