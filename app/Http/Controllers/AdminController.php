<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;
use App\Models\ProductModel;
use App\Models\MainFaq;
use App\Models\PayMethod;
use App\Models\CategoryModel;
use App\Models\icons;
use App\Models\PunktsModel;
use App\Models\ServiseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\advertising;
use App\Models\AdvertisingTwo;
use App\Models\AdvertisingThree;
use App\Models\HotLine;

use Illuminate\Support\Facades\Route;

class AdminController extends Controller
{
    public function admin_home(){
        return view('admin.admin_home');
    }

    public function category(){
        $reviews = new CategoryModel();
        $punkts = new PunktsModel();
        return view('admin.category', ['reviews' => $reviews->orderBy('id','desc')->get(), 'punkts' => $punkts->all()]);
    }





    public function servise(){
        $servises = new ServiseModel();
        $servises_count = ServiseModel::count();
        return view('admin.servise', ['servises' => $servises->orderBy('id','desc')->get(), 'servises_count' => $servises_count]);
    }

    public function servise_process(Request $data){
        $valid = $data->validate([
            'imgservise' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'sloganservise' => ['required'],
            'descriptionservise' => ['required']
         ]); 

        $file = $data->file('imgservise');
        $upload_folder = 'public/servise/'; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
        Storage::putFileAs($upload_folder, $file, $filename); 

        $servise = new ServiseModel();
        $servise->imgservise = $filename;
        $servise->sloganservise = $data->input('sloganservise');
        $servise->descriptionservise = $data->input('descriptionservise');
        $servise->save();

        return redirect()->route('a_servise');
    }

     public function edit_servise_process(Request $data, $id){
        $valid = $data->validate([
            'imgservise' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'sloganservise' => ['required'],
            'descriptionservise' => ['required']
        ]); 
        
        $servise = ServiseModel::find($id);
        if($data->file('imgservise') != '') {
            $upload_folder = 'public/servise/'; //Создается автоматически
            $file = $data->file('imgservise');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $data->foto);
            Storage::putFileAs($upload_folder, $file, $filename);
            $servise->imgservise = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $servise->imgservise = $servise->imgservise;
        }
        
        $servise->sloganservise = $data->input('sloganservise');
        $servise->descriptionservise = $data->input('descriptionservise');
        $servise->save();

