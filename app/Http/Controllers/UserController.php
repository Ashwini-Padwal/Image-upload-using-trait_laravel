<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserController extends Controller
{
    function userList(){
        $user=User::all();
        return view('user-form',['users'=>$user]);
    }
    function addUser(Request $request){
        $request->validate([
           "name"=>"required",
           "email"=>"required | email",
           "password"=>"required",
           "image"=>"required"  
        ]);
        $user=User::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password)
        ]);
      // $file=$request->file('image');
       //dd($file);
       //$filename=unique() .'_'.time().'.'.$file->getClientOriginalExtension();
      // $filename=Str:: random(10) .'_'.time().'.'.$file->getClientOriginalExtension();
       
      // $file->move(public_path('uploads/users'),$filename);
       // $user->image=$filename;
        $user->image=$user->upload($request->file('image'));
        $user->save();
        return redirect('user-list');
    }
}
