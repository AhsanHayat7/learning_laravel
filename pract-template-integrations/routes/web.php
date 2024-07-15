<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\ServicesdetailsController;
use App\Http\Controllers\Frontend\TeamController;


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
Route::get('/about',[AboutController::class, 'about']);
Route::get('/blog',[BlogController::class, 'blog']);
Route::get('/contact',[ContactController::class, 'contact']);
Route::get('/portfolio',[PortfolioController::class, 'portfolio']);
Route::get('/services',[ServiceController::class, 'services']);
Route::get('/services-details',[ServicesdetailsController::class, 'servicesdetails']);
Route::get('/team',[TeamController::class, 'team']);
