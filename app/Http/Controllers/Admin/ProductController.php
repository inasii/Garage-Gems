<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()) {
            $query = Product::with('category');
            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a href="'. route('product.edit', $item->id) .'" class="btn btn-sm btn-primary">Edit</a>
                        <form action="'. route('product.destroy', $item->id) .'" method="POST" style="display: inline-block;">
                            '. method_field('DELETE') . csrf_field() .'
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    ';
                })
                ->editColumn('photo', function($item){
                    return $item->photo ? '<img src="'. Storage::url($item->photo) .'" style="max-height: 40px"/>' : '';
                })
                ->rawColumns(['photo', 'action'])
                ->make(true);
        }

        return view('Admin.Product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('Admin.Product.create', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        $path = $request->file('photo')->store('photos', 'public');

        Product::create([
            'product' => $validated['product'],
            'category_id' => $validated['category_id'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'photo' => $path,
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Product::findOrFail($id);
        $category = Category::all();

        return view('Admin.Product.edit', [
            'item' => $item,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasFile('photo')) {
            
            if ($product->photo) {
                Storage::disk('public')->delete($product->photo);
            }

            $path = $request->file('photo')->store('photos', 'public');
        } else {
            
            $path = $product->photo;
        }

        $product->update([
            'product' => $validated['product'],
            'category_id' => $validated['category_id'],
            'price' => $validated['price'],
            'description' => $validated['description'],
            'photo' => $path,
            'slug' => Str::slug($request->product) 
        ]);

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        if ($product->photo) {
            Storage::disk('public')->delete($product->photo);
        }

        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
