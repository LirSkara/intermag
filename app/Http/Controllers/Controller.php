<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\CategoryModel;
use App\Models\HotLine;
use App\Models\ProductModel;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $categories = new CategoryModel();
        View::share('categories', $categories->get());

        $hot_line = HotLine::find(1)->first();
        $hot_line_count = HotLine::count();
        View::share('hot_line', $hot_line);
        View::share('hot_line_count', $hot_line_count);

     
    }
}
