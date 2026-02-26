<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // LIST
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    // CREATE FORM ✅ (THIS FIXES YOUR ERROR)
    public function create()
    {
        return view('admin.blogs.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'content' => $request->content,
            'status' => 1,
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog created successfully');
    }

    // EDIT FORM
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog updated successfully');
    }

    // DELETE
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();

        return back()->with('success', 'Blog deleted successfully');
    }

    // TOGGLE STATUS
    public function toggleStatus($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->status = !$blog->status;
        $blog->save();

        return back()->with('success', 'Blog status updated');
    }
}
