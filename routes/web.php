<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerGet; 


Route::get('/', function () {
    return view('welcome');
});

Route::view('/registro', 'register');
Route::view('/inicio-sesion', 'login');