<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductDetailController;
use App\Http\Controllers\frontend\ShopController;

Route::get('/',[HomeController::class, 'index']);
Route::get('/cart',[CartController::class, 'cart']);
Route::get('/checkout',[CheckoutController::class, 'checkout']);
Route::get('/product-details',[ProductDetailController::class, 'productdetail']);
Route::get('/shop',[ShopController::class, 'shop']);

