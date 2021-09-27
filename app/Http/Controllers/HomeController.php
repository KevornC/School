<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\mealtype;
use App\Models\mealcategory;
use App\Models\User;

class HomeController extends Controller
{
    function view(Request $req){
      if(Session()->has('User')){
        $sessionuser=Session()->get('User');
        $user=User::where('email',$sessionuser['email'])->where('password',$sessionuser['password'])->first();
        if($user['Role']=="Student"){
          Session()->put('User',$user);
          return view('Student.dashboard',['Name'=>$user['name']]);
        }else{
            Session()->put('User',$user);
          return view('Admin.dashboard',['Name'=>$user['name']]);
        }


      }elseif(Session()->missing('User')){
        return view('home');
      }
      }

      function viewMeals(){

        $meals=mealtype::with('mealcategories')->orderBy('category_ID','desc')->get();
        return view('Admin.meals',compact(['meals']));
      }
}
