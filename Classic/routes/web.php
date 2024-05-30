<?php

use App\Http\Controllers\web\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\dashboard\AuthController;
use App\Http\Controllers\dashboard\BlogController;
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



// website

Route::get('/classic',[WebController::class, 'web'])->name('classic');
Route::get('/aboutpage',[WebController::class, 'about'])->name('about');
Route::get('/contactpage',[WebController::class, 'contact'])->name('contact');
Route::get('/blogpage',[WebController::class, 'blog'])->name('blog');

// dashboard

Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/charts',[DashboardController::class, 'charts'])->name('charts');
Route::get('/tables',[DashboardController::class, 'tables'])->name('tables');
Route::get('/forms',[DashboardController::class, 'forms'])->name('forms');
Route::get('/calendar',[DashboardController::class, 'calendar'])->name('calendar');
Route::get('/maps',[DashboardController::class, 'maps'])->name('maps');
Route::get('/login',[DashboardController::class, 'login'])->name('log');
Route::get('/register',[DashboardController::class, 'register'])->name('reg');
Route::get('/forget-pass',[DashboardController::class, 'forget'])->name('forget');
Route::get('/buttons',[DashboardController::class, 'buttons'])->name('buttons');
Route::get('/badges',[DashboardController::class, 'badges'])->name('badges');
Route::get('/tabs',[DashboardController::class, 'tabs'])->name('tabs');
Route::get('/cards',[DashboardController::class, 'cards'])->name('cards');
Route::get('/alerts',[DashboardController::class, 'alerts'])->name('alerts');
Route::get('/progress-bar',[DashboardController::class, 'progress'])->name('progress');
Route::get('/modal',[DashboardController::class, 'modal'])->name('modal');
Route::get('/switch',[DashboardController::class, 'switches'])->name('switch');
Route::get('/grid',[DashboardController::class, 'grid'])->name('grid');
Route::get('/fontawesome',[DashboardController::class, 'font'])->name('font');
Route::get('/typo',[DashboardController::class, 'typo'])->name('typo');

//login and registration

//login and register
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'log'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'registerForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});
Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    Route::get('/',[DashboardController::class, 'index']);
});

//Blog management

Route::get('/Blog',[BlogController::class,'blog'])->name('manage-blog');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('create');
Route::post('/dashboard/blogs', [BlogController::class, 'store'])->name('store');
