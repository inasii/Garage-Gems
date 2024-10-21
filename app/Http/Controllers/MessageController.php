<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function Message()
    {
        return view('MessagePage');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:messages',
            'message' => 'required|string',
        ]);

        Message::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->route('message')->with('success', 'Message sent successfully!');
    }
}
