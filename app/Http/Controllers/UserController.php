<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json($user);
        }
        return response()->json(['message' => 'Usuario no encontrado'], 404);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->id=$request->input('id');
        $user->name= $request->input('name');
        $user->email = $request->input('email');
        $user->email_verified_at = $request->input('email-verified-at');
        $user->pasword = $request->input('pasword');
        $user->remenber_token = $request->input('remember-token');
        $user->create_at = $request->input('create-at');
        $user->update_at= $request->input('update-at');
        $user->save();

        return response()->json($user, 201);
    }
}
