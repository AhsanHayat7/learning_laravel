<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

use App\Models\Customer;
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

// Protected

Route::get('/data',[IndexController::class, 'index'])->middleware('guard');
Route::get('/group',[IndexController::class, 'group'])->middleware('guard');
// ------------
Route::get('/profile', function(){
    return "welcome to your profile";
});
Route::get('/no-access',function (){
    echo "You're not allowd to acces the page";
    die;
});
Route::get('/{lang?}', function ($lang = null){
    App::setLocale($lang);
    return view('welcome');
});
