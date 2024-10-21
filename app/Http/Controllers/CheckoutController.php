<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display the checkout form.
     */
    public function index()
    {
        $user = Auth::user();
        return view('Checkout', compact('user'));
    }

    /**
     * Store the payment details.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_on_card' => 'required|string|max:255',
            'credit_card_number' => 'required|string|max:19',
            'exp_month' => 'required|string|max:20',
            'exp_year' => 'required|string|max:4',
            'cvv' => 'required|string|max:4',
        ]);

        Checkout::create([
            'user_id' => Auth::id(),
            'name_on_card' => $request->name_on_card,
            'credit_card_number' => $request->credit_card_number,
            'exp_month' => $request->exp_month,
            'exp_year' => $request->exp_year,
            'cvv' => $request->cvv,
        ]);

        return redirect()->route('checkout.success')->with('success', 'Payment details saved successfully!');
    }

    public function success()
    {
        return view('Success');
    }
}

