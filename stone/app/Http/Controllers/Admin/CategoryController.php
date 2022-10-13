<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{   

    protected $category_model;

    public function __construct()
    {
        $this->category_model = new Categories();
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories =  $this->category_model->get();
        $top_categories = $this->category_model->where('parent_id',null)->get();

        return view('admin.categories.index',compact('categories','top_categories'));
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

        // echo "<pre>";
        // print_r($request->all());die;


        $request->validate([
            'name' => 'required|string|unique:categories',
            'order' => 'required|integer',
            'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
         ]); 

         $this->category_model->name = $request->name;
         $this->category_model->slug =  Str::slug($request->name);
         $this->category_model->parent_id = $request->parent_id;
         $this->category_model->hindi_name = $request->hindi_name;
         $this->category_model->order = $request->order;
         $this->category_model->banner = $request->banner;
         $this->category_model->short_description = $request->short_description;
         $this->category_model->description = $request->description;


          if($request->hasFile('banner')){
         
                                         $image =  $request->file('banner');
                                         $extension = $image->getClientOriginalExtension();
                                         $file_name = time().'.'.$extension;
                                         $image->move(CATEGORY_BANNER,$file_name);
                                         $this->category_model->banner = $file_name;
         
                                     } 

            $this->category_model->save();  
            
            return redirect()->back();


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
