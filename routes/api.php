<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerGet;
use App\Http\Controllers\ControllerPut;
use App\Http\Controllers\ControllerPost;
use App\Http\Controllers\ControllerDelete;


Route::get('/get', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Get
Route::get ('/get', [ControllerGet::class , 'get']);
Route::get ('/getid/{id}', [ControllerGet::class, 'getid']);
Route::get ('/getproyecto/{id}/{Nombre}/{FechadeInicio}/{Estado}/{Responsable}/{Monto}', [ControllerGet::class, 'getproyecto']);

//Post
Route::post ('/post/{id}', [ControllerPost::class , 'post']);

//Put
Route::put ('/put/{id}', [ControllerPut::class , 'put']);

//Delete
Route::delete ('/delete/{id}', [ControllerDelete::class , 'delete']);
