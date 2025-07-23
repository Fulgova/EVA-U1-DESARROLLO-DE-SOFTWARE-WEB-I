<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\ControllerPut;
use App\Http\Controllers\ControllerPost;
use App\Http\Controllers\ControllerDelete;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post ('/post', [ControllerPost::class , 'post']);

Route::put ('/put', [ControllerPut::class , 'put']);

Route::delete ('/delete', [ControllerDelete::class , 'delete']);