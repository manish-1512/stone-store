<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $setting_model;



    public function __construct()
    {
        $this->setting_model = new Setting();
    }

    public function index()
    {

        $data = $this->setting_model->where('slug','settings')->first(); 
        
        return view('admin.settings.index',compact('data'));

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
        
   


        $data = $this->setting_model->where('slug','settings')->first(); 

            $old_logo = $data->logo;
            $old_favicon = $data->favicon;

            $data->site_title = $request->site_title;
            $data->seo_title = $request->seo_title;
            $data->seo_description = $request->seo_description;
            $data->copyright = $request->copyright;
            $data->address = $request->address;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->about_us = $request->about_us;
            $data->facebook = $request->facebook;
            $data->twitter = $request->twitter;
            $data->youtube = $request->youtube;
            $data->instagram = $request->instagram;
            $data->record_per_page = $request->record_per_page;



                 if($request->hasFile('logo') && ($request->logo != null ) ){
                
                                                $image =  $request->file('logo');
                                                $extension = $image->getClientOriginalExtension();
                                                $file_name = time().'-logo.'.$extension;
                                                $image->move(LOGO_IMAGE_URL,$file_name);
                                                $data->logo = $file_name;
                
                                                if(file_exists(LOGO_IMAGE_URL.$old_logo)){
                                                    unlink (public_path(LOGO_IMAGE_URL.$old_logo));
                                                }
                
                 } 

                if($request->hasFile('favicon') && ($request->favicon != null )){

                    $image =  $request->file('favicon');
                    $extension = $image->getClientOriginalExtension();
                    $file_name = time().'-favicon.'.$extension;
                    $image->move(FAVICON_IMAGE_URL,$file_name);
                    $data->favicon = $file_name;

                    if(file_exists(FAVICON_IMAGE_URL.$old_favicon)){
                        unlink (public_path(FAVICON_IMAGE_URL.$old_favicon));
                    }

                }                            

            $data->save();

            return redirect()->back();
               
            


    }

}
