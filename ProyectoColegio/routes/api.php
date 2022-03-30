<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\MateriaController;
use App\Http\Controllers\Api\RecursosController;
use App\Http\Controllers\Api\ProyectoController;
use App\Http\Controllers\Api\FinalizacionController;
use App\Http\Controllers\Api\EstudianteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [UserController::class, 'register']);

Route::post('login', [UserController::class, 'login']);



Route::group( ['middleware' => ["auth:sanctum"]], function(){
    //rutas
    Route::get('userProfile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);
});


Route::get('materia', [MateriaController::class, 'index']);
Route::post('materia', [MateriaController::class, 'store']);
Route::put('/materia/{id}', [MateriaController::class,'update']);
Route::delete('/materia/{id}', [MateriaController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/recurso',[RecursosController::class, 'index']);
Route::post('/recurso',[RecursosController::class, 'store']);
Route::put('/recurso/{id}',[RecursosController::class, 'update']);
Route::delete('/recurso/{id}',[RecursosController::class, 'destroy']);
//EJERCICIO Eliminar el token, eliminar registro de personalacces mensaje con "Su sesión ha sido cerrada"

Route::get('/proyecto',[ProyectoController::class, 'index']);
Route::post('/proyecto',[ProyectoController::class, 'store']);
Route::put('/proyecto/{id}',[ProyectoController::class, 'update']);
Route::delete('/proyecto/{id}',[ProyectoController::class, 'destroy']);

Route::get('/finalizacion',[FinalizacionController::class, 'index']);
Route::post('/finalizacion',[FinalizacionController::class, 'store']);
Route::put('/finalizacion/{id}',[FinalizacionController::class, 'update']);
Route::delete('/finalizacion/{id}',[FinalizacionController::class, 'destroy']);

Route::get('/estudiante', [EstudianteController::class, 'index']);
Route::post('/estudiante', [EstudianteController::class, 'store']);
Route::put('/estudiante/{id}', [EstudianteController::class, 'update']);
Route::delete('/estudiante/{id}', [EstudianteController::class, 'destroy']);