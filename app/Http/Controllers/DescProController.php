<?php

namespace App\Http\Controllers;
use App\Models\Product; 

use Illuminate\Http\Request;

class DescProController extends Controller
{
    //

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('DescPro', compact('product'));
    }
}
