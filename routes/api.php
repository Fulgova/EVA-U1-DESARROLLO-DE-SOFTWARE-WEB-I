<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerGet;
use App\Http\Controllers\ControllerPut;
use App\Http\Controllers\ControllerPost;
use App\Http\Controllers\ControllerDelete;


/*Route::get('/get', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

//Post
Route::post ('/post/{id}', [ControllerPost::class , 'post']);
Route::post ('/postproyecto/{id}/{Nombre}/{FechadeInicio}/{Estado}/{Responsable}/{Monto}', [ControllerPost::class , 'postproyecto']);

//Put
Route::put ('/put/{id}', [ControllerPut::class , 'put']);
Route::Put ('/putproyecto/{id}/{Nombre}/{FechadeInicio}/{Estado}/{Responsable}/{Monto}', [ControllerPut::class , 'putproyecto']);

//Delete
Route::delete ('/delete/{id}', [ControllerDelete::class , 'delete']);
Route::delete ('/deleteproyecto/{id}/{Nombre}/{FechadeInicio}/{Estado}/{Responsable}/{Monto}', [ControllerDelete::class , 'deleteproyecto']);