        return redirect()->route('a_servise');
    }

    public function delete_servise_process($id){
        ServiseModel::find($id)->delete();
        return redirect()->route('a_servise');
    }



    

    public function category_process(Request $data){

        $valid = $data->validate([
        'name' => ['required', 'min:3', 'max:15', 'string']
         ]);

        $review = new CategoryModel();
        $review->name = $data->input('name');
        $review->save();

        return redirect()->route('a_category');
    }

    public function edit_category_process($id, Request $data)
    {
        $valid = $data->validate([
            'name' => ['required', 'min:3', 'max:15', 'string']
        ]);

        $review = CategoryModel::find($id);
        $review->name = $data->input('name');
        $review->save();

        return redirect()->route('a_category');
    }

    public function delete_category_process($id)
    {
        CategoryModel::find($id)->delete();
        return redirect()->route('a_category');
    }

    public function main_carousel(){
        $main_carousel = new MainCarousel;
        return view('admin.main_carousel', ['main_carousel' => $main_carousel->all()]);
    }

    public function addpunkt($id, Request $data){
        $valid = $data->validate([
            'name' => ['required', 'min:3', 'max:25', 'string']
        ]);

        $punkt = new PunktsModel();
        $punkt->categories = $id;   
        $punkt->name = $data->input('name');
        $punkt->save();

        return redirect()->route('a_category');
    }

    public function edit_punkt($id, Request $data)
    {
        $valid = $data->validate([
            'name' => ['required', 'min:3', 'max:15', 'string']
        ]);

        $punkt = PunktsModel::find($id);
        $punkt->name = $data->input('name');
        $punkt->save();

        return redirect()->route('a_category');
    }

    public function delete_punkt($id)
    {
        PunktsModel::find($id)->delete();
        return redirect()->route('a_category');
    }

    public function add_carousel(Request $data){
        $valid = $data->validate([
            'foto' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'name_cart' => ['required'],
            'first_text' => ['required'],
            'description' => ['required'],
            'text_price' => ['required'],
            'price' => ['required']
         ]); 

        $file = $data->file('foto');
        $upload_folder = 'public/carousel/'; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
        Storage::putFileAs($upload_folder, $file, $filename); 

        $carousel = new MainCarousel();
        $carousel->foto = $filename;
        $carousel->name_cart = $data->input('name_cart');
        $carousel->first_text = $data->input('first_text');
        $carousel->description = $data->input('description');
        $carousel->text_price = $data->input('text_price');
        $carousel->price = $data->input('price');
        $carousel->save();

        return redirect()->route('main_carousel');
    }

    public function edit_carousel(Request $data, $id){
        $valid = $data->validate([
            'foto' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'name_cart' => ['required'],
            'first_text' => ['required'],
            'description' => ['required'],
            'text_price' => ['required'],
            'price' => ['required']
        ]); 
        
        $carousel = MainCarousel::find($id);
        if($data->file('foto') != '') {
            $upload_folder = 'public/carousel/'; //Создается автоматически
            $file = $data->file('foto');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $carousel->foto);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $carousel->foto = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $carousel->foto = $carousel->foto;
        }
        
        $carousel->name_cart = $data->input('name_cart');
        $carousel->first_text = $data->input('first_text');
        $carousel->description = $data->input('description');
        $carousel->text_price = $data->input('text_price');
        $carousel->price = $data->input('price');
        $carousel->save();

        return redirect()->route('main_carousel');
    }

    public function delete_carousel($id){
        MainCarousel::find($id)->delete();
        return redirect()->route('main_carousel');
    }

    public function main_tovar(){
        $tovar = new ProductModel();
        $category = new CategoryModel();
        $punkts = new PunktsModel();
        return view('admin.main_tovar', ['tovar' => $tovar->all(), 'category' => $category->all(), 'punkts' => $punkts->all()]);
    }

    public function add_tovar(Request $data){
        $valid = $data->validate([
            'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'name_tovar' => ['required'],
            'tags' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
            'category' => ['required'],
            'remains' => ['required'],
        ]); 

        $file = $data->file('img');
        $upload_folder = 'public/tovar/'; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
        Storage::putFileAs($upload_folder, $file, $filename); 

        $product = new ProductModel();
        $product->img = $filename;
        $product->name_tovar = $data->input('name_tovar');
        $product->tags = $data->input('tags');
        $product->price = $data->input('price');
        $product->old_price = '';
        $product->description = $data->input('description');
        $product->remains = $data->input('remains');
        $product->category = $data->input('category');
        $product->status = 0;
        $product->save();

        return redirect()->route('main_tovar');
    }

    public function edit_tovar(Request $data, $id){
        $valid = $data->validate([
            'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'name_tovar' => ['required'],
            'tags' => ['required'],
            'price' => ['required'],
            'description' => ['required']
        ]); 
        
        $tovar = ProductModel::find($id);
        if($data->file('img') != '') {
            $upload_folder = 'public/tovar/'; //Создается автоматически
            $file = $data->file('img');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $tovar->foto);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $tovar->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $tovar->img = $tovar->img;
        }
        
        $tovar->name_tovar = $data->input('name_tovar');
        $tovar->tags = $data->input('tags');
        $tovar->price = $data->input('price');
        $tovar->description = $data->input('description');
        $tovar->save();

        return redirect()->route('main_tovar');
    }
    
    public function delete_tovar($id){
        $tovar = ProductModel::find($id);

        $upload_folder = 'public/tovar/';
        Storage::delete($upload_folder.'/'.$tovar->img);

        $tovar->delete();
        
        return redirect()->route('main_tovar');
    }

    public function approve($id){
        $tovar = ProductModel::find($id);
        $tovar->status = 1;
        $tovar->save();
        return redirect()->route('main_tovar');
    }
    
    public function approve_all(){
        $tovar = ProductModel::where('status', '=', 0)->get();
        foreach($tovar as $item) {
            $item->status = 1;
            $item->save();
        }
        return redirect()->route('main_tovar');
    }

    public function details_product($id){
        $tovar = ProductModel::find($id);
        return view('admin.details_product', ['tovar' => $tovar]);
    }   

    public function main_faq(){
        $main_faq = new MainFaq();
        return view('admin.main_faq', ['main_faq' => $main_faq->all()]);
    }

    public function add_faq(Request $data){
        $valid = $data->validate([
            'question' => ['required'],
            'answer' => ['required']
         ]); 
        $faq = new MainFaq();
        $faq->question = $data->input('question');
        $faq->answer = $data->input('answer');
        $faq->save();

        return redirect()->route('main_faq');
    }

    public function exit_faq(Request $data, $id){
        $valid = $data->validate([
            'question' => ['required'],
            'answer' => ['required']
        ]); 
        
        $faq = MainFaq::find($id);
        $faq->question = $data->input('question');
        $faq->answer = $data->input('answer');
        $faq->save();

        return redirect()->route('main_faq');
    }

    public function delete_faq($id){
        MainFaq::find($id)->delete();
        return redirect()->route('main_faq');
    }

    
    public function banner_servis(){
        return view ('admin.banner_servis');
    }

    public function advertising_one(){
        $advertising = new advertising;
        return view ('admin.advertising_one' , ['advertising' => $advertising->all()]);
    }

    public function add_advertising_one(Request $data){
        $valid = $data->validate([
            'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'link' => ['required'],
         ]); 

        $file = $data->file('img');
        $upload_folder = 'public/advertising_one/'; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
        Storage::putFileAs($upload_folder, $file, $filename); 

        $advertising = new advertising();

        
        $advertising->img = $filename;
        $advertising->title = $data->input('title');
        $advertising->description = $data->input('description');
        $advertising->price = $data->input('price');
        $advertising->link = $data->input('link');
        $advertising->status = 0;
        $advertising->save();
        return redirect()->route('advertising_one');
    }

    public function exit_advertising(Request $data, $id){
        $valid = $data->validate([
            'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'link' => ['required']
        ]); 
        
        $advertising = advertising::find($id);
        if($data->file('img') != '') {
            $upload_folder = 'public/advertising_two/'; //Создается автоматически
            $file = $data->file('img');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $advertising->img);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $advertising->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $advertising->img = $advertising->img;
        }
        
        $advertising->title = $data->input('title');
        $advertising->description = $data->input('description');
        $advertising->price = $data->input('price');
        $advertising->link = $data->input('link');
        $advertising->save();
        return redirect()->route('advertising_one');
    }

    public function delete_advertising($id){
        advertising::find($id)->delete();
        return redirect()->route('advertising_one');
    }

    public function advertising_two(){
        $advertising = new AdvertisingTwo;
        return view ('admin.advertising_two' , ['advertising' => $advertising->all()]);
    }

    public function add_advertising_two(Request $data){
        $valid = $data->validate([
            'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'link' => ['required'],
         ]); 

        $file = $data->file('img');
        $upload_folder = 'public/advertising_two/'; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
        Storage::putFileAs($upload_folder, $file, $filename); 

        $advertising = new AdvertisingTwo();
        $advertising->img = $filename;
        $advertising->title = $data->input('title');
        $advertising->description = $data->input('description');
        $advertising->price = $data->input('price');
        $advertising->link = $data->input('link');
        $advertising->status = 0;
        $advertising->save();
        return redirect()->route('advertising_two');
    }

    public function exit_advertisingTwo(Request $data, $id){
        $valid = $data->validate([
            'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'link' => ['required']
        ]); 
        
        $advertising = AdvertisingTwo::find($id);
        if($data->file('img') != '') {
            $upload_folder = 'public/advertising_two/'; //Создается автоматически
            $file = $data->file('img');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $advertising->img);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $advertising->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $advertising->img = $advertising->img;
        }
        
        $advertising->title = $data->input('title');
        $advertising->description = $data->input('description');
        $advertising->price = $data->input('price');
        $advertising->link = $data->input('link');
        $advertising->save();

        return redirect()->route('advertising_two');
    }

    public function delete_advertisingTwo($id){
        AdvertisingTwo::find($id)->delete();
        return redirect()->route('advertising_two');
    }

    public function advertising_three(){
        $advertising = new AdvertisingThree();
        return view ('admin.advertising_three' , ['advertising' => $advertising->all()]);
    }  
    public function add_advertising_three(Request $data){
        $valid = $data->validate([
            'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'link' => ['required']
        ]); 

        $file = $data->file('img');
        $upload_folder = 'public/advertising_three/'; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
        Storage::putFileAs($upload_folder, $file, $filename); 

        $advertising = new AdvertisingThree();
        $advertising->img = $filename;
        $advertising->title = $data->input('title');
        $advertising->description = $data->input('description');
        $advertising->price = $data->input('price');
        $advertising->link = $data->input('link');
        $advertising->status = 0;
        $advertising->save();
        return redirect()->route('advertising_three');
    }

    public function exit_advertisingThree(Request $data, $id){
        $valid = $data->validate([
            'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'title' => ['required'],
            'description' => ['required'],
            'price' => ['required'],
            'link' => ['required']
        ]); 
        
        $advertising = AdvertisingThree::find($id);
        if($data->file('img') != '') {
            $upload_folder = 'public/advertising_three/'; //Создается автоматически
            $file = $data->file('img');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $advertising->img);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $advertising->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $advertising->img = $advertising->img;
        }
        
        $advertising->title = $data->input('title');
        $advertising->description = $data->input('description');
        $advertising->price = $data->input('price');
        $advertising->link = $data->input('link');
        $advertising->save();

        return redirect()->route('advertising_three');
    }  


    public function delete_advertisingThree($id){
        AdvertisingThree::find($id)->delete();
        return redirect()->route('advertising_three');
    }
