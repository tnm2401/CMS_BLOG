<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('BE.auth.register');
    }
    
    public function login()
    {
        return view('BE.auth.login');
    }

    public function create(Request $request)
    {
        // valid:
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:30|email|unique:users',
            'password' => 'required|min:8|max:30|confirmed',
            'password_confirmation' => 'required',
            'checkbox_policy' => 'accepted'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = md5($request->password);
        $user->rights = 0;
        $query = $user->save();

        if ($query) {
            return response()->json(1);
        } else {
            return response()->json(0);
        }
    }
}
