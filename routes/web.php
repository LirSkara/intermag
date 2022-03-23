<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/home', [MainController::class, 'home'])->name('home');
Route::get('/product/{id}', [MainController::class, 'product']);
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
Route::get('/approve/{id}', [AdminController::class, 'approve']);
Route::get('/details_product/{id}', [AdminController::class, 'details_product']);
Route::get('/approve_all', [AdminController::class, 'approve_all']);

Route::get('/main_faq', [AdminController::class, 'main_faq'])->name('main_faq');
Route::post('/add_faq', [AdminController::class, 'add_faq']);
Route::post('/exit_faq/{id}', [AdminController::class, 'exit_faq']);
Route::get('/delete_faq/{id}', [AdminController::class, 'delete_faq']);

Route::get('/icons', [AdminController::class, 'icons'])->name('icons');
Route::post('/add_icons', [AdminController::class, 'add_icons']);
Route::post('/exit_icons/{id}', [AdminController::class, 'exit_icons']);
Route::get('/delete_icons/{id}', [AdminController::class, 'delete_icons']);

Route::get('/category', [AdminController::class, 'category'])->name('a_category');
Route::post('/category', [AdminController::class, 'category_process']);
Route::post('/edit_category/{id}', [AdminController::class, 'edit_category_process']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category_process']);

Route::get('/servise', [AdminController::class, 'servise'])->name('a_servise');
Route::post('/servise', [AdminController::class, 'servise_process']);
Route::post('/edit_servise/{id}', [AdminController::class, 'edit_servise_process']);
Route::get('/delete_servise/{id}', [AdminController::class, 'delete_servise_process']);



Route::post('/addpunkt/{id}', [AdminController::class, 'addpunkt']);
Route::post('/edit_punkt/{id}', [AdminController::class, 'edit_punkt']);
Route::get('/delete_punkt/{id}', [AdminController::class, 'delete_punkt']);

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

Route::get('/hot_line', [AdminController::class, 'hot_line'])->name('hot_line');  
Route::post('/add_hot_line', [AdminController::class, 'hot_line_process']);
Route::post('/exit_hot_line/{id}', [AdminController::class, 'exit_hot_line']);
Route::get('/delete_hot_line/{id}', [AdminController::class, 'delete_hot_line']);
Route::get('/basket', [MainController::class, 'basket'])->name('basket');


Route::get('/method_pay', [AdminController::class, 'method_pay'])->name('method_pay');  
Route::post('/add_method_pay', [AdminController::class, 'method_pay_process']);
Route::post('/exit_method_pay/{id}', [AdminController::class, 'exit_method_pay']);
Route::get('/delete_method_pay/{id}', [AdminController::class, 'delete_method_pay']);

