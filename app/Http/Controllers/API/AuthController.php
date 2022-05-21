<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class AuthController extends Controller
{
    public function login(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $token = Auth::user()->createToken('login')->accessToken;
            return response()->json(['token' => $token], 200);
        }

        return response()->json(['error' => 'Unauthorized'], ResponseAlias::HTTP_UNAUTHORIZED);
    }

    public function register(Request $request)
    {

        $validator = Validator::make(request()->all(), [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'status' => ResponseAlias::HTTP_BAD_REQUEST,
            ], ResponseAlias::HTTP_BAD_REQUEST);
        }

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        $token = $user->createToken('login')->accessToken;

        return response()->json(['token' => $token], ResponseAlias::HTTP_OK);
    }
}
