<?php

namespace App\Http\Controllers;

use App\Models\estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{

    public function index()
    {
        $estudiante = estudiante::all();//el numero de filas

        return view('Estudiante.viewEstudiante', compact("estudiante"));
    }

    public function createEstudiante()
    {
        return view('Estudiante.createEstudiante');
    }

    //Esta funcion esta utilizandose tanto en la web como en la api
    public function saveEstudiante(Request $request)
    {
        if ($request->control=='form' ||$request->control=='api') {
            $estudiante = $this->validate($request, [
                "carnet" => "required",
                "nombre" => "required",
                "apellido" => "required",
                "carrrera" => "required",
                "semestre" => "required",
            ]);

            estudiante::create([
                "carnet" => $estudiante["carnet"],
                "nombre" => $estudiante["nombre"],
                "apellido" => $estudiante["apellido"],
                "carrrera" => $estudiante["carrrera"],
                "semestre" => $estudiante["semestre"],
            ]);
        }

        if ($request->control=='form'){
            return redirect('/')->with('Guardado', "Estudiante Registrado");
        } elseif($request->control=='api'){
            return response()->json([
                'codigo'=> '000',
                'desccripcion'=> 'Guardado exitosamente',
            ]);
        }

    }

    public function editStuden($carnet)
    {
        $estudiante = estudiante::findOrFail($carnet);

        return view('Estudiante.updateEstudiante', compact('estudiante'));
    }

    public function updateStuden(Request $request, $carnet)
    {
        $estudiante = request()->except((['_token', '_method']));
        estudiante::where('carnet', '=', $carnet)->update($estudiante);

        return redirect('/')->with('Editado', "Estudiante Editado");
    }

    public function deleteStuden($carnet)
    {
        estudiante::destroy($carnet);
        return redirect('/')->with('Eliminado', "Estudiante Eliminado");
    }

    //api-visualizar tabla
    public function getAll()
    {
        $studen =estudiante::all();
        return $studen;
    }


}
