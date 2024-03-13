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

//Route::get('/', function () {
  //  return view('welcome');
//});

//Route::get('/user',function (){
  //  echo "How are you";
//});
//Route::get('/user/{name}/{id?}',function ($name, $id=null){
  //  $data = compact('name', 'id');
    //return view('demo')->with($data);
//});

Route::get('/', function (){
    return view('layouts.home');
});


Route::get('/about', function (){
    return view('layouts.about');
});


Route::get('/course', function (){
    return view('layouts.course');
});
