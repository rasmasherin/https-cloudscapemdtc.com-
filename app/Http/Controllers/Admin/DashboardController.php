<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\ContactMessage;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Total services count
        $totalServices = Service::count();

        // Today's appointments (using preferred_date)
        $appointmentsToday = Appointment::whereDate(
            'preferred_date',
            Carbon::today()
        )->count();

        // Today's messages count from contact_messages table
        $messagesToday = ContactMessage::whereDate(
            'created_at',
            Carbon::today()
        )->count();

        // Appointment status counts for pie chart (only Pending and Cancelled)
        $pendingCount = Appointment::where('status', 'pending')->count();
        $cancelledCount = Appointment::where('status', 'cancelled')->count();

        // Total appointments
        $totalAppointments = Appointment::count();

        // Calculate percentages for pie chart
        $pendingPercentage = $totalAppointments > 0 ? round(($pendingCount / $totalAppointments) * 100, 1) : 0;
        $cancelledPercentage = $totalAppointments > 0 ? round(($cancelledCount / $totalAppointments) * 100, 1) : 0;
        $todayPercentage = $totalAppointments > 0 ? round(($appointmentsToday / $totalAppointments) * 100, 1) : 0;

        // This week's appointments
        $appointmentsThisWeek = Appointment::whereBetween(
            'preferred_date',
            [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
        )->count();

        // This month's appointments
        $appointmentsThisMonth = Appointment::whereMonth(
            'preferred_date',
            Carbon::now()->month
        )->whereYear(
            'preferred_date',
            Carbon::now()->year
        )->count();

        return view('admin.dashboard', compact(
            'totalServices',
            'appointmentsToday',
            'messagesToday',
            'pendingCount',
            'cancelledCount',
            'totalAppointments',
            'pendingPercentage',
            'cancelledPercentage',
            'todayPercentage',
            'appointmentsThisWeek',
            'appointmentsThisMonth'
        ));
    }
}