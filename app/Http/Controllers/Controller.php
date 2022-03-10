<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\CategoryModel;

use App\Models\PunktsModel;
use App\Models\HotLine;
use App\Models\PayMethod;
use App\Models\ProductModel;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $categories = new CategoryModel();
        View::share('categories', $categories->all());
        $punkts = new PunktsModel();
        View::share('punkts', $punkts->all());
        View::share('categories', $categories->get());
        $hot_line = HotLine::find(1);
        View::share('hot_line', $hot_line);
        $hot_line_count = HotLine::count();
        View::share('hot_line_count', $hot_line_count);
        $method_pay =  new PayMethod();
        View::share('method_pay', $method_pay->all());
        $method_pay_count = PayMethod::count();
        View::share('method_pay_count', $method_pay_count);
    }
}
