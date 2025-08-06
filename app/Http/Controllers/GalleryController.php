<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $path = $request->file('image')->store('gallery', 'public');

    Gallery::create([
        'name' => $request->name,
        'description' => $request->description,
        'image_path' => $path,
    ]);

    return redirect()->route('gallery.index')->with('success', 'Image added successfully.');
}

    public function destroy(Gallery $gallery)
    {
        unlink(storage_path('app/public/' . $gallery->image_path));
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully.');
    }
    public function edit(Gallery $gallery)
{
    return view('gallery.edit', compact('gallery'));
}

public function update(Request $request, Gallery $gallery)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = [
        'name' => $request->name,
        'description' => $request->description,
    ];

    if ($request->hasFile('image')) {
        // Delete old image
        if ($gallery->image_path && file_exists(storage_path('app/public/' . $gallery->image_path))) {
            unlink(storage_path('app/public/' . $gallery->image_path));
        }

        // Store new image
        $data['image_path'] = $request->file('image')->store('gallery', 'public');
    }

    $gallery->update($data);

    return redirect()->route('gallery.index')->with('success', 'Image updated successfully.');
}
public function show(Gallery $gallery)
{
    return view('gallery.show', compact('gallery'));
}
}
