<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function login(Request $request ){    
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);


            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    'login' => 'ok',
                    'message' => 'Login successful.',
                    'token'=>$token
                ], 200);
            }

            return response()->json([
                'login' => 'failed',
                'message' => 'Invalid credentials.'
            ], 401);

        } catch (ValidationException $e) {

            return response()->json([
                'message' => 'Validation Error',
                'errors' => $e->errors(),
            ], 422); 
        }
    }

    public function register (Request $request){
        try {
            $validatedData = $request->validate([
                'email'=>'required|email|unique:users|string|max:100',
                'password'=>['required','confirmed','string',Password::min(8)->letters()->numbers()->symbols()->mixedCase()],
                'name'=>'required|string|max:30',
            ]);
            
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);
            
            $token = $user->createToken('auth_token')->plainTextToken;
    
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ], 201);

        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $e->errors(),
            ], 422);
        }
        
        
    }
}
