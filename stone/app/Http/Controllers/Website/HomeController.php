<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\CmsPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){


        return view('website.index');
    } 

    public function about(){

       $about_data =  CmsPage::where('slug','about-us')->first();
        return view('website.about',compact('about_data'));
    }

    public function contactUs(){
        $contact_data =  CmsPage::where('slug','contact-us')->first();
        return view('website.contact',compact('contact_data'));
    }
    
    public function faq(){
        
    }

    public function terms(){
        $terms_data =  CmsPage::where('slug','terms')->first();
        return view('website.terms-conditions',compact('terms_data'));
    }

    public function privacyPolicy(){
        $policy_data =  CmsPage::where('slug','privacy-policy')->first();
        return view('website.privacy-policy',compact('policy_data'));
    }


}
