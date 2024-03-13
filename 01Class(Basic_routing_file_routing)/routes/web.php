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
/*
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/learning_laravel', function (){
    //echo " Welcome to learn laravel famework";

//});

Route::get('/learning_laravel', function (){
    return view('demo');

});
//Route::post('/check', function (){
//    echo "Checking laravel";
//});

Route::get('/check/{name}/{id?}', function ($name, $id= null) {
    $data = compact('name' ,'id');
    return view('demo')->with($data);
});

//Route::put('user/{id}', function ($id){

//});

//Route::patch

//Route:delete('user/{id}', function ($id){

//});
*/


Route::get('/{name?}',function ($name = null){
    $demo = "<h2>learning laravel<h2>";
    $data = compact('name', 'demo');
    return view('home')->with($data);
});

