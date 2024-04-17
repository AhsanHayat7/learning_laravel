<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductsController;
use App\Http\Controllers\frontend\SaleController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\WatchesController;


Route::get('/',[HomeController::class, 'index']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/products', [ProductsController::class, 'products']);
Route::get('/sale', [SaleController::class, 'sale']);
Route::get('/services', [ServicesController::class, 'services']);
Route::get('/watches', [WatchesController::class, 'watches']);

