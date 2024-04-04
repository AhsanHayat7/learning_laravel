<?php
use App\Http\Controllers\frontend;
use App\Http\Controllers\frontend\ChartsController;
use App\Http\Controllers\frontend\ComponentsController;
use App\Http\Controllers\frontend\DashboardController;
use App\Http\Controllers\frontend\FormsController;
use App\Http\Controllers\frontend\IconsController;
use App\Http\Controllers\frontend\TablesController;
use App\Http\Controllers\frontend\BlankController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ErrorController;
use App\Http\Controllers\frontend\FAQController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\RegisterController;


use Illuminate\Support\Facades\Route;


Route::get('/blank',[BlankController::class, 'blank']);
Route::get('/contact',[ContactController::class, 'contact']);
Route::get('/error',[ErrorController::class, 'error']);
Route::get('/faq',[FAQController::class, 'faq']);
Route::get('/login',[LoginController::class, 'login']);
Route::get('/profile',[ProfileController::class, 'profile']);
Route::get('/register',[RegisterController::class, 'register']);

//Tables
Route::get('/data',[TablesController::class, 'data']);

Route::get('/general',[TablesController::class, 'general']);


//Charts
Route::get('/apexcharts',[ChartsController::class,'apexcharts']);
Route::get('/chartjs',[ChartsController::class, 'chartjs']);
Route::get('/echarts', [ChartsController::class, 'echarts']);

Route::get('/',[DashboardController::class, 'index']);

//Forms
Route::get('/editors',[FormsController::class, 'editors']);
Route::get('/elements',[FormsController::class, 'elements']);
Route::get('/layouts',[FormsController::class, 'layouts']);
Route::get('/validation',[FormsController::class, 'validation']);

// Icons
Route::get('/bootstrap',[IconsController::class, 'bootstrap']);
Route::get('/boxicons',[IconsController::class, 'boxicons']);
Route::get('/remix',[IconsController::class, 'remix']);

//Components

Route::get('/accordion',[ComponentsController::class, 'accordion']);
Route::get('/alerts',[ComponentsController::class, 'alerts']);
Route::get('/badges',[ComponentsController::class, 'badges']);
Route::get('/breadcrumbs',[ComponentsController::class, 'breadcrumbs']);
Route::get('/buttons',[ComponentsController::class, 'buttons']);
Route::get('/cards',[ComponentsController::class, 'cards']);
Route::get('/carousel',[ComponentsController::class, 'carousel']);
Route::get('/list-group',[ComponentsController::class, 'listgroup']);
Route::get('/modal',[ComponentsController::class, 'modal']);
Route::get('/pagination',[ComponentsController::class, 'pagination']);
Route::get('/progress',[ComponentsController::class, 'progress']);
Route::get('/spinners',[ComponentsController::class, 'spinners']);
Route::get('/tabs',[ComponentsController::class, 'tabs']);
Route::get('/tooltips',[ComponentsController::class, 'tooltips']);




