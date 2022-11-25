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

        $available_designs = ProductVariant::select('final_product_items.id as id','final_product_items.name','final_product_items.image','product_variants.price')->leftJoin('final_product_items','final_product_items.id','product_variants.final_product_item_id')->where('product_matrial_id',$request->product_matrial_id)->where('item_parent_id',$request->item_parent_id)->get();


                      $dsg = '<div class="disign"> <div class="row">';
                      foreach ($available_designs as $key=> $designs) {

                        $dsg .= '<div class="col-4 col-md-3 "> 
                                <input class="designbox"  type="radio" name="design" id ="'.$designs->id.'"  value="'.$designs->id.'" >
                             <label class="" for="'.$designs->id.'">
                             <img src=" '. APP_PATH.FINAL_ITEM_IMAGE.$designs->image .' " alt="" height="50">
                             <p class="mb-0 mt-1"> '.$designs->name.' </p>
                             <p class="mb-0 mt-1"> + ₹'.$designs->price.' </p>
                             </label>
                             </div>';

                      }
                      
                      $dsg .= '</div> </div>';
                      
                 
                       

        return response()->json(['design' => $dsg]);
    }



}
