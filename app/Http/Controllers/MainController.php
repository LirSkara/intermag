<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;

use App\Models\MainFaq;
use App\Models\advertising;
use App\Models\AdvertisingTwo;
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
        $advertising =  new advertising();
        $advertising_count =  advertising::count();
        $advertising_two =  new AdvertisingTwo();
        $advertising_two_count =  AdvertisingTwo::count();
        $advertising_three =  new AdvertisingThree();
        $advertising_three_count =  AdvertisingThree::count();
        $reviews = new CategoryModel();
        return view('welcome', ['main_carousel' => $main_carousel->all(), 'advertising_one' => $advertising->first(), 'advertising_two' => $advertising_two->first(), 'advertising_three' => $advertising_three->first(),'reviews' => $reviews->orderBy('id','desc')->get(), 'advertising_count' => $advertising_count, 'advertising_two_count' => $advertising_two_count, 'advertising_three_count' => $advertising_three_count,]);
    }

    public function FAQ(){
        $main_faq = new MainFaq;
        return view('FAQ', ['main_faq' => $main_faq ->all()]);
    }

    public function about(){
        return view('about');
    }
    public function product($id)
    {
        $Product_Model = ProductModel::find($id)->first();
        $Product_Model_count = ProductModel::count();
        return view('product', ['Product_Model' => $Product_Model, 'Product_Model_count'=>$Product_Model_count]);
    }
}