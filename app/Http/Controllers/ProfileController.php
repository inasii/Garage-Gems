<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\UserData;
use App\Models\Userprofile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        $userData = Register::where('email', $user->email)->first();
        $Userprofile = Userprofile::with('userData')->first();
        return view('Profile.profile', compact('userData','Userprofile'));
    }

    public function editProfile()
    {
        $user = Auth::user();
        $userData = Register::where('email', $user->email)->first();
        $Userprofile = Userprofile::with('userdata')->first();
        return view('profile.ProfileEdit', compact('userData','Userprofile'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $userData = Register::where('email', $user->email)->first();
        $Userprofile = Userprofile::with('userdata')->first();

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users_data,email,' . $userData->id,
            'phone_num' => 'required|numeric',
            'role' => 'required|in:buyer,seller',
            'address_one' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'provinces' => 'nullable|string',
            'regencies' => 'nullable|string',
            'Zip_code' => 'nullable|numeric',
            'country' => 'nullable|string|max:255',
        ]);


        $userData->update($request->only(['first_name', 'last_name', 'email', 'phone_num', 'role']));
        $Userprofile->update($request->only(['address_one', 'gender', 'provinces', 'city', 'zip_code', 'country']));

        return redirect()->with('success', 'Profile updated successfully.');
    }


        
    public function Profile(){
        return view('ProfilePage');
    }
}
