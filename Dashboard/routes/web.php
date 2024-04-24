<?php
use App\Http\Controllers\frontend;
use App\Http\Controllers\frontend\AuthController;
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
use App\Http\Controllers\frontend\CategoriesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\UploadController;
use App\Http\Models\Customer;

use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductDetailController;
use App\Http\Controllers\frontend\ShopController;
use App\Http\Controllers\frontend\ProductImageController;



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

// Categories-table from data

Route::get('/Add/All/Category',[CategoriesController::class, 'add'])->name('add');
Route::post('/Add/All/Category',[CategoriesController::class, 'store'])->name('customer.store');
Route::get('/all',[CategoriesController::class, 'all']);
Route::get('/Add/Category',[CategoriesController::class, 'form'])->name('add.category');

// Delete Route

Route::get('/add/delete/{id}',[CategoriesController::class, 'delete'])->name('customer.delete');
Route::get('/add/delete/{id}',[CategoriesController::class, 'delete'])->name('customer.delete');
Route::get('/add/edit/{id}',[CategoriesController::class, 'edit'])->name('customer.edit');

//product

Route::get('/Add/All/Product',[ProductController::class, 'addproduct'])->name('all');
Route::post('/Add/All/Product',[ProductController::class, 'store'])->name('product.store');
Route::get('Add/Product', [ProductController::class, 'viewproduct'])->name('add.product');


// upload

Route::post('/upload',[UploadController::class, 'upload']);
Route::get('/upload', function(){
    return view('upload');
});

//boutique web

Route::get('/',[HomeController::class, 'index']);
Route::get('/cart',[CartController::class, 'cart']);
Route::get('/checkout',[CheckoutController::class, 'checkout']);
Route::get('/product-details/{id}', [ProductDetailController::class, 'productdetail'])->name('product-details');

Route::get('/shop',[ShopController::class, 'shop']);

//login and register

Route::group(['middleware'=>'guest'],function(){
    Route::get('/login',[AuthController::class, 'log'])->name('login');
    Route::post('/login',[AuthController::class, 'login'])->name('login');

    Route::get('/register',[AuthController::class, 'reg'])->name('register');
    Route::post('/register',[AuthController::class, 'register'])->name('register');

});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    Route::get('/home',[DashboardController::class, 'home']);
});

