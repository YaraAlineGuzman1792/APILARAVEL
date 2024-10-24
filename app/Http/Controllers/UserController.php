<?php

namespace App\Http\Controllers;

use App\Models\User; // Asegúrate de tener el modelo User importado
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Obtiene todos los usuarios
        return response()->json($users); // Devuelve los usuarios en formato JSON
    }
}

