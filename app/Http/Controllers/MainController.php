<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;
<<<<<<< HEAD
use App\Models\MainFaq;
=======
<<<<<<< HEAD
use App\Models\advertising;
=======
use App\Models\CategoryModel;
>>>>>>> cbb014ef5fb9dacb68908a94f4380473a22877fb

>>>>>>> a6999d3d71b4abf0aebd8777123508e22306e66f
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $main_carousel = new MainCarousel;
<<<<<<< HEAD
        $advertising =  new advertising;
        return view('welcome', ['main_carousel' => $main_carousel->all(), 'advertising_one' => $advertising->first()]);
=======
        $reviews = new CategoryModel();
        return view('welcome', ['main_carousel' => $main_carousel->all(),'reviews' => $reviews->orderBy('id','desc')->get()]);
>>>>>>> a6999d3d71b4abf0aebd8777123508e22306e66f
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