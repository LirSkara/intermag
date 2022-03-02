<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;

use App\Models\MainFaq;
use App\Models\advertising;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
class MainController extends Controller
{
    public function home(){
        $main_carousel = new MainCarousel();
        $advertising =  new advertising();
        $advertising_count =  advertising::count();
        $reviews = new CategoryModel();
        return view('welcome', ['main_carousel' => $main_carousel->all(), 'advertising_one' => $advertising->first(), 'reviews' => $reviews->orderBy('id','desc')->get(), 'advertising_count' => $advertising_count]);
    }

    public function FAQ(){
        $main_faq = new MainFaq;
        return view('FAQ', ['main_faq' => $main_faq ->all()]);
    }
    
    public function product(){
        return view('product');
    }

    public function about(){
        return view('about');
    }

}