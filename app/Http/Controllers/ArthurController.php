<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arthur;
class ArthurController extends Controller
{
    public function index()
    {
        $arthurs = Arthur::all();
        return response()->json($arthurs);
    }

    public function show($id)
    {
        $arthur = Arthur::find($id);
        if ($arthur) {
            return response()->json($arthur);
        }
        return response()->json(['message' => 'Arthur not found'], 404);
    }

    public function store(Request $request)
    {
        $arthur = new Arthur();
        $arthur->nombre = $request->input('nombre');
        $arthur->modelo = $request->input('modelo');
        $arthur->usuario_usuario_id = $request->input('usuario_usuario_id');
        $arthur->save();

        return response()->json($arthur, 201);
    }
}
