<?php

namespace App\Http\Controllers;

use App\Models\SesionDeUsuario;
use Illuminate\Http\Request;

class SesionDeUsuarioController extends Controller
{
    public function index()
    {
        $sesiones = SesionDeUsuario::all();
        return response()->json($sesiones);
    }

    public function show($id)
    {
        $sesion = SesionDeUsuario::find($id);
        if ($sesion) {
            return response()->json($sesion);
        }
        return response()->json(['message' => 'Sesión no encontrada'], 404);
    }

    public function store(Request $request)
    {
        $sesion = new SesionDeUsuario();
        $sesion->fecha_hora_inicio = $request->input('fecha_hora_inicio');
        $sesion->fecha_hora_cierre = $request->input('fecha_hora_cierre');
        $sesion->usuario_usuario_id = $request->input('usuario_usuario_id');
        $sesion->save();

        return response()->json($sesion, 201);
    }
}

