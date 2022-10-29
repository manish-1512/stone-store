<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($slug){

        $category_data =Categories::where('slug',$slug)->first();

        

        $subcategories =   Categories::where('parent_id',$category_data->id  )->get();

        return view('website.categories',compact('subcategories','category_data'));

    }
}
