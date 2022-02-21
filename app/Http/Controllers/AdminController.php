<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_panel(){
        return view('admin.main_panel');
    }
}
