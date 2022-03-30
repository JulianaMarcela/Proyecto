<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Finalizacion;

class FinalizacionContoller extends Controller
{
    //
    public function index()
    {
        //pasamos todos los campos de articulo para ser retornados
        $finalizacion = Finalizacion::all();

        // (['id', 'name'])
        return $finalizacion;

    }

    public function store(Request $request)
    {
 
        $finalizacion = new Finalizacion();
        $finalizacion->avances = $request->avances;
        $finalizacion->fecha_avances = $request->fecha_avances;
        $finalizacion->save();

        return $finalizacion;
    }

    public function update(Request $request, $id)
    {
 
        $finalizacion = Finalizacion::findOrFail($request->id);
        $finalizacion->avances = $request->avances;
        $finalizacion->fecha_avances = $request->fecha_avances;
        $finalizacion->save();

        return $finalizacion;
    }

    public function destroy(Request $request, $id)
    {
 
        $finalizacion = Finalizacion::destroy($request->id);

        return $finalizacion;
    }
}
