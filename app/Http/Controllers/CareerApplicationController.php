<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerApplication;

class CareerApplicationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name'        => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'phone'            => 'required|string|max:20',
            'position'         => 'required|string',
            'other_position'   => 'nullable|string|max:255',
            'qualification'    => 'required|string|max:255',
            'experience'       => 'required|string|max:50',
            'resume'           => 'required|mimes:pdf|max:2048',
            'cover_letter'     => 'nullable|string',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        CareerApplication::create([
            'full_name'       => $request->full_name,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'position'        => $request->position,
            'other_position'  => $request->other_position,
            'qualification'   => $request->qualification,
            'experience'      => $request->experience,
            'resume'          => $resumePath,
            'cover_letter'    => $request->cover_letter,
        ]);

        return back()->with('success', 'Application submitted successfully!');
    }
}
