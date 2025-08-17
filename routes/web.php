<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerGet;


Route::get('/', function () {
    return view('welcome');
});

