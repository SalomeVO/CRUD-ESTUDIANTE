<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//API-lista
Route::get("get_studen",[EstudianteController::class,"getAll"])->name("api-getAll");
//API-guardar utilizamos la funcion que ya teniamos de guardar
Route::put("saveEstudiante",[EstudianteController::class,"saveEstudiante"])->name("api-saveEstudiante");
//API-Guardar
Route::post('/editApi/{carnet}', [EstudianteController::class, 'editStudenApi'])->name('api-editStuden');
//API-Para eliminar estudiante
Route::delete('/delateApi/{carnet}', [EstudianteController::class,'destroyStuden'])->name('api-destroyStuden');
