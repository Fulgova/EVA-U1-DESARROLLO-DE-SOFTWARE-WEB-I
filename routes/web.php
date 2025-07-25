<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get ('/get', [RutaController::class , 'get']);

Route::get ('/getid/{id}', [RutaController::class , 'getid']);

Route::get ('/nuevoproyecto/{id}/{Nombre}/{FechadeInicio}/{Estado}/{Responsable}/{Monto}', [RutaController::class , 'nuevoproyecto']);
