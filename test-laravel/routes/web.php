<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// If we have repeated routes we can use the name and group route to have clarity inside our laravel web applications
Route::prefix('user')->name('user.')->group(function() {

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/add', [HomeController::class, 'add'])->name('aindex');
Route::get('/edit', [HomeController::class, 'edit'])->name('eindex');
Route::get('/show', [HomeController::class, 'show'])->name('sindex');
Route::get('/delete', [HomeController::class, 'delete'])->name('dindex');


Route::get('/', function () {
    return view('users');
})->name('all');


Route::post('/', function () {
    return view('users');
})->name('store');


Route::put('/{user}', function () {
    return view('users');
})->name('update');
});