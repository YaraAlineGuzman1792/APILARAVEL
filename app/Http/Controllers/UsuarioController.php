<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            return response()->json($usuario);
        }
        return response()->json(['message' => 'Usuario no encontrado'], 404);
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre_completo = $request->input('nombre_completo');
        $usuario->correo = $request->input('correo');
        $usuario->telefono = $request->input('telefono');
        $usuario->contrasena = $request->input('contrasena');
        $usuario->fecha_registro = $request->input('fecha_registro');
        $usuario->save();

        return response()->json($usuario, 201);
    }
}
