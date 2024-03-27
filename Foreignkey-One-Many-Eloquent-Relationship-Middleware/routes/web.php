<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


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

//Protected
//Route::get('/data', [IndexController::class, 'index'])->middleware('guard');
//Route::get('/group', [IndexController::class, 'group'])->middleware('guard');
Route::middleware(['guard','web'])->group(function(){
    // Protected
    Route::get('/data', [IndexController::class, 'index']);
    Route::get('/group', [IndexController::class, 'group']);

});
//-----------------
Route::get('/profile',function(){
    return "Welcome to your profile";
});
Route::get('/login', function(){
    session()->put('user_id', 1);
    return redirect('/'); //redirect to main page
});
Route::get('/logout', function(){
    session()->forget('user_id');
    return redirect('/'); //redirect to main page
});
Route::get('/no-access', function(){
    echo "You're not allowed to accesss the page";
    die;
});    
Route::get('/{lang?}', function ($lang = null) {
    App::setlocale($lang);
    $user_id = session('user_id');
    return view('welcome', ['user_id'=> $user_id]);
});
