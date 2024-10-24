<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::all();
        return response()->json($estados);
    }

    public function show($id)
    {
        $estado = Estado::find($id);
        if ($estado) {
            return response()->json($estado);
        }
        return response()->json(['message' => 'Estado no encontrado'], 404);
    }

    public function store(Request $request)
    {
        $estado = new Estado();
        $estado->descripcion = $request->input('descripcion');
        $estado->registro_de_estados_id = $request->input('registro_de_estados_id');
        $estado->save();

        return response()->json($estado, 201);
    }
}
