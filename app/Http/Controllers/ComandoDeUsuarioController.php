<?php

namespace App\Http\Controllers;

use App\Models\ComandoDeUsuario;
use Illuminate\Http\Request;

class ComandoDeUsuarioController extends Controller
{
    public function index()
    {
        $comandos = ComandoDeUsuario::all();
        return response()->json($comandos);
    }

    public function show($id)
    {
        $comando = ComandoDeUsuario::find($id);
        if ($comando) {
            return response()->json($comando);
        }
        return response()->json(['message' => 'Comando no encontrado'], 404);
    }

    public function store(Request $request)
    {
        $comando = new ComandoDeUsuario();
        $comando->comando = $request->input('comando');
        $comando->fecha_hora = $request->input('fecha_hora');
        $comando->resultado = $request->input('resultado');
        $comando->sesion_de_usuario_id = $request->input('sesion_de_usuario_id');
        $comando->save();

        return response()->json($comando, 201);
    }
}
