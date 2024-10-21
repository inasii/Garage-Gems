<?php

namespace App\Http\Controllers;
use App\Models\Category; 
use App\Models\Product; 

use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    //
    public function show($slug)
    {
        // Find the category by its slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Get products associated with the category
        $products = Product::where('category_id', $category->id)->get();

        // Return the view with the products
        return view('Category', compact('products', 'category'));
    }

    public function showFashion()
    {
        $fashionCategory = Category::where('category', 'fashion')->first();
        
        if (!$fashionCategory) {
            abort(404, 'Fashion category not found');
        }
        
        $products = Product::where('category_id', $fashionCategory->id)->get();

        return view('Category.FashionCategory', compact('products'));
    }

    public function showFurniture()
    {
        $furnitureCategory = Category::where('category', 'furniture')->first();
        
        if (!$furnitureCategory) {
            abort(404, 'Furniture category not found');
        }
        
        $products = Product::where('category_id', $furnitureCategory->id)->get();

        return view('Category.FurnitureCategory', compact('products'));
    }

    public function showPlant()
    {
        $plantCategory = Category::where('category', 'plant')->first();
        
        if (!$plantCategory) {
            abort(404, 'Plant category not found');
        }
        
        $products = Product::where('category_id', $plantCategory->id)->get();

        return view('Category.PlantCategory', compact('products'));
    }

    public function showRecycle()
    {
        $recycleCategory = Category::where('category', 'recycled items')->first();
        
        if (!$recycleCategory) {
            abort(404, 'Recycle category not found');
        }
        
        $products = Product::where('category_id', $recycleCategory->id)->get();

        return view('Category.RecycleCategory', compact('products'));
    }

    public function showFree()
    {
        $freeCategory = Category::where('category', 'free')->first();
        
        if (!$freeCategory) {
            abort(404, 'Free category not found');
        }
        
        $products = Product::where('category_id', $freeCategory->id)->get();

        return view('Category.FreeCategory', compact('products'));
    }
}
