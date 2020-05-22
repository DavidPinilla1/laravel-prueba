<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $body = $request->all();
        $body['password'] = Hash::make($body['password']);
        $user = User::create($body);
        return response($user, 201);
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return response([
                'message' => 'Wrong Credentials'
            ], 400); //res.status(400).send({'message' : 'Wrong Credentials'})
        }
        $user = Auth::user(); //req.user tb podemos utilizar $request->user()
        $token = $user->createToken('authToken')->accessToken;
        return response([
            $user,
            $token
        ]);
    }
}
