<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{

    public function index()
    {
        $estudiante= estudiante::all();//el numero de filas

        return view('Estudiante.viewEstudiante', compact("estudiante"));
    }

    public function createEstudiante()
    {
        return view('Estudiante.createEstudiante');
    }

    public function saveEstudiante(Request $request)
    {
        $estudiante = $this->validate($request, [
            "carnet"          => "required",
            "nombre"      => "required",
            "apellido"    => "required",
            "carrrera"    => "required",
            "semestre"       => "required",
        ]);

        estudiante::create([
            "carnet"     => $estudiante["carnet"],
            "nombre"     => $estudiante["nombre"],
            "apellido"   => $estudiante["apellido"],
            "carrrera"    => $estudiante["carrrera"],
            "semestre"   => $estudiante["semestre"],
        ]);

        return redirect('/')->with('Guardado', "Estudiante Registrado");
    }

    public function update(Request $request, estudiante $estudiante)
    {
        //
    }

    public function destroy(estudiante $estudiante)
    {
        //
    }
}
