<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   

    public function profile(){

        $profile = User::select('name','email','phone')->where('id',Auth::user()->id)->first();

        return view('website.user.profile',compact('profile'));
    }

    public function updateProfile(Request $request){

        
        $profile = User::find(Auth::user()->id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;

        $profile->save();
        
        return redirect()->back();

    }   

    public function changePassword(){

        return view('website.user.password');
        }

    public function dashboard(){
        return view('website.user.dashboard');
    }










}
