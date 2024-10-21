<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\CategoryRequest;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax()){
            $query = Category::query();
    
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
                ->rawColumns(['action', 'photo'])
                ->make();
        }

        return view('Admin.Category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // $data = $request->all();

        // $data['slug'] = Str::slug($request->category);
        // $data['photo'] = $request->file['photo']->store('assets/image','public');

        // Category::create($data);

        // return redirect()->route('category.index');

        $validated = $request->validated();

        $path = $request->file('photo')->store('photos', 'public');
    
        Category::create([
            'category' => $validated['category'],
            'photo' => $path,
            'slug' => Str::slug($validated['category']) 
        ]);
    
        return redirect()->route('category.index')->with('success', 'Category created successfully.');
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
        $item = Category::findOrFail($id);

        return view('Admin.Category.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasFile('photo')) {
            
            if ($category->photo) {
                Storage::disk('public')->delete($category->photo);
            }

            $path = $request->file('photo')->store('photos', 'public');
        } else {
            
            $path = $category->photo;
        }

        
        $category->update([
            'category' => $validated['category'],
            'photo' => $path,
            'slug' => Str::slug($validated['category']) 
        ]);

        
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if ($category->photo) {
            Storage::disk('public')->delete($category->photo);
        }

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
