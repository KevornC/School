<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\mealtype;
use App\Models\mealcategory;
use App\Models\User;
use App\Models\studentorder;

class StudentOrders extends Controller
{
    function viewOrder(){
      $meals=mealtype::with('mealcategories')->orderBy('mealtype','asc')->get();
      $starch=[];
      $meat=[];
      $veg=[];
      $bev=[];

      foreach($meals as $mtype){
        if($mtype->mealcategories->Category_Name=="Starch")
        {
          $starch[]=$mtype;
        }
        if($mtype->mealcategories->Category_Name=="Meat")
        {
          $meat[]=$mtype;
        }
        if($mtype->mealcategories->Category_Name=="Vegetable")
        {
          $veg[]=$mtype;
        }
        if($mtype->mealcategories->Category_Name=="Beverages")
        {
          $bev[]=$mtype;
        }
      }
      return view('Student.order',compact('starch','meat','veg','bev'));
    }

    function store(Request $req){
      $name=Session()->get('User');
      $name=$name['name'];
      // dd($req->Date);
      studentorder::create([
        'Name'=>$name,
        'Starch'=>$req->Starch,
        'Meat'=>$req->Meat,
        'Vegetable'=>$req->Veg,
        'Beverages'=>$req->Bev,
        'Date'=>$req->Date
      ]);
      return redirect('/Dashboard');
    }

    function Admin(){
      $meals=studentorder::all();
      return view('Admin.viewOrders',compact('meals'));
    }
}
