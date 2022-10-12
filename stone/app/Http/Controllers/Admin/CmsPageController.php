<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CmsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $cms_model;


    public function __construct()
    {
        $this->cms_model = new CmsPage();
    }

    public function index()
    {

        $data = $this->cms_model->get();

        return view('admin.cms.index',compact('data'));
        
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
    public function edit($slug)
    {
         $data = $this->cms_model->where('slug',$slug)->first();
         return view('admin.cms.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        

        $data = $this->cms_model->where('slug',$request->slug)->first(); 

            
                //  if($request->hasFile('banner') && ($request->banner != null ) ){
                
                //                                 $image =  $request->file('banner');
                //                                 $extension = $image->getClientOriginalExtension();
                //                                 $file_name = time().'-'.$data->name.'.'.$extension;
                //                                 $image->move(WEBSITE_BANNER,$file_name);
                //                                 $banner = $file_name;
                
                //                                 if(file_exists(WEBSITE_BANNER.$old_banner)){
                //                                     unlink (public_path(WEBSITE_BANNER.$old_banner));
                //                                 }
                //  } 

            DB::table('cms_pages')->where('slug', $request->slug)->update([ 'title' =>$request->title,  'body' =>$request->body ,'meta_title' => $request->meta_title , 'meta_description' => $request->meta_description ,'meta_keywords'=> $request->meta_keywords ]);                                


            return redirect()->back();
               
    }

}
