<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) return back()->with('error', 'Email or Password is required');

        $data = [
            'email' => trim(strtolower($request->input('email'))),
            'password' => $request->input('password')
        ];

        return Auth::attempt($data) ? redirect(route('home')) : back()->with('error', 'Incorrect Credentials');
    }

    public function logout() {
        Auth::logout();
        return redirect()->intended('/');
    }
}
