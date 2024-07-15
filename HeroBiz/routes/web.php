<?php
use App\Http\Controllers\frontend;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PortfolioController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\BlogdetailsController;
use App\Http\Controllers\frontend\Home2Controller;
use App\Http\Controllers\frontend\Home3Controller;
use App\Http\Controllers\frontend\Home4Controller;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/contact',[ContactController::class, 'contact']);
Route::get('/portfolio', [PortfolioController::class, 'portfolio']);
Route::get('/services',[ServicesController::class, 'services']);
Route::get('/team', [TeamController::class, 'team']);
Route::get('/blog-details', [BlogdetailsController::class, 'blogdetails']);
Route::get('/index-2', [Home2Controller::class, 'index2']);
Route::get('/index-3', [Home3Controller::class, 'index3']);
Route::get('/index-4', [Home4Controller::class, 'index4']);
Route::get('/portfolio-details', [Home4Controller::class, 'portfoliodetails']);



