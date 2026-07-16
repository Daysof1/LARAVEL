<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' =>  'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Credenciales inalidas'
            ], 401);
        }
        $token = $user->createToken('api-token')->plainTextToken;
        return response()->json([
            'token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => 3600,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
            ],
        ]);
    }


    /**
     * Devolver la informacion del usuario autenticado
     */
    public function me(Request $request)
    {
        return response()->json($request->user());
    }

    /**
     * Cerrar sesion
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Sesion cerrada corectamente'
        ]);

        
    }
}
