<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProductController extends Controller
{
    //
    public function index()
    {
        $products = UserProduct::all();
        return view('HomePage', compact('products'));
    }

    public function show($id)
    {
        $product = UserProduct::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
