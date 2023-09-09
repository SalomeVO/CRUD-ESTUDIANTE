<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () { return view('Estudiante/viewEstudiante'); });

//Vista
Route::get('/',  [EstudianteController::class, 'index'])->name('index');

//Formulario
Route::get('/formEstudiante', [EstudianteController::class, 'createEstudiante'])->name('createEstudiante');
//Guardar
Route::post('/saveEstudiante', [EstudianteController::class, 'saveEstudiante'])->name('estudiante.saveEstudiante');
//Editar
Route::get('/edit/{carnet}',  [EstudianteController::class, 'editStuden'])->name('editStuden');
//Guardar edicion
Route::patch('/post/{carnet}',[EstudianteController::class, 'updateStuden'])->name('updateStuden');
//Eliminar
Route::delete('/delate/{carnet}', [EstudianteController::class,'deleteStuden'])->name('deleteStuden');
