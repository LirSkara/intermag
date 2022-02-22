<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_home(){
        return view('admin.admin_home');
    }

    public function main_carousel(){
        return view('admin.main_carousel');
    }
}
