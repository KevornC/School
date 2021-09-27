<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
  return view('home');
});

//register
Route::get('/Register','App\Http\Controllers\PrimaryController@register');
Route::post('/Register','App\Http\Controllers\info@register');

//Login
Route::get('/Login','App\Http\Controllers\PrimaryController@login');
Route::post('/Dashboard','App\Http\Controllers\info@login');

//logout
Route::get('/logout','App\Http\Controllers\info@logout');

//Dashboard
Route::get('/Dashboard','App\Http\Controllers\HomeController@view');


//Admin Add Meal Category and type

Route::get('/AddCategory','App\Http\Controllers\CategoryController@viewcat');
Route::Post('/AddCategory','App\Http\Controllers\CategoryController@add_cat');

//
Route::get('/AddMeal','App\Http\Controllers\CategoryController@viewmeal');
Route::Post('/AddMeal','App\Http\Controllers\CategoryController@add_type');

Route::get('/ViewMeals','App\Http\Controllers\HomeController@viewMeals');

//View Orders
Route::get('/ViewStudentOrders','App\Http\Controllers\StudentOrders@Admin');

//Student Routes

Route::get('/MakeOrder','App\Http\Controllers\StudentOrders@viewOrder');
Route::post('/MakeOrder','App\Http\Controllers\StudentOrders@store');
