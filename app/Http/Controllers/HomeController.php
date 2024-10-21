<?php

namespace App\Http\Controllers;
use App\Models\Product; 
use App\Models\Category; 

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function Home()
    {
        // $products = Product::all();
        $categories = Category::all();
        $products = Product::limit(6)->get();
        return view('HomePage', compact('categories', 'products'));
    }

    public function searchResults(Request $request)
    {
        $query = $request->input('query');

        // Perform search in products where the name contains the query string
        $products = Product::where('product', 'like', '%' . $query . '%')->get();

        return view('SearchResult', compact('products', 'query'));
    }
}
