<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;
use App\Models\ProductModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admin_home(){
        return view('admin.admin_home');
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

    public function main_tovar(){
        $tovar = new ProductModel();
        return view('admin.main_tovar', ['tovar' => $tovar->all()]);
    }

    public function add_tovar(Request $data){
        $valid = $data->validate([
            'img' => ['required', 'image', 'mimetypes:image/jpeg,image/png,image/webp'],
            'name_tovar' => ['required'],
            'tags' => ['required'],
            'price' => ['required'],
            'description' => ['required'],
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
        $product->status = 0;
        $product->save();

        return redirect()->route('main_tovar');
    }

    public function delete_tovar($id){
        $tovar = ProductModel::find($id);

        $upload_folder = 'public/tovar/';
        Storage::delete($upload_folder.'/'.$tovar->img);

        $tovar->delete();
        
        return redirect()->route('main_tovar');
    }

    public function exit_tovar(Request $data, $id){
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

    public function details_product($id){
        $tovar = ProductModel::find($id);
        return view('admin.details_product', ['tovar' => $tovar]);
    }   
}
