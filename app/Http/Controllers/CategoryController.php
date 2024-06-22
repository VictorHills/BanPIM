<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $categories = Category::where('created_by', $user_id)->latest()->get();;
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories',
        ]);

        $validatedData['created_by'] = auth()->user()->id;

        Category::create($validatedData);

        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
