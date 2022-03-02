<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;

use App\Models\MainFaq;

use App\Models\CategoryModel;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\advertising;

class AdminController extends Controller
{
    public function admin_home(){
        return view('admin.admin_home');
    }

    public function category(){

        $reviews = new CategoryModel();
        return view('admin.category', ['reviews' => $reviews->orderBy('id','desc')->get()]);
    }

    public function category_process(Request $data){

        $valid = $data->validate([
        'name' => ['required', 'min:5', 'max:15', 'string']
         ]);

        $review = new CategoryModel();
        $review->name = $data->input('name');
        $review->save();

        return redirect()->route('a_category');
    }

    public function edit_category_process($id, Request $data)
    {
        $valid = $data->validate([
        'name' => ['required', 'min:5', 'max:15', 'string']
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

    public function exit_carousel(Request $data, $id){
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
    public function main_faq()
    {
    $main_faq = new MainFaq();
    return view('admin.main_faq',['main_faq'=>$main_faq->all()]);
    }
    public function add_faq(Request $data){
        $valid = $data->validate([
            'question' => ['required'],
            'answer' => ['required']
         ]); 

        $main_faq = new MainFaq();
        $faq->question = $data->input('question');
        $faq->answer = $data->input('answer');;
        $faq->save();

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
            $upload_folder = 'public/advertising_one/'; //Создается автоматически
            $file = $data->file('img');
            $filename = $file->getClientOriginalName();
            Storage::delete($upload_folder . '/' . $advertising->img);
            Storage::putFileAs($upload_folder, $file, $filename);    
            $advertising->img = $filename;
            Storage::putFileAs($upload_folder, $file, $filename); 
        } else {
            $advertising->img = $advertising->img;
        }
        
        $advertising->img = $data->input('img');
        $advertising->title = $data->input('title');
        $advertising->description = $data->input('description');
        $advertising->price = $data->input('price');
        $advertising->link = $data->input('link');
        $advertising->status = $advertising->img;
        $advertising->save();

        return redirect()->route('advertising_one');
    }
    public function delete_advertising($id){
        advertising::find($id)->delete();
        return redirect()->route('advertising_one');
    }
    public function advertising_two(){
        $advertising = new Advertising_two;
        return view ('admin.advertising_two' , ['advertising' => $advertising->all()]);
}
public function advertising_three(){
    $advertising = new Advertising_three;
    return view ('admin.advertising_three' , ['advertising' => $advertising->all()]);
}
}