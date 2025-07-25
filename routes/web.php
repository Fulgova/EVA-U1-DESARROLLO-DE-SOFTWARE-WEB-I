<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerGet;


Route::get('/', function () {
    return view('welcome');
});

Route::get ('/get', [ControllerGet::class , 'get']);

Route::get ('/getid/{id}', [ControllerGet::class, 'getid']);

Route::get ('/getproyecto/{id}/{Nombre}/{FechadeInicio}/{Estado}/{Responsable}/{Monto}', [ControllerGet::class, 'getproyecto']);
