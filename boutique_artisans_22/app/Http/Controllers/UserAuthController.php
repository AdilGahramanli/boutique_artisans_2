<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $registerUserData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:8'
        ]);

        /** @var User $user */
        $user = User::create([
            'name' => $registerUserData['name'],
            'email' => $registerUserData['email'],
            'password' => Hash::make($registerUserData['password']),
        ]);

        return response()->json([
            'user'=> $user,
        ]);
    }

        public function login(Request $request){
            if (Auth::attempt($request->only('email', 'password'))) {
                $user = Auth::user();
                $token = $user->createToken($user->name)->plainTextToken;

                return response()->json(['access_token' => $token]);
            }

            return response()->json('error', 422);

//            $loginUserData = $request->validate([
//                'email'=>'required|string|email',
//                'password'=>'required|min:8'
//            ]);
//            $user = User::where('email',$loginUserData['email'])->first();
//            if(!$user || !Hash::check($loginUserData['password'],$user->password)){
//                return response()->json([
//                    'message' => 'Invalid Credentials'
//                ],401);
//            }
////
//            $token = $user->createToken($user->name)->plainTextToken;
//
//            return response()->json([
//                'access_token' => $token,
//            ]);
        }

    public function logout(){
        auth()->user()->tokens()->delete();

        return response()->json([
            "message"=>"logged out"
        ]);
    }

}
