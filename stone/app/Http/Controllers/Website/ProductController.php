<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($slug){

        $category_details = Categories::where('slug',$slug)->first();

        return view('website.shop',compact('category_details'));

    }
}
