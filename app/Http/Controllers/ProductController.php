<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $products = Product::where('created_by', $user_id)->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $user_id = auth()->user()->id;
        $categories = Category::where('created_by', $user_id)->get();
        $tags = Tag::where('created_by', $user_id)->get();
        return view('products.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',
            'size' => 'required',
            'weight' => 'required',
            'sku_id' => 'required|unique:products',
            'color' => 'required',
        ]);

        $validatedData['created_by'] = auth()->user()->id;

        Product::create($validatedData);

        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $user_id = auth()->user()->id;
        $categories = Category::where('created_by', $user_id)->get();
        $tags = Tag::where('created_by', $user_id)->get();
        return view('products.edit', compact('product', 'categories', 'tags'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'nullable',
            'title' => 'nullable',
            'description' => 'nullable',
            'category_id' => 'nullable',
            'tag_id' => 'nullable',
            'size' => 'nullable',
            'weight' => 'nullable',
            'sku_id' => 'nullable|unique:products,sku_id,' . $product->id,
            'color' => 'nullable',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

