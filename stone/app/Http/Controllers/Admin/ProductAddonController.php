<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FinalProductItem;
use App\Models\ProductMatrialModel;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductAddonController extends Controller

{
    public  $product_addon_model;

    public function __construct()
    {
        $this->product_addon_model = new ProductVariant();
    }


    public function index(){

        $data =  $this->product_addon_model->select('product_variants.id','product_variants.price','product_matrials.matrial_name as matrial','fp_parent.name as parent','product_variants.created_at','fp_design.name as design')
                    ->leftJoin('final_product_items as fp_parent','fp_parent.id','product_variants.item_parent_id')
                    ->leftJoin('product_matrials','product_matrials.id','product_variants.product_matrial_id')
                    ->leftJoin('final_product_items as fp_design','fp_design.id','product_variants.final_product_item_id')
                    ->paginate(12);

        $product_top_category =  FinalProductItem::where('parent_id',null)->get();
        $product_matrial = ProductMatrialModel::get();

        return  view('admin.productAddonPrice.index',compact('data','product_top_category','product_matrial'));

    }   

    public function add(){

    }

    public  function store(Request $request){

        $request->validate([
            'product_matrial_id' => 'required|numeric',
            'final_product_item_id' => 'required|numeric',
            'item_parent_id' => 'required|numeric',
            'price' => 'required|numeric',
         ]);


        if($this->product_addon_model->where('product_matrial_id',$request->product_matrial_id)->where('final_product_item_id',$request->final_product_item_id)->exists()){
            return redirect()->back();
        }else{
            
                     $this->product_addon_model->product_matrial_id = $request->product_matrial_id;
                     $this->product_addon_model->final_product_item_id = $request->final_product_item_id;
                     $this->product_addon_model->item_parent_id = $request->item_parent_id;
                     $this->product_addon_model->price = $request->price;
            
                     if($this->product_addon_model->save()){
                        return redirect()->back();
                     }

        }


    }


    public function getDesign(Request $request){
        $product_item_designs =  FinalProductItem::where('parent_id',$request->id)->get()->toArray();
        return response()->json(['data' =>$product_item_designs]);
		

    }

    public function edit(){

    }

    public function update(){

    }

    public  function destroy(){

    }


}
