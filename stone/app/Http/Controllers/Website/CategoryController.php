<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index($slug){



      
        
        

        

        $ids =      DB::table('categories')
        ->whereIn('parent_id', Categories::where('parent_id', Categories::where('slug',$slug)->value('id') )->pluck('id')->toArray())
         ->get();

         echo "<pre>";
                  print_r(  json_decode(json_encode( $ids), true));
    }
}
