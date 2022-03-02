<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;
use App\Models\advertising;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $main_carousel = new MainCarousel;
        $advertising =  new advertising;
        return view('welcome', ['main_carousel' => $main_carousel->all(), 'advertising_one' => $advertising->first()]);
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