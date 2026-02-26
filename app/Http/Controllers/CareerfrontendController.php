<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerfrontendController extends Controller
{
    public function index()
    {
        $careers = Career::where('status', 1)->latest()->get();
        return view('careers', compact('careers'));
    }
}
