<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SesionController;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/register', [RegisterController::class,'create'])->name('register.index');
Route::get('/login', [SesionController::class,'create'])->name('login.index');

