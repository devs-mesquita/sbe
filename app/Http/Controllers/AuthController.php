<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthController extends Controller
{

	public function login()
	{
		// if(Auth::user())
		// {
		// 	return redirect()->intended('/home');
		// }
		
		return view('auth.login');
	}

	public function entrar(Request $request)
	{

		$credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

		return back();

	}

	public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect('/');
      }
}