@extends('admin.layouts.app')

@section('content')

<div class="page-wrapper">

    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:18px;">
        <h1 class="page-title">Careers</h1>
        <a href="{{ route('admin.careers.create') }}" class="btn-add">Add Career</a>
    </div>

    <div class="table-card">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>JOB TITLE</th>
                    <th>LOCATION</th>
                    <th>JOB TYPE</th>
                    <th>EXPERIENCE</th>
                    <th>QUALIFICATION</th>
                    <th>SKILLS</th>
                    <th>STATUS</th>
                    <th>CREATED</th>
                    <th>ACTION</th>
                </tr>
            </thead>

            <tbody>
            @forelse($careers as $career)
                <tr>
                    <td>{{ $career->id }}</td>
                    <td>{{ $career->title }}</td>
                    <td>{{ $career->location }}</td>
                    <td>{{ $career->job_type }}</td>
                    <td>{{ $career->experience }}</td>
                    <td>{{ Str::limit($career->qualification, 30) }}</td>
                    <td>{{ Str::limit($career->skills, 30) }}</td>

                    {{-- STATUS COLUMN --}}
                    <td>
                        @if($career->status == 1)
                            <span class="status active">Active</span>
                        @else
                            <span class="status inactive">Inactive</span>
                        @endif
                    </td>

                    <td>{{ $career->created_at->format('d M Y') }}</td>

                    {{-- ACTION COLUMN --}}
                    <td class="action-col">
                        <a href="{{ route('admin.careers.edit', $career->id) }}" class="btn-view">
                            Edit
                        </a>

                   

                        <form action="{{ route('admin.careers.destroy', $career->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn-delete" onclick="return confirm('Delete this career?')">
                                Delete
                            </button>
                        </form>


     {{-- Activate / Deactivate --}}
                        <form action="{{ route('admin.careers.toggleStatus', $career->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            @if($career->status == 1)
                                <button class="btn-status inactive">
                                    Deactivate
                                </button>
                            @else
                                <button class="btn-status active">
                                    Activate
                                </button>
                            @endif
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="empty-row">No careers found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

<style>
/* Header */
.page-title {
    font-size: 28px;
    font-weight: 700;
}

/* Add Button */
.btn-add {
    background:#8C79B9;
    color:#fff;
    padding:8px 18px;
    border-radius:10px;
    font-weight:600;
    text-decoration:none;
}
.btn-add:hover { background:#6d5aa5; }

/* Card */
.table-card {
    background:#fff;
    border-radius:22px;
    box-shadow:0 15px 40px rgba(0,0,0,0.12);
    overflow-x:auto;
}

/* Table */
.styled-table {
    width:100%;
    border-collapse:collapse;
    border:1px solid #4A3F6B;
}
.styled-table thead {
    background:#3F355D;
}
.styled-table thead th {
    color:#fff;
    padding:12px;
    font-size:13px;
    border-right:1px solid #4A3F6B;
}
.styled-table tbody {
    background:#E6DFF5;
}
.styled-table tbody td {
    padding:12px;
    border-bottom:1px solid #4A3F6B;
    border-right:1px solid #4A3F6B;
}
.styled-table tbody td:last-child,
.styled-table thead th:last-child {
    border-right:none;
}

/* Action column */
.action-col {
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}
.action-col form { margin:0; }

/* Buttons */
.btn-view {
    background:#4A3F6B;
    color:#fff;
    padding:8px 18px;
    border-radius:10px;
    font-weight:600;
    text-decoration:none;
}
.btn-view:hover { background:#372f52; }

.btn-delete {
    background:#8C79B9;
    color:#fff;
    padding:8px 18px;
    border-radius:10px;
    border:none;
    font-weight:600;
    cursor:pointer;
}
.btn-delete:hover { background:#6d5aa5; }

/* Status label */
.status {
    padding:6px 14px;
    border-radius:20px;
    font-size:13px;
    font-weight:600;
}
.status.active {
    background:#d1fae5;
    color:#065f46;
}
.status.inactive {
    background:#fee2e2;
    color:#991b1b;
}

/* Toggle buttons */
.btn-status {
    padding:8px 18px;
    border-radius:10px;
    border:none;
    font-weight:600;
    color:#fff;
    cursor:pointer;
}
.btn-status.active {
    background:#3F355D;
}
.btn-status.active:hover {
    background:#3F355D;
}
.btn-status.inactive {
    background:#8C79B9;
}
.btn-status.inactive:hover {
    background:#8C79B9;
}

/* Empty */
.empty-row {
    text-align:center;
    padding:40px;
    font-size:18px;
    color:#777;
}

/* Mobile */
@media (max-width:768px) {
    .styled-table thead { display:none; }
    .styled-table tbody tr {
        display:block;
        border:1px solid #4A3F6B;
        margin-bottom:15px;
        border-radius:12px;
        padding:15px;
    }
    .styled-table tbody td {
        display:block;
        border:none;
        padding:6px 0;
    }
    .action-col {
        flex-direction:column;
    }
}
</style>

@endsection
