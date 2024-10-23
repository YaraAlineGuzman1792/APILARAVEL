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
            $users = User::where('active',true)->get;
        } else {
            $users = User::all();

        }
        return response()->json($users);
    }

public function login(Request $request){

}
}

