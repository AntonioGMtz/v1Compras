<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProovedorController;
use App\Http\Controllers\AgproovedorController;


Route::get('/', function () {
    return view('auth.login');
})->middleware('auth');


Route::get('/register', [RegisterController::class,'create'])->name('register.index');

Route::post('/register', [RegisterController::class,'store'])->name('register.store');


//Routes for LOGIN
Route::get('/login', [SesionController::class,'create'])->name('login.index');
Route::post('/login', [SesionController::class, 'store'])
    ->name('login.store');

//Route for dashboard
Route::get('/dashboard', [DashboardController::class,'create'])->name('dashboard.index');

//Route for dashboard
Route::get('/proovedores', [ProovedorController::class,'create'])->name('proovedores.index');

//Route for ADD proovedor
Route::get('/agregarproov', [AgproovedorController::class,'create'])->name('agregarproov.index');

Route::post('/agregarproov',[AgproovedorController::class,'store'])->name('agregarproov.store');


//Route for PROOVEDORES
Route::get('/proovedores', [ProovedorController::class, 'index'])->name('proovedores.index');
Route::delete('/proovedores/{id}', [ProovedorController::class, 'destroy'])->name('proovedores.destroy');


Route::get('/logout', [SesionController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::post('/logout', [SesionController::class, 'destroy'])
    ->name('login.destroy');


