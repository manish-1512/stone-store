<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\FinalProductItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $product_model;

        public function __construct()
        {
               $this->product_model = new Product();

        }

    public function index()
    {
        $products = $this->product_model->with('Category')->get(); 

        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $categories =  Categories::where('parent_id','!=','null')->get();
       $available_to_create = FinalProductItem::where('parent_id',null)->get(); 
        
        return view('admin.product.add', compact('categories','available_to_create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function DesignsData(Request $request){
        
        $available_to_create = FinalProductItem::wherein('parent_id',$request->checked_value)->get();
        return response()->json(['data'=>$available_to_create]);
    }


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [  

            "name" => "required|string|unique:products",
            "category_id"=> "required|numeric",
            "description"=> "required",
            "specifications"=> "required",
            "image"=> "required|image|mimes:jpeg,png,jpg|max:1048",
            "gallery_images"=> "required",
            "gallery_images.*"=> "required|image|mimes:jpeg,png,jpg|max:1048",
            "sku"=> "required",
            "price"=> "required|numeric",
            "sale_price"=> "required|numeric",
            "quantity"=> "required|numeric",
            "available_to_create"=> "nullable",
            "disappear_after_order"=> "required|numeric",
            "certificate"=> "nullable||mimes:jpeg,png,jpg,pdf|max:1048"          
        ]);

        if($validator->fails()){

            return response()->json(['status' => 401 ,'error' => $validator->errors()->toArray() ]);

        }else{ 



        $this->product_model->name = $request->name;
        $this->product_model->slug = Str::slug($request->name,'-');
        $this->product_model->category_id = $request->category_id;
        $this->product_model->description = $request->description;
        $this->product_model->specifications = $request->specifications;
        $this->product_model->sku = $request->sku;
        $this->product_model->price = $request->price;
        $this->product_model->sale_price = $request->sale_price;
        $this->product_model->quantity = $request->quantity;
        $this->product_model->available_to_create = implode(',',$request->available_to_create);
        $this->product_model->disappear_after_order = $request->disappear_after_order;
        $this->product_model->certificate = $request->certificate;







                                      if($request->hasFile('image')){
        
                                        $image =  $request->file('image');

                                        $extension = $image->getClientOriginalExtension();
                                        $file_name = time().'.'.$extension;

                                        $image =   Image::make($image->getRealPath());
                                        $image->resize(480,340);
                                        $image->save(PRODUCT_IMAGE.$file_name,100);

                                        $this->product_model->image = $file_name;
        
                                    } 


                             

                                    if($request->hasfile('gallery_images'))
                                     {
                                        $files = [];

                                        foreach($request->file('gallery_images') as $file)
                                        {
                                            $name = time().rand(1,999).'-gallery.'.$file->extension();

                                            $image_gallary =   Image::make($file->getRealPath());
                                            $image_gallary->resize(480,340);
                                            $image_gallary->save(PRODUCT_IMAGE.$name,100);
                                            array_push($files,$name);  
                                        }
                                        $this->product_model->gallery_images = implode(",",$files);
                                     }
                                     
                            
                                    


                        if($this->product_model->save()){
                            return response()->json(['status' => 200 ,'message' => "Your Action IS Done" ]);
                        }else{
                            return response()->json(['status' => 500 ,'message' => "Somthing Went Wrong " ]);
                        }


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
        $product_data =  $this->product_model->find($id);

        $product_data->gallery_images  = explode(',',$product_data->gallery_images);
        return view('admin.product.view',compact('product_data') );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories =  Categories::where('parent_id','!=','null')->get();
        $available_to_create = FinalProductItem::where('parent_id',null)->get(); 
        $product_data =  $this->product_model->find($id);
        $product_data->gallery_images = explode(',',$product_data->gallery_images);
        $product_data->available_to_create = explode(',',$product_data->available_to_create);


        // echo "<pre>";
        // print_r( json_decode(json_encode($product_data), true));die();

        return view('admin.product.edit',compact('product_data','categories','available_to_create'));
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
        $validator = Validator::make($request->all(), [  

            "name" => "required|string|unique:products,name,".$id,
            "category_id"=> "required|numeric",
            "description"=> "required",
            "specifications"=> "required",
            "image"=> "nullable|image|mimes:jpeg,png,jpg|max:1048",
            "gallery_images"=> "nullable",
            "gallery_images.*"=> "image|mimes:jpeg,png,jpg|max:1048",
            "sku"=> "required",
            "price"=> "required|numeric",
            "sale_price"=> "required|numeric",
            "quantity"=> "required|numeric",
            "available_to_create"=> "nullable",
            "disappear_after_order"=> "required|numeric",
            "certificate"=> "nullable||mimes:jpeg,png,jpg,pdf|max:1048"          
        ]);

        if($validator->fails()){

            return response()->json(['status' => 401 ,'error' => $validator->errors()->toArray() ]);

            }else{

            $product_data =   $this->product_model->find($id);


            $product_data->name = $request->name;
            $product_data->slug = Str::slug($request->name,'-');
            $product_data->category_id = $request->category_id;
            $product_data->description = $request->description;
            $product_data->specifications = $request->specifications;
            $product_data->sku = $request->sku;
            $product_data->price = $request->price;
            $product_data->sale_price = $request->sale_price;
            $product_data->quantity = $request->quantity;
            $product_data->available_to_create = implode(',',$request->available_to_create);
            $product_data->disappear_after_order = $request->disappear_after_order;
            $product_data->certificate = $request->certificate;
                

            if($request->hasFile('image')){
        
                $image =  $request->file('image');
                $extension = $image->getClientOriginalExtension();
                $file_name = time().'.'.$extension;
                $image->move(PRODUCT_IMAGE,$file_name);
                $product_data->image = $file_name;

            } 

            
            if($request->hasfile('gallery_images'))
            {
               $files = [];

               foreach($request->file('gallery_images') as $file)
               {
                   $name = time().rand(1,999).'-gallery.'.$file->extension();
                   $file->move(PRODUCT_IMAGE, $name);  
                   array_push($files,$name);  
               }
               $product_data->gallery_images = implode(",",$files);
            }

                
            if($product_data->save()){
                return response()->json(['status' => 200 ,'message' => "Your Action IS Done" ]);
            }else{
                return response()->json(['status' => 500 ,'message' => "Somthing Went Wrong " ]);
            }



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
        $product_data =  $this->product_model->with('Category')->find($id);

        if($product_data->delete()){
            return redirect()->back()->with('success','Your data is Deleted');
        }else{
            return redirect()->back()->with('error','Somthing Went Wrong');
        }
    }


    
    public function changeStatus($id){

        

        $data =  Product::select('status')->where('id',$id)->first();
    

        $status =($data['status'] == '1')?'0':'1';

      if($this->product_model->where('id',$id)->update(['status'=> $status ])){

        return   redirect()->back()->with('success', 'The status is updated');       

       }else{
           return   redirect()->back()->with('error', 'The status is not  updated');    
       }
    }
    
    public function stockStatus($id){

    
        $data =  Product::select('stock_status')->where('id',$id)->first();
    

        $status =($data['stock_status'] == '1')?'0':'1';

      if($this->product_model->where('id',$id)->update(['stock_status'=> $status ])){

        return   redirect()->back()->with('success', 'The stock status is updated');       

       }else{
           return   redirect()->back()->with('error', 'The stock status is not  updated');    
       }
    }

}
