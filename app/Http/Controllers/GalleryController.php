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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('image')->store('gallery', 'public');
        Gallery::create(['image_path' => $path]);

        return redirect()->route('gallery.index')->with('success', 'Image added successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        unlink(storage_path('app/public/' . $gallery->image_path));
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Image deleted successfully.');
    }
}
