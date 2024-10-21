<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function Register(){
        return view('RegisterPage');
    }

    public function MakeAccount(Request $request){
        Register::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_num' => $request->phone_num,
            'password' => bcrypt($request->password),
            'password_confirmation' => $request->password_confirmation,
        ]);
        return redirect('/login/page');
    }

    // public function MakeAccount(Request $request)
    // {
    //     $validated = $request->validate([
    //         'first_name' => 'required|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users_data',
    //         'phone_num' => 'required|numeric',
    //         'password' => 'required|string|min:8|confirmed',
    //         'password_confirmation' => 'required|string|min:8|confirmed',
    //     ]);

    //     UserData::create([
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'email' => $request->email,
    //         'phone_num' => $request->phone_num,
    //         'password' => bcrypt($request->password),
    //         'password_confirmation' => bcrypt($request->password_confirmation),
    //     ]);

    //     return redirect('/login/page');
    // }
}
