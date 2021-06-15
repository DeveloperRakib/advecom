<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
   public function index(){
        return view('admin.home');
    }
// admin profile

    public function editProfile(){

        return view('admin.profile.editProfile');
        
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
        return view('admin.profile.image');
    }


    

    
   










}


