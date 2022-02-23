<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $main_carousel = new MainCarousel;
        return view('welcome', ['main_carousel' => $main_carousel->all()]);
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