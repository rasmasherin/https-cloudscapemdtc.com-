@extends('admin.layouts.app')

@section('content')
<div class="container">

    <h2 class="page-title">Application Details</h2>

    <div class="details-card">
        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $application->full_name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $application->email }}</td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>{{ $application->phone }}</td>
            </tr>

            <tr>
                <th>Position</th>
                <td>
                    {{ $application->position }}
                    @if($application->other_position)
                        ({{ $application->other_position }})
                    @endif
                </td>
            </tr>

            <tr>
                <th>Qualification</th>
                <td>{{ $application->qualification }}</td>
            </tr>

            <tr>
                <th>Experience</th>
                <td>{{ $application->experience }}</td>
            </tr>

            <tr>
                <th>Cover Letter</th>
                <td>
                    {{ $application->cover_letter ?? 'N/A' }}
                </td>
            </tr>

            <tr>
                <th>Resume</th>
                <td>
                    <a href="{{ route('admin.career_applications.download', $application->id) }}"
                       class="btn-resume">
                        Download Resume
                    </a>
                </td>
            </tr>

            <tr>
                <th>Applied On</th>
                <td>
                    {{ $application->created_at->format('d M Y h:i A') }}
                </td>
            </tr>
        </table>
    </div>

    <div class="action-footer">
        <a href="{{ route('admin.career_applications.index') }}"
           class="btn-back">
            Back
        </a>
    </div>

</div>

<style>
/* PAGE TITLE */
.page-title {
    margin-bottom: 20px;
    font-size: 26px;
    font-weight: 700;
}

/* CARD */
.details-card {
    background: #ffffff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

/* TABLE */
.details-table {
    width: 100%;
    border-collapse: collapse;
}

.details-table th {
    width: 220px;
    text-align: left;
    padding: 12px;
    font-weight: 600;
    background: #f5f3fb;
    border-bottom: 1px solid #e0e0e0;
}

.details-table td {
    padding: 12px;
    border-bottom: 1px solid #e0e0e0;
}

/* DOWNLOAD RESUME BUTTON */
.btn-resume {
    display: inline-block;
    padding: 8px 18px;
    background: #6b5b95;
    color: #ffffff;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
}

.btn-resume:hover {
    background: #5a4a85;
}

/* FOOTER ACTION */
.action-footer {
    margin-top: 25px;
}

/* BACK BUTTON */
.btn-back {
    display: inline-block;
    padding: 10px 22px;
    background: #8C79B9;
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
}

.btn-back:hover {
    background: #8C79B9;
}
</style>
@endsection
