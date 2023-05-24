<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/register', [RegisterController::class,'create'])->name('register.index');

Route::post('/register', [RegisterController::class,'store'])->name('register.store');



Route::get('/login', [SesionController::class,'create'])->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');


