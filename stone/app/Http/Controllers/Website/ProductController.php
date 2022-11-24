<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\FinalProductItem;
use App\Models\Product;
use App\Models\ProductMatrialModel;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index($slug){

        $category_details = Categories::where('slug',$slug)->first();
        $products  = Product::with('category')->where('category_id', $category_details->id)->where('status',1)->orderBy('created_at','DESC')->get();
        return view('website.shop',compact('category_details','products'));

    }


    public function productDetails($category,$slug){

        $product_details = Product::with('category')->where('slug',$slug)->first();
        $product_details->gallery_images = explode(',', $product_details->gallery_images);
        $product_matrials = ProductMatrialModel::orderBy('matrial_name')->get();
        $available_to_create = FinalProductItem::whereIn('id',explode(',', $product_details->available_to_create))->get();
        return view('website.product-details',compact('product_details','available_to_create','product_matrials'));

    }


    public function availableDesigns(Request $request){

        $available_designs = ProductVariant::with('finalItem')->where('product_matrial_id',$request->product_matrial_id)->where('item_parent_id',$request->item_parent_id)->get();


        $div	=	' <div class="disign">

                        <div class="row">

                          @for($i=1;$i<10;$i++)
                          <div class="col-4 col-md-3 ">
                            <input class="checkbox-tools2" type="radio" name="design" id="pandent{{$i}}">
                            <label class="for-checkbox-tool" for="pandent{{$i}}">
                              <img src="" alt="" height="50">
                            <p class="mb-0 mt-1"> <small>PANDENT </small></p>  
                            </label>
                          </div>
                          @endfor
                        </div>

                      </div>';

        return response()->json($available_designs);
    }



}
