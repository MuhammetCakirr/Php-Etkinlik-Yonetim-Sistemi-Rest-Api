<?php

namespace App\Http\Controllers;

use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $data = array(
            "status" => 200,
            "message" => "Login successfully.",
            "token" => $token
        );
        return response()->json($data);
    }

    public function logout(){
        try {
            $user = JWTAuth::parseToken()->authenticate();
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json(['message' => 'Logout successfully.'], 200);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Invalid token.'], 400);
        }
    }
}
