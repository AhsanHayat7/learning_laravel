<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
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

//Route::get('/customers', function(){
//    $customers = Customers::all();
//    echo "<pre>";
//    print_r($customers->toArray());




Route::get('/register', [RegistrationController::class,'index']);

Route::post('/register', [RegistrationController::class,'register']);

Route::get('/customer/view',[CustomerController::class ,'view']);

Route::get('/customer/create', [CustomerController::class,'create']);

Route::post('/customer', [CustomerController::class,'store']);



Route::get('/customer', [CustomerController::class, 'index']);