public function icons(){
    $icons = new icons();
    return view ('admin.icons' , ['icons' => $icons->all()]);
}
public function add_icons(Request $data){
    $valid = $data->validate([
        'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'link' => ['required']
     ]);

    $file = $data->file('img');
    $upload_folder = 'public/icons/'; //Создается автоматически
    $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
    Storage::putFileAs($upload_folder, $file, $filename); 

    $icons = new icons();
    $icons->img = $filename;
    $icons->link = $data->input('link');
    $icons->save();
    return redirect()->route('icons');
}
public function exit_icons($id, Request $data){

    $valid = $data->validate([
        'img' => ['image', 'mimetypes:image/jpeg,image/png,image/webp'],
        'link' => ['required']
    ]); 
    
    $icons = icons::find($id);

        if($data->file('img') != '') {
            $upload_folder = 'public/icons/'; //Создается автоматически
            $file = $data->file('img');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $icons->img);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $icons->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $icons->img = $icons->img;
        }

        $icons->link = $data->input('link');
        $icons->save();

        return redirect()->route('icons');
    }

    public function delete_icons($id){
        icons::find($id)->delete();
        return redirect()->route('icons');
    }
    public function hot_line(){
        $hot_line = new HotLine();
        return view ('admin.hot_line' , ['hot_line' => $hot_line->all()]);
    }

    public function hot_line_process(Request $data){
        $valid = $data->validate([
            'tel' => ['required'],
            'description' => ['required'],
        ]); 
        $hot_line = new HotLine();
        $hot_line->tel = $data->input('tel');
        $hot_line->description = $data->input('description');
        $hot_line->save();
        return redirect()->route('hot_line');
    }

    public function exit_hot_line(Request $data, $id){
        $valid = $data->validate([
            'tel' => ['required'],
            'description' => ['required']
        ]); 
        
        $hot_line = HotLine::find($id);
        $hot_line->tel = $data->input('tel');
        $hot_line->description = $data->input('description');
        $hot_line->save();

        return redirect()->route('hot_line');
    } 

    public function delete_hot_line($id){
        HotLine::find($id)->delete();
        return redirect()->route('hot_line');
    }
    public function method_pay(){
        $method_pay = new PayMethod();
        return view ('admin.method_pay' , ['method_pay' => $method_pay->all()]);
    }

    public function method_pay_process(Request $data){
        $valid = $data->validate([
            'img' => ['required'],
            'title' => ['required'],
        ]); 
        $file = $data->file('img');
        $upload_folder = 'public/method_pay/'; //Создается автоматически
        $filename = $file->getClientOriginalName(); //Сохраняем исходное название изображения
        Storage::putFileAs($upload_folder, $file, $filename); 
        $method_pay = new PayMethod();
        $method_pay->img = $filename;
        $method_pay->title = $data->input('title');
        $method_pay->save();
        return redirect()->route('method_pay');
        
    }

    public function exit_method_pay(Request $data, $id){
        $valid = $data->validate([
            'title' => ['required'],
        ]); 

        $method_pay = PayMethod::find($id);
        if($data->file('img') != '') {
            $upload_folder = 'public/method_pay/'; //Создается автоматически
            $file = $data->file('img');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $method_pay->img);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $method_pay->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $method_pay->img = $method_pay->img;
        }
        $method_pay->title = $data->input('title');
        $method_pay->save();

        return redirect()->route('method_pay');
    } 

    public function delete_method_pay($id){
        PayMethod::find($id)->delete();
        return redirect()->route('method_pay');
    }
}