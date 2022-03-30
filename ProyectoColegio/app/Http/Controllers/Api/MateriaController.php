<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materia;
use Hash;

class MateriaController extends Controller
{
    //

    public function index()
    {
        //pasamos todos los campos de articulo para ser retornados
        $materia = Materia::all();

        // (['id', 'name'])
        return $materia;

    }

    public function store(Request $request)
    {
 
        $materia = new Materia();
        $materia->nombre = $request->nombre;
        $materia->descripcion = $request->descripcion;

        $materia->save();

        return $materia;
    }

    public function update(Request $request, $id)
    {
 
        $materia = Materia::findOrFail($request->id);
        $materia->nombre = $request->nombre;
        $materia->descripcion = $request->descripcion;

        $materia->save();

        return $materia;
    }

    public function destroy(Request $request, $id)
    {
 
        $materia = Materia::destroy($request->id);

        return $materia;
    }
    
}
