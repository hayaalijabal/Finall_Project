<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
        public function login()
        {
            return view('Auth.login');
        }

        public function authenticate(Request $request)
        {
            //dd($request->toArray());
            $Login_Data = ['email' => $request->email, 'password' => $request->password];

            if (Auth::attempt($Login_Data)) {
                return redirect()->route('dashboard.home');
            }

            return redirect()->back()->with('error', 'login failed');
        }

        public function logout()
        {
            if (Auth::check()) {
                Auth::logout();
            }

            return redirect()->route('Frontsite.Home');
        }

        public function register()
        {
            return view('Auth.register');
        }

        public function do_register(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'name' => 'required'
            ]);

            User::create([
                'email' => $request->email,
                'name' => $request->name,
                'password' => Hash::make($request->password)
            ]);

            return redirect()->route('login')->with('success','user created successfully');
        }

}
