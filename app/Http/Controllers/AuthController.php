<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


use App\Models\User;


class AuthController
{
    public function register(Request $request) {

        $rules= [
            'user_name'=>'required|string',
            'email'=> 'required|string',
            'password' => 'required|string'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('Personal Access Token')->plainTextToken;
        $reponse = ['user' => $user, 'token' => $token];
        return response()->json($reponse, 200);
    }

    public function login(Request $request) {

        $rules= [
            'email'=> 'required|string',
            'password' => 'required|string'
        ];

        $request->validate($rules);

        $user = User::where('email', $request->email)->first();
        
        if($user && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $reponse=['user'=>$user, 'token'=>$token];
            return response()->json($reponse, 200);
        }

        $reponse = ['message' => 'Incorrect email or password'];
        return response()->json($reponse, 400);
    }

}
