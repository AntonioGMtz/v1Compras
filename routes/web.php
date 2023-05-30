<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProovedorController;


Route::get('/', function () {
    return view('auth.login');
})->middleware('auth');


Route::get('/register', [RegisterController::class,'create'])->name('register.index');

Route::post('/register', [RegisterController::class,'store'])->name('register.store');


//Routes fo login
Route::get('/login', [SesionController::class,'create'])->name('login.index');
Route::post('/login', [SesionController::class, 'store'])
    ->name('login.store');

//Route for dashboard
Route::get('/dashboard', [DashboardController::class,'create'])->name('dashboard.index');

//Route for dashboard
Route::get('/proovedores', [ProovedorController::class,'create'])->name('proovedores.index');


Route::get('/logout', [SesionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::post('/logout', [SesionController::class, 'destroy'])
    ->name('login.destroy');


