<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function product(){
        return view('product');
    }
    public function about(){
        return view('about');
    }
    public function FAQ(){
        return view('FAQ');
    }
}