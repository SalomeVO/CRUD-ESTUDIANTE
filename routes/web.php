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


//Vista
Route::get('/', function () { return view('Estudiante/viewEstudiante'); });
//Formulario
Route::get('/formEstudiante', [EstudianteController::class, 'createEstudiante'])->name('createEstudiante');
//Guardar
Route::post('/saveEstudiante', [EstudianteController::class, 'saveEstudiante'])->name('estudiante.saveEstudiante');
