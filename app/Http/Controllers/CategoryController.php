<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\mealtype;
use App\Models\mealcategory;

class CategoryController extends Controller
{
    function viewcat(){
      return view('Admin.AddCat');
    }

    function viewmeal(){

      $cat=mealcategory::all();
      return view('Admin.AddMeal',compact('cat'));
    }

    function add_cat(Request $req){
      // dd($req->desc);
      mealcategory::create([
        'Category_Name'=> $req->name,
        'Category_desc'=> $req->desc,
      ]);
      return redirect('/Dashboard');
    }


    function add_type(Request $req){

      $cat=mealcategory::find($req->Category);
      mealtype::create([
        'mealtype'=>$req->mealname,
        'category_ID'=>$cat->id
      ]);
      return redirect('/Dashboard');
    }
}
