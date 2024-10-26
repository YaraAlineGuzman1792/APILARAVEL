<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;
use Illuminate\Support\Facades\Log;

class RobotController extends Controller
{
    public function updateState(Request $request): \Illuminate\Http\JsonResponse
    {
        $validated = $request->validate([
            'state' => 'required|string|in:happy,sad,angry,sleepy,neutral',
        ]);

        // Guardar el estado en la base de datos
        $estados = new Estados();
        $estados->id_estado = $validated['id_estados'];
        $estados->descripccion = now();
        $estados->timestamp = now();
        $estados->save();

        // Enviar respuesta al controlador del robot
        return response()->json(['message' => 'Estado actualizado', 'state' => $estados->state]);
    }
}

