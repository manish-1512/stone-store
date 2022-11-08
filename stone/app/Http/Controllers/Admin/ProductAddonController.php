<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FinalProductItem;
use App\Models\ProductAddonPrice;
use App\Models\ProductMatrialModel;
use Illuminate\Http\Request;

class ProductAddonController extends Controller

{
    public  $product_addon_model;

    public function __construct()
    {
        $this->product_addon_model = new ProductAddonPrice();
    }


    public function index(){

        $data =  $this->product_addon_model->paginate(12);

        $product_top_category =  FinalProductItem::where('parent_id',null)->get();
        $product_matrial = ProductMatrialModel::get();

        return  view('admin.productAddonPrice.index',compact('data','product_top_category','product_matrial'));

    }   

    public function add(){

    }

    public  function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public  function destroy(){

    }


}
