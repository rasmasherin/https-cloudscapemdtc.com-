<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    // Blog listing page
    public function index()
    {
        $blogs = Blog::where('status', 1)->latest()->get();

        return view('blogs.index', compact('blogs'));
    }

    // Blog detail page
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
                    ->where('status', 1)
                    ->firstOrFail();

        return view('blogs.show', compact('blog'));
    }
}
