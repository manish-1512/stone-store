<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Countries;
use App\Models\User;
use App\Models\UserAddresses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{   

    public function profile(){

        $profile = User::select('name','email','phone')->where('id',Auth::user()->id)->first();

        return view('website.user.profile',compact('profile'));
    }

    public function updateProfile(Request $request){


        $request->validate([
            'name' => 'required|string|max:200',
            'phone' => 'required|string',
            'email' => "required|unique:users,email,".Auth::user()->id,
            
         ]);

        $profile = User::find(Auth::user()->id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;

        if($profile->save()){

            return redirect()->back()->with('profile','Your Profile is Updated');
        }else{
            
            return redirect()->back()->with('profile_not','somthing Went Wrong');
        }
        

    }   

    public function changePassword(){

        return view('website.user.password');

        }

    public function updatePassword(Request $request){

        
        $request->validate([
            'password' => 'required|string|min:8',
            'old_password' => 'required|string',

         ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return redirect()->back()->with('password_not','Your old Password is incorrect please enter valid password');
         }

        

         $user = User::find(Auth::user()->id);
         $user->password = Hash::make($request->password);
         if($user->save()){
            return redirect()->back()->with('password','Your  Password is Updated Successfully');
         }else{
            return redirect()->back()->with('password_not','Somthing Went Wrong');
         }

    }    

    public function dashboard(){
        return view('website.user.dashboard');
      }

     public function manageAddress(){

        $addresses = UserAddresses::where('user_id',Auth::user()->id)->get();

        $countries = Countries::get();

        return view('website.user.address',compact('addresses','countries'));
     } 

     public function addNewAddress(Request $request){

        $validator = Validator::make($request->all(), [   
            'full_name' => "required|string",
            'email' => "required|email",
            'mobile' => "required|numeric",
            'country' => "required|numeric",
            'state' => 'required|string',
            'city' => 'required|string',
            'postel_code' => 'required|numeric',
            'landmark' => 'required|string',
            'is_primary' => 'required|numeric',
        ]);

        if($validator->fails()){

            return response()->json(['status' => 401 ,'error' => $validator->errors()->toArray() ]);

        }else{

                $user_address_model = new UserAddresses();



                $user_address_model->full_name =$request->full_name;
                $user_address_model->user_id = Auth::user()->id;

                $user_address_model->email =$request->email;
                $user_address_model->mobile =$request->mobile;
                $user_address_model->country =$request->country;
                $user_address_model->state =$request->state;
                $user_address_model->city =$request->city;
                $user_address_model->postel_code =$request->postel_code;
                $user_address_model->landmark =$request->landmark;
                $user_address_model->is_primary =$request->is_primary;


                if($user_address_model->save()){
                    return response()->json(['status' => 200 ,'message' => 'Address Saved Successfully' ]);
                }else{
                    return response()->json(['status' => 500 ,'error' => 'somthing went Wrong' ]);
                }
            
                            
        } 
     }

     public function editAddress($id){

                  
    
              $address_data = UserAddresses::find($id);
    
               if($address_data){
                
                return response()->json(['status' => 200,'address_data' => $address_data]);
              
                }else{
                    return response()->json(['status' => 404,'message' => " no data found"]);
                }
        
     }





}
