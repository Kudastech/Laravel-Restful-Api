<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        $credentials = [
            'email' => 'admin@gmail.com',
            'password' => 'password',

        ];

        if(!Auth::attempt($credentials)){
            $user = new User();

            $user->name = 'admin';
            $user->email = $credentials['email'];
            $user->password = Hash::make($credentials['password']);

            $user->save();

            if(Auth::attempt($credentials)){
                $user = Auth::user();

                $adminToken = $user->createToken('admin-token', ['update', 'create', 'delete']);
                $updateToken = $user->createToken('update-token', ['update', 'create']);
                $basicToken = $user->createToken('basic-token');

                return [
                    'admin' => $adminToken->plainTextToken,
                    'update' => $updateToken->plainTextToken,
                    'basic' => $basicToken->plainTextToken,
                ];
            }
        }
    }
}
