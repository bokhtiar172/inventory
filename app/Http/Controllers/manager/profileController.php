<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class profileController extends Controller
{
    public function view(){
      return view('manager.profile.view_profile');
    }


    public function update(Request $request,$id){
      $update_manager=User::find($id);
        $update_manager['name']=$request->name;
        $update_manager['email']=$request->email;
        $update_manager['phone']=$request->phone;
        $update_manager['location']=$request->location;
      $update_manager->save();
      return back();

    }



    public function change_password(Request $request){
      $this->validate($request,[
        'old_password'=>'required',
        'password'=>'required|confirmed',
      ]);

      $hashedpassword=Auth::user()->password;
        if (Hash::check($request->old_password,$hashedpassword)) {
            if(!Hash::check($request->password,$hashedpassword)){
              $user=User::find(Auth::id());
              $user->password=Hash::make($request->password);
              $user->save();
              Auth::logout();
              return redirect()->route('login');
            }
            else {
              return redirect()->route('manager.dashbord');
            }
        }else {

          return redirect()->route('manager.dashbord');
        }


    }
}
