<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FinalProductItem as ModelsFinalProductItem;
use Illuminate\Http\Request;

class FinalProductItem extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $final_product_item_model;


    public function __construct()
    {
        $this->final_product_item_model = new ModelsFinalProductItem();
    }



    public function index()
    {
        $data =    $this->final_product_item_model->select('final_product_items.name','final_product_items.is_active','final_product_items.id','final_product_items.image','final_product_items.created_at','sub_item.name as parent_id')->leftJoin('final_product_items as sub_item','final_product_items.parent_id','sub_item.id')->get();
        return view('admin.productItem.index',compact('data'));
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
            'name' => 'required|string|unique:final_product_items,name',
            'image' => 'nullable|image|mimes:png|max:1048',
         ]); 
         
         $this->final_product_item_model->name = $request->name;
         $this->final_product_item_model->parent_id = $request->parent_id;

                if($request->hasFile('image') ){
                        
                    $image =  $request->file('image');
                    $extension = $image->getClientOriginalExtension();
                    $file_name = time().'-image.'.$extension;
                    $image->move(FINAL_ITEM_IMAGE,$file_name);
                    $this->final_product_item_model->image = $file_name;

                
                    } 


         if($this->final_product_item_model->save()){
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
        $matrials =  $this->final_product_item_model->get();          
        $data =    $this->final_product_item_model->find($id);

        return view('admin.productItem.edit',compact('data','matrials'));
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
            'name' => 'required|string|unique:final_product_items,name',
            'image' => 'nullable|image|mimes:png|max:1048',
         ]);
         

          $product_item =   $this->final_product_item_model->where('id',$id)->first(); 
          
           $product_item->name = $request->name;
           $product_item->parent_id = $request->parent_id;


           if($request->hasFile('image')){            

                    $cat_image =  $request->file('image');            
                    $extension = $cat_image->getClientOriginalExtension();
                    $file_name = time().'.'.$extension;
                    $cat_image->move(FINAL_ITEM_IMAGE,$file_name);
                    $product_item->image = $file_name;

             } 

         if($product_item->save()){
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
       $this->final_product_item_model->where('id',$id)->delete(); 
       return redirect()->back();
    }

    public function changeStatus($id){

        $data =  $this->final_product_item_model->select('is_active')->where('id',$id)->first()->toArray();

        $status =($data['is_active'] == '1')?'0':'1';

      if($this->final_product_item_model->where('id',$id)->update(['is_active'=> $status ])){

        return   redirect()->back()->with('status_update', 'The status is updated');       

       }else{
           return   redirect()->back()->with('status_not_update', 'The status is not  updated');    
       }
    }
}
