<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    // List all careers
    public function index()
    {
        $careers = Career::latest()->get();
        return view('admin.careers.index', compact('careers'));
    }

    // Show create form
    public function create()
    {
        return view('admin.careers.create');
    }

    // Store career
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|string|max:255',
            'location'      => 'required|string|max:255',
            'job_type'      => 'required',
            'description'   => 'required',
        ]);

        Career::create($request->all());

        return redirect()->route('admin.careers.index')
            ->with('success', 'Career added successfully');
    }

    // Edit career
    public function edit(Career $career)
    {
        return view('admin.careers.edit', compact('career'));
    }

    // Update career
    public function update(Request $request, Career $career)
    {
        $career->update($request->all());

        return redirect()->route('admin.careers.index')
            ->with('success', 'Career updated successfully');
    }

    // Delete career
    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('admin.careers.index')
            ->with('success', 'Career deleted successfully');
    }

    // Toggle status
    public function toggleStatus(Career $career)
    {
        $career->status = !$career->status;
        $career->save();

        return back();
    }
}
