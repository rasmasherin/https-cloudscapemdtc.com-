<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name'     => 'required|string|max:255',
            'email'         => 'required|email',
            'phone'         => 'required|string|max:20',
            'age_group'     => 'required|in:child,teen,adult',
            // 'doctor_name'   => 'required|string|max:255',
            'service_name'  => 'required|string|max:255',
            // 'preferred_date'=> 'nullable|date',
            // 'preferred_time'=> 'nullable',
        ]);

        Appointment::create([
            'full_name'       => $request->full_name,
            'email'           => $request->email,
            'phone'           => $request->phone,
            'age_group'       => $request->age_group,
            // 'doctor_name'     => $request->doctor_name,
            'service_name'    => $request->service_name,
            // 'preferred_date'  => $request->preferred_date,
            // 'preferred_time'  => $request->preferred_time,
            // 'additional_info' => $request->additional_info,
        ]);

        return redirect()->back()->with('success', 'Appointment request submitted successfully');
    }
}
