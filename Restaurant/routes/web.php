<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ChefsController;
use App\Http\Controllers\Frontend\EventsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MenuController;
use App\Http\Controllers\Frontend\SpecialsController;


Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/chefs',[ChefsController::class, 'chefs']);
Route::get('/events',[EventsController::class, 'events']);
Route::get('/gallery',[GalleryController::class, 'gallery']);
Route::get('/contact',[ContactController::class, 'contact']);
Route::get('/menu',[MenuController::class, 'menu']);
Route::get('/specials',[SpecialsController::class, 'specials']);
