<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;
use App\Models\MainFaq;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $main_carousel = new MainCarousel;
        return view('welcome', ['main_carousel' => $main_carousel->all()]);
    }
    public function FAQ(){
        $main_faq = new MainFaq;
        return view('FAQ', ['main_faq' => $main_faq->all()]);
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