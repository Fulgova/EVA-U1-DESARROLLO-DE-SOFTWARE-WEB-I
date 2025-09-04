<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerGet;
use App\Http\Controllers\ControllerPut;
use App\Http\Controllers\ControllerPost;
use App\Http\Controllers\ControllerDelete;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProyectoController;


Route::get('/get', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Get
Route::get('/get', [ControllerGet::class, 'get']);
Route::get('/getid/{id}', [ControllerGet::class, 'getid']);
Route::get('/getproyecto/{id}/{Nombre}/{FechadeInicio}/{Estado}/{Responsable}/{Monto}', [ControllerGet::class, 'getproyecto']);

//Post
Route::post('/post/{id}', [ControllerPost::class, 'post']);

//Put
Route::put('/put/{id}', [ControllerPut::class, 'put']);

//Delete
Route::delete('/delete/{id}', [ControllerDelete::class, 'delete']);

//Usuario y proyecto
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);



Route::middleware('jwt.auth')->group(function () {
    Route::get('/perfil',  [AuthController::class, 'perfil']);
    Route::post('/logout', [AuthController::class, 'logout']);

    //Evaluación unidad 3
    Route::post('/proyectos', [ProyectoController::class, 'store']);//Crear proyecto
    Route::get('/proyectos', [ProyectoController::class, 'index']);//Listar todos los proyectos
    Route::get('/proyectos/{id}', [ProyectoController::class, 'show']);//Ver proyecto por ID
    Route::put('/proyectos/{id}', [ProyectoController::class, 'updatePut']);//Actualizar todos los campos del proyecto por ID
    Route::patch('/proyectos/{id}', [ProyectoController::class, 'updatePatch']);//Actualizar uno o más campos del proyecto por ID
    Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy']);//Eliminar proyecto por ID
});