<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;


class EstudianteController extends Controller
{
    //
    public function index()
    {
        //pasamos todos los campos de articulo para ser retornados
        $estudiante = Estudiante::all();
        return $estudiante;

    }

    public function store(Request $request)
    {
 
        $estudiante = new Estudiante();
        $estudiante->nom_estudiante = $request->nom_estudiante;
        $estudiante->apell_estudiante = $request->apell_estudiante;
        $estudiante->direccion = $request->direccion;
        $estudiante->telefono = $request->telefono;
        $estudiante->tipo_documento = $request->tipo_documento;
        $estudiante->num_documento = $request->num_documento;
        $estudiante->save();

        return response()->json([
            "status" => 1,
            "msg" => "¡Registro de estudiante exitoso!",
        ]);
    }

    public function update(Request $request, $id)
    {
 
        $estudiante = Estudiante::findOrFail($request->id);
        $estudiante->nom_estudiante = $request->nom_estudiante;
        $estudiante->apell_estudiante = $request->apell_estudiante;
        $estudiante->direccion = $request->direccion;
        $estudiante->telefono = $request->telefono;
        $estudiante->tipo_documento = $request->tipo_documento;
        $estudiante->num_documento = $request->num_documento; 
        $estudiante->save();
        return $estudiante;
    }

    public function destroy(Request $request, $id)
    {
 
        $estudiante = Estudiante::destroy($request->id);

        return $estudiante;
    }
    
}
