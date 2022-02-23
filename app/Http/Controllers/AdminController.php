<?php

namespace App\Http\Controllers;

use App\Models\MainCarousel;

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

    public function delete_carousel($id){
        MainCarousel::find($id)->delete();
        return redirect()->route('main_carousel');
    }
}
