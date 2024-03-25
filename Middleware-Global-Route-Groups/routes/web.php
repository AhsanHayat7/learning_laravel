<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;
use App\Modles\Customer;
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
Route::get('/data',[IndexController::class, 'index']);
Route::get('/profile', function(){
    return "welcome to your profile";
});
Route::get('/group',[IndexController::class, 'group']);
Route::get('/{lang?}', function ($lang = null){
    App::setLocale($lang);
    return view('welcome');
});
