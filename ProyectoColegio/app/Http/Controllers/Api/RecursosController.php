<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recursos;

class RecursosController extends Controller
{
    //
    public function index()
    {
        $recurso = Recursos::all();
        return $recurso;
    }

    public function store (Request $request)
    {
        $recurso = new Recursos();
        $recurso->nombre_recurso = $request->nombre_recurso;
        $recurso->tipo = $request->tipo;
        $recurso->save();

        return response()->json([
            "status" =>1,
            "msg"=>"¡Registro de recursos existoso!",
        ]);
    }

    public function update(Request $request, $id)
    {
        $recurso =  Recursos::findOrFail($request->id);
        $recurso->nombre_recurso = $request->nombre_recurso;   
        $recurso->tipo = $request->tipo;
        $recurso->save();
        return $recurso;
    }

    public function destroy(Request $request, $id)
    {
        $recurso = Recursos::destroy($request->id);
        return $recurso;
    }


}
