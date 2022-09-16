<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function todoLogin()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 500);
        }

        if (Auth::guard('user')->attempt($request->only('username', 'password'))) {
            return redirect()->route('dashboard');
        }else{
            return  redirect()->back()->with('danger', 'Username Password  salah!');
        }
    }

    public function logout()
    {
        Auth::guard('user')->logout();

        return redirect()->route('todoLogin');
    }
}
