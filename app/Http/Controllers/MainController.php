<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;

use App\Models\MainFaq;
use App\Models\advertising;
use App\Models\icons;
use App\Models\AdvertisingTwo;
use App\Models\ServiseModel;
use App\Models\AdvertisingThree;
use App\Models\CategoryModel;
use App\Models\HotLine;
use App\Models\PayMethod;
use App\Models\ProductModel;
use Illuminate\Http\Request;
class MainController extends Controller
{
    public function home(){
        $main_carousel = new MainCarousel();
        $servises = new ServiseModel();
        $advertising =  new advertising();
        $advertising_count =  advertising::count();
        $advertising_two =  new AdvertisingTwo();
        $advertising_two_count =  AdvertisingTwo::count();
        $advertising_three =  new AdvertisingThree();
        $advertising_three_count =  AdvertisingThree::count();
        $icons =  new icons();
        $icons_count =  icons::count();
        $reviews = new CategoryModel();
        $tovar = new ProductModel();
        $tovar_count = ProductModel::count();
        return view('welcome', ['main_carousel' => $main_carousel->all(), 'advertising_one' => $advertising->first(), 'icons' => $icons->all(), 'advertising_two' => $advertising_two->first(), 'advertising_three' => $advertising_three->first(), 'reviews' => $reviews->orderBy('id','desc')->get(), 'advertising_count' => $advertising_count, 'advertising_two_count' => $advertising_two_count, 'advertising_three_count' => $advertising_three_count,  'icons_count' => $icons_count, 'tovar' => $tovar->all(), 'servises' => $servises->orderBy('id','desc')->get(), 'tovar_count' => $tovar_count]);
    }

    public function FAQ(){
        $main_faq = new MainFaq;
        return view('FAQ', ['main_faq' => $main_faq ->all()]);
    }

    public function icons(){
         $icons = new icons;
         return view('layout', ['icons' => $icons ->all()]);
    }

    public function about(){
        return view('about');
    }

    public function product($id){
        $Product_Model = ProductModel::find($id);
        $Product_Model_count = ProductModel::count();
        return view('product', ['Product_Model' => $Product_Model, 'Product_Model_count'=>$Product_Model_count]);
    }

     public function servise($id){
        $servise = ServiseModel::find($id);
        $servise_Model_count = ServiseModel::count();
        return view('a_servise', ['servise' => $servise, 'servise_Model_count'=>$servise_Model_count]);
    }

    public function basket(){
        return view('basket');
    }
}