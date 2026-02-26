@extends('admin.layouts.app')

@section('content')

<style>
/* PAGE BACKGROUND */
.consultation-page {
    background: #f5f3ff;
    min-height: 100vh;
    padding: 30px;
    font-family: 'Segoe UI', sans-serif;
}

/* TITLE */
.consultation-header h3 {
    font-weight: 700;
    color: #2d2a3a;
}

.consultation-header p {
    color: #6c6c80;
    margin-bottom: 20px;
}

/* CARD */
.custom-table-card {
    background: #ffffff;
    border-radius: 18px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    overflow: hidden;
}

/* TABLE */
.custom-table {
    width: 100%;
    border-collapse: collapse;
}

/* TABLE HEADER */
.custom-table thead th {
    background: linear-gradient(135deg, #6b5b95, #8b7bbf);
    color: #ffffff;
    font-size: 13px;
    text-transform: uppercase;
    letter-spacing: 0.6px;
    padding: 15px;
    border-right: 1px solid rgba(255,255,255,0.25);
}

.custom-table thead th:last-child {
    border-right: none;
}

/* TABLE BODY */
.custom-table tbody td {
    padding: 14px 15px;
    font-size: 14px;
    color: #333;
    border-top: 1px solid #e6e6e6;
    border-right: 1px solid #e6e6e6;
    background: #fff;
}

.custom-table tbody td:last-child {
    border-right: none;
}

/* ROW HOVER */
.custom-table tbody tr:hover {
    background: #f6f4fb;
}

/* EMPTY ROW */
.custom-table tbody td.text-center {
    padding: 35px;
    font-size: 15px;
    color: #777;
}

/* PAGINATION SPACING */
.pagination {
    margin-top: 25px;
}
</style>

<div class="consultation-page">

    <div class="consultation-header">
        <h3>Consultation Requests</h3>
        <p>Total Requests: <strong>{{ $consultations->total() }}</strong></p>
    </div>

    <div class="custom-table-card">
        <table class="custom-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Created Date</th>
                </tr>
            </thead>

            <tbody>
                @forelse($consultations as $consultation)
                    <tr>
                        <td>{{ $consultation->id }}</td>
                        <td>{{ $consultation->name }}</td>
                        <td>{{ $consultation->phone }}</td>
                        <td>{{ $consultation->email }}</td>
                        <td>{{ $consultation->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            No consultation requests found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div>
        {{ $consultations->links() }}
    </div>

</div>

@endsection
