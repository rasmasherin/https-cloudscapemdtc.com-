<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Support\Facades\Storage;

class CareerApplicationController extends Controller
{
    public function index()
    {
        $applications = CareerApplication::latest()->paginate(10);
        return view('admin.career_applications.index', compact('applications'));
    }

    public function downloadResume($id)
    {
        $application = CareerApplication::findOrFail($id);

        return Storage::disk('public')->download($application->resume);
    }

    public function destroy($id)
    {
        $application = CareerApplication::findOrFail($id);

        if ($application->resume && Storage::disk('public')->exists($application->resume)) {
            Storage::disk('public')->delete($application->resume);
        }

        $application->delete();

        return redirect()->back()->with('success', 'Application deleted successfully!');
    }

    public function show($id)
   {
    $application = CareerApplication::findOrFail($id);
    return view('admin.career_applications.show', compact('application'));
   }

}
