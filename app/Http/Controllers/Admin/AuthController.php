<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to log in
        if (Auth::attempt($credentials)) {
            // Check if the authenticated user has the 'admin' role
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('home')
                            ->withSuccess('You have Successfully logged in');
            } else {
                Auth::logout();
                return redirect("login")->withErrors('You do not have admin access.');
            }
        }
  
        return redirect("login")->withErrors('Oops! You have entered invalid credentials');
    }
}

