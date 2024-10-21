<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function Login(){
        return view('LoginPage');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home/page');
        }

        return back()->with('loginError', 'Login failed!');
    }
}
