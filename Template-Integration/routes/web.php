<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Frontend\ServicesdetailsController;
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
Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'index']);
Route::get('/blog',[BlogController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/portfolio',[PortfolioController::class, 'index']);
Route::get('/services',[ServicesController::class, 'index']);
Route::get('/team',[TeamController::class, 'index']);
Route::get('/services-details',[ServicesdetailsController::class, 'index']);