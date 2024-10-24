<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ApiController extends Controller
{
//
    public function users(Request $request): \Illuminate\Http\JsonResponse
    {

        if ($request->has('active')) {
            $users = User::where('active', true)->get;
        } else {
            $users = User::all();

        }
        return response()->json($users);
    }

    public function login(Request $request): \Illuminate\Http\JsonResponse
    {

        $response = ["status" => 0, "msg" => ""];

        $data = json_decode($request->getContent());

        $user = User::where('email', $data->email)->first();

        if ($user) {
            if (Hash::check($data->password, $user->password)) {
                // Crear un token para el usuario
                $token  = $user->createToken($user->role . "_token")->plainTextToken;

                // Verificación de roles
                if ($user->role === 'admin') {
                    $response["msg"] = "Bienvenido, administrador";
                    $response["token"] = $token;
                    $response["role"] = "admin"; // Asignar rol de administrador
                } else if ($user->role === 'user') {
                    $response["msg"] = "Bienvenido, usuario";
                    $response["token"] = $token;
                    $response["role"] = "user"; // Asignar rol de usuario
                }

            } else {
                $response["msg"] = "Credenciales Incorrectas";
            }

    } else {
            $response["msg"] = "Usuario no Encontrado.";


        }

        return response()->json($response);

    }
}



