<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServController extends Controller
{
    // Show all services
    public function index()
    {
        $services = Service::orderBy('display_order')->get();
        return view('services', compact('services'));
    }

    // Show a single service (Read More)
    public function show($id)
    {
        $service = Service::findOrFail($id); // Get the service or fail
        return view('services', compact('service')); // <-- Make this view
    }
}
