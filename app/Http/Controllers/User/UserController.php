<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
           
        ]);

        User::findOrFail(Auth::id())->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'update_at' => Carbon::now(),

            ]
        );
        $notification = array(
        'message'=> 'your profile update',
        'alert-type' => 'success'

        );
        return Redirect()->back()->with($notification);

    }

    
    public function image(){
        return view('user.image');
    }


    public function imageChange(Request $request){

        $old_image = $request->old_image;

        if(Auth::user()->image == 'img/rana.jpg'){
            
            $imageName = rand(11111, 99999) . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->resize(300,300)->save('img' . '/'. $imageName);
            $save_url = 'img' . '/'. $imageName;
            User::findOrFail(Auth::id())->update([
                'image' =>$save_url
            ]);
            $notification = array(
        'message'=> 'update your image',
        'alert-type' => 'success'

        );
        return Redirect()->back()->with($notification);


        }else{
            unlink($old_image);
             $imageName = rand(11111, 99999) . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->resize(300,300)->save('img' . '/'. $imageName);
            $save_url = 'img' . '/'. $imageName;
            User::findOrFail(Auth::id())->update([
                'image' =>$save_url
            ]);
            $notification = array(
        'message'=> 'update your image',
        'alert-type' => 'success'

        );
        return Redirect()->back()->with($notification);


        }

    }

    public function updatePassowrd(){
        return view('user.updatePassword');
    }

    public function changePassowrd(Request $request){ 

        $request->validate([
            'current_pas' => 'required',
            'new_pas' => 'required',
            'confirm_pas' => 'required',
        ]);
            $old_pas =Auth::user()->password;
            $current_pas =$request->current_pas;
            $new_pas = $request->new_pas;
            $confirm_pas = $request->confirm_pas;


            
            if(Hash::check($current_pas, $old_pas)){
               if($new_pas==$confirm_pas){
                    User::findOrFail(Auth::id())->update([
                        'password' => Hash::make($new_pas)
                    ]);
                    Auth::logout();
                    $notification = array(
        'message'=> 'Yur Password Change ',
        'alert-type' => 'error'

        );
        return Redirect()->route('login')->with($notification);
               }else{
                   $notification = array(
        'message'=> 'new passord and confirm password not match',
        'alert-type' => 'error'

        );
        return Redirect()->back()->with($notification);
               }
            }else{

        $notification = array(
        'message'=> 'Not match your old password',
        'alert-type' => 'error'

        );
        return Redirect()->back()->with($notification);
            }
    }



















}
