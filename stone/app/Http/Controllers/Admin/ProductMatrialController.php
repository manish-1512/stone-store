<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductMatrialModel;
use Illuminate\Http\Request;

class ProductMatrialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $product_matrial_model;



    public function __construct()
    {
        $this->product_matrial_model = new ProductMatrialModel();
    }



    public function index()
    {
        $matrial_data =    $this->product_matrial_model->get();

        return view('admin.productMatrial.index',compact('matrial_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'matrial_name' => 'required|string|unique:product_matrials,matrial_name'
         ]); 
         
         $this->product_matrial_model->matrial_name = $request->matrial_name;

         if($this->product_matrial_model->save()){
            return redirect()->back();
         }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $matrial_data =    $this->product_matrial_model->find($id);

        return view('admin.productMatrial.edit',compact('matrial_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'matrial_name' => 'required|string|unique:product_matrials,matrial_name,'.$id
         ]); 
         
         

          $product_matrial =   $this->product_matrial_model->where('id',$id)->first(); 
          
           $product_matrial->matrial_name = $request->matrial_name;

         if($product_matrial->save()){
            return redirect()->back();
         }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
       $this->product_matrial_model->where('id',$id)->delete(); 
       return redirect()->back();
    }
}
