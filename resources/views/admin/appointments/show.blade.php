@extends('admin.layouts.app')

@section('content')

<style>
    body {
        background: #f4f2f8;
    }

    .page-wrap {
        max-width: 900px;
        margin: 40px auto;
    }

    .details-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 30px 34px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
    }

    .page-header {
        margin-bottom: 26px;
        padding-bottom: 14px;
        border-bottom: 1px solid #ece9f4;
    }

    .page-header h2 {
        font-size: 28px;
        font-weight: 700;
        color: #4A3F6B;
        margin: 0;
    }

    .details-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 18px;
        border: 1px solid #4A3F6B;
    }

    .details-table tr:hover {
        background: #f7f5fc;
    }

    .details-table th,
    .details-table td {
        padding: 14px 16px;
        border: 1px solid #4A3F6B;
    }

    .details-table th {
        width: 240px;
        font-size: 13px;
        text-transform: uppercase;
        background: #E6DFF5;
        font-weight: 600;
    }

    .details-table td {
        font-size: 15px;
        font-weight: 500;
    }

    .status-badge {
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
        text-transform: capitalize;
    }

    .status-pending {
        background: #ede9f6;
        color: #4A3F6B;
    }

    .status-approved {
        background: #e6f4ea;
        color: #1e7e34;
    }

    .status-rejected {
        background: #fdecea;
        color: #b02a37;
    }

    .note {
        margin-top: 26px;
        padding: 16px 18px;
        background: #f7f5fc;
        border-left: 4px solid #4A3F6B;
        border-radius: 8px;
    }

    .back-btn-wrap {
        margin-top: 32px;
        text-align: right;
    }

    .btn-back-box {
        padding: 10px 20px;
        background: linear-gradient(135deg, #4A3F6B, #6D5AA5);
        color: #fff;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
    }
</style>

<div class="page-wrap">
    <div class="details-card">

        <div class="page-header">
            <h2>Appointment Details</h2>
        </div>

        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $appointment->full_name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $appointment->email }}</td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>{{ $appointment->phone }}</td>
            </tr>

            <tr>
                <th>Age Group</th>
                <td>{{ ucfirst($appointment->age_group) }}</td>
            </tr>

            <tr>
                <th>Service</th>
                <td>{{ $appointment->service_name ?? '-' }}</td>
            </tr>

            <!-- <tr>
                <th>Doctor</th>
                <td>{{ $appointment->doctor_name ?? '-' }}</td>
            </tr> -->

            <!-- <tr>
                <th>Preferred Date</th>
                <td>{{ $appointment->preferred_date ?? '-' }}</td>
            </tr> -->

            <!-- <tr>
                <th>Preferred Time</th>
                <td>{{ $appointment->preferred_time ?? '-' }}</td>
            </tr> -->

            <!-- <tr>
                <th>Status</th>
                <td>
                    <span class="status-badge status-{{ $appointment->status }}">
                        {{ ucfirst($appointment->status) }}
                    </span>
                </td>
            </tr> -->

            <tr>
                <th>Created At</th>
                <td>{{ $appointment->created_at?->format('d M Y, h:i A') }}</td>
            </tr>
        </table>

        <!-- @if($appointment->additional_info)
            <div class="note">
                <strong>Additional Info:</strong><br>
                {{ $appointment->additional_info }}
            </div> -->
        <!-- @endif -->

        <div class="back-btn-wrap">
            <a href="{{ route('admin.appointments.index') }}" class="btn-back-box">
                ← Back to Appointments
            </a>
        </div>

    </div>
</div>

@endsection
