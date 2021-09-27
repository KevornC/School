<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class info extends Controller
{
    function register(Request  $req){
      User::create([
      'name'=>$req->name,
      'email'=>$req->email,
      'password'=>$req->password,
    ]);
      return redirect('/');
    }
    function login(Request $req){
      $user=User::where('email',$req->email)->where('password',$req->password)->first();
      $role=$user->Role;
      $name=$user->name;
      if($role=="Student"){
        Session()->put('User',$user);
        return view('Student.dashboard',['Name'=>$name]);
      }else{
          Session()->put('User',$user);
        return view('Admin.dashboard',['Name'=>$name]);
      }
    }
    function logout(){
      Session()->flush();
      Session()->regenerateToken();

      return view('home');
    }
}
