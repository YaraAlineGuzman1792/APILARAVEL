<?php

namespace App\Http\Controllers;

use App\Models\RegistroDeEstado;
use Illuminate\Http\Request;

class RegistroDeEstadoController extends Controller
{
    public function index()
    {
        $registros = RegistroDeEstado::all();
        return response()->json($registros);
    }

    public function show($id)
    {
        $registro = RegistroDeEstado::find($id);
        if ($registro) {
            return response()->json($registro);
        }
        return response()->json(['message' => 'Registro de estado no encontrado'], 404);
    }

    public function store(Request $request)
    {
        $registro = new RegistroDeEstado();
        $registro->fecha_hora_camino = $request->input('fecha_hora_camino');
        $registro->arthur_id = $request->input('arthur_id');
        $registro->save();

        return response()->json($registro, 201);
    }
}
