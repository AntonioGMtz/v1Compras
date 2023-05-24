<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/register', [RegisterController::class,'create'])->name('register.index');

Route::post('/register', [RegisterController::class,'store'])->name('register.store');


//Routes fo login
Route::get('/login', [SesionController::class,'create'])->name('login.index');
Route::post('/login', [SesionController::class, 'store'])
    ->name('login.store');

//Route for dashboard
Route::get('/dashboard', [DashboardController::class,'create'])->name('dashboard.index');


