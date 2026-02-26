@extends('admin.layouts.app')

@section('content')

<style>
/* PAGE CONTAINER */
.appointments-container {
    background: #f9f9f9;
    min-height: 100vh;
   
    font-family: 'Segoe UI', sans-serif;
}

/* CARD */
.appointments-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}

/* HEADER */
.appointments-header {
    margin-bottom: 25px;
}

.appointments-title {
    font-size: 26px;
    font-weight: 700;
    color: #222;
}

/* TABLE */
.custom-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    border-radius: 8px;
    overflow: hidden;
    background: #E6DFF5; /* table background */
}

.custom-table thead {
    background-color: #4A3F6B; /* Header purple */
    color: #fff;
}

.custom-table th, .custom-table td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #4A3F6B;
}

.custom-table th {
    font-weight: 600;
}

.custom-table tbody tr:hover {
    background-color: #f1f1f1;
}

/* BUTTONS */
.btn-view {
    background-color: #4A3F6B;
    color: #fff;
    padding: 6px 14px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: 500;
    transition: background 0.3s;
}

.btn-view:hover {
    background-color: #4A3F6B;
}

/* EMPTY ROW */
.no-data {
    text-align: center;
    padding: 15px;
    color: #999;
    font-size: 14px;
}
</style>

<div class="appointments-container">
    <div class="appointments-card">

        <div class="appointments-header">
            <h1 class="appointments-title">Appointments</h1>
        </div>

        <table class="custom-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Service</th>
                    <!-- <th>Doctor</th> -->
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Applied</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @forelse($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->full_name }}</td>
                    <td>{{ $appointment->service_name }}</td>
                    <!-- <td>{{ $appointment->doctor_name }}</td> -->
                    <td>{{ $appointment->phone }}</td>
                    <td>{{ $appointment->email }}</td>
                    <td>{{ $appointment->created_at->format('d M Y') }}</td>
                    <td class="text-center">
                       <a href="{{ route('admin.appointments.show', $appointment->id) }}" class="btn-view">
    View
</a>

                    </td>
                </tr>
              @empty
                <tr>
                    <td colspan="7" class="no-data">No appointments found</td>
                </tr>
              @endforelse
            </tbody>
        </table>

    </div>
</div>

@endsection
