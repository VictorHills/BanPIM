<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $media = Media::where('created_by', $user_id)->get();
        return view('media.index', compact('media'));
    }

    public function create()
    {
        $user_id = auth()->user()->id;
        $categories = Category::where('created_by', $user_id)->get();
        return view('media.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'file' => 'required|file',
        ]);

        $path = $request->file('file')->store('media');

        Media::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'file_path' => $path,
            'created_by' => auth()->user()->id
        ]);

        return redirect()->route('media.index');
    }

    public function show(Media $media)
    {
        return view('media.show', compact('media'));
    }

    public function edit(Media $media)
    {
        $user_id = auth()->user()->id;
        $categories = Category::where('created_by', $user_id)->get();
        return view('media.edit', compact('media', 'categories'));
    }

    public function update(Request $request, Media $media)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'file' => 'nullable|file',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('media');
            $media->update(['file_path' => $path]);
        }

        $media->update($request->only('name', 'description', 'category_id'));

        return redirect()->route('media.index');
    }

    public function destroy(Media $media)
    {
        $media->delete();
        return redirect()->route('media.index');
    }
}

