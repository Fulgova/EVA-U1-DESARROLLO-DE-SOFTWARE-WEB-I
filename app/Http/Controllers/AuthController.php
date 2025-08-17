<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Support\Facades\Hash; // opcional si no usas cast 'hashed'
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Si tu User tiene cast 'password' => 'hashed', NO hagas bcrypt:
        $user = User::create($data);

        // Si NO usas el cast 'hashed', entonces:
        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        // ]);

        // Puedes generar token así:
        // $token = JWTAuth::fromUser($user);
        // o con el guard explícito:
        $token = auth('api')->login($user);

        return response()->json(['user' => $user, 'token' => $token], 201);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // Mejor usa el guard explícito para evitar confusiones de defaults:
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Credenciales invalidas'], 401);
        }

        return response()->json(['token' => $token]);
    }

    public function perfil()
    {
        return response()->json(auth('api')->user());
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json(['message' => 'Sesion cerrada con exito']);
    }
}
