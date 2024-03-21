<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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
Route::get('/', function (){
    return view('index');
});


Route::get('/register', [CustomerController::class, 'index']);
Route::post('/customer', [CustomerController::class, 'store']);
Route::get('/customer',[CustomerController::class, 'view'])->name('customer.view');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/register', [CustomerController::class, 'register']);
Route::get('/customer/delete/{id}',[CustomerController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[CustomerController::class, 'edit'])->name('customer.edit');
Route::get('/customer/update/{id}',[CustomerController::class, 'update'])->name('customer.update');