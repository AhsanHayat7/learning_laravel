<?php

use App\Http\Controllers\CustomController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware'=>'guest'], function(){
    Route::get('login',[CustomController::class, 'index'])->name('login');
    Route::post('login',[CustomController::class, 'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[CustomController::class, 'register_view'])->name('register');
    Route::post('register',[CustomController::class, 'register'])->name('register')->middleware('throttle:2,1');

});

Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[CustomController::class, 'home'])->name('home');
    Route::get('logout',[CustomController::class, 'logout'])->name('logout');

});