<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::latest()->get();
        return view('admin.gallery.index', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|max:5120', // 5MB per image
            'title.*'  => 'nullable|string|max:255'
        ]);

        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $key => $image) {

                $path = $image->store('gallery', 'public');

                Gallery::create([
                    'image' => $path,
                    'title' => $request->title[$key] ?? null
                ]);
            }
        }

        return back()->with('success', 'Images uploaded successfully');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return back()->with('success', 'Image deleted');
    }
}
