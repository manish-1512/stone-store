<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\CategoryLabelModel;
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
        
        $categories =  $this->category_model->select('categories.name','categories.id','sub_cat.name as parent_id')->leftJoin('categories as sub_cat','categories.parent_id','sub_cat.id')->orderBy('categories.order')->paginate(10);
        
        $category_label = CategoryLabelModel::get();

        $all_categories =  $this->category_model->get();

        return view('admin.categories.index',compact('categories','category_label','all_categories'));
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
    public function store(Request $request ,$id=0)
    {
        $request->validate([
            'name' => 'required|string|unique:categories',
            'order' => 'required|integer',
            'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'image' => 'nullable|image|mimes:png|max:1048',
            'label_id' => 'nullable|integer',
         ]); 

         $this->category_model->name = $request->name;
         $this->category_model->slug =  Str::slug($request->name);
         $this->category_model->parent_id = $request->parent_id;
         $this->category_model->label_id = $request->label_id;
         $this->category_model->hindi_name = $request->hindi_name;
         $this->category_model->order = $request->order;
       
         $this->category_model->short_description = $request->short_description;
         $this->category_model->description = $request->description;


          if($request->hasFile('banner')){
         
                                         $image =  $request->file('banner');
                                         $extension = $image->getClientOriginalExtension();
                                         $file_name = time().'.'.$extension;
                                         $image->move(CATEGORY_BANNER,$file_name);
                                         $this->category_model->banner = $file_name;
         
                 } 
            if($request->hasFile('image')){
    
            $cat_image =  $request->file('image');
            $extension = $cat_image->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            $cat_image->move(CATEGORY_IMAGE,$file_name);
            $this->category_model->image = $file_name;

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
        $category = $this->category_model->find($id);
        $all_categories =  $this->category_model->get();
        $category_label = CategoryLabelModel::get();

        return view('admin.categories.edit',compact('category','category_label','all_categories'));
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
            'name' => 'required|string|unique:categories,name,'.$id,
            'order' => 'required|integer',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image' => 'nullable|image|mimes:png|max:1048',
            'label_id' => 'nullable|integer',
         ]); 

         $category = $this->category_model->find($id);

         $category->name = $request->name;
         $category->slug =  Str::slug($request->name);
         $category->parent_id = $request->parent_id;
         $category->label_id = $request->label_id;
         $category->hindi_name = $request->hindi_name;
         $category->order = $request->order;
         
         $category->short_description = $request->short_description;
         $category->description = $request->description;


          if($request->hasFile('banner')){
         
                                         $image =  $request->file('banner');
                                         $extension = $image->getClientOriginalExtension();
                                         $file_name = time().'.'.$extension;
                                         $image->move(CATEGORY_BANNER,$file_name);
                                         $category->banner = $file_name;
         
                                     } 

            if($request->hasFile('image')){

            $cat_image =  $request->file('image');
            $extension = $cat_image->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            $cat_image->move(CATEGORY_IMAGE,$file_name);
            $category->image = $file_name;

        }                          

            $category->save();  
            
            return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->category_model->where('parent_id',$id)->get();

        if(count($category) > 0 ){

            return redirect()->back()->with('delete_error',"you can not delete a parent category ? first delete a child category");

        }else{
            
            $this->category_model->where('id',$id)->delete();
            return redirect()->back();

        }
    }
}
