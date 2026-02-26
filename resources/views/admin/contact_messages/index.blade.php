@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold mb-0">Contact Messages</h2>
        <span class="text-muted fw-semibold">
            Total: {{ $messages->total() }}
        </span>
    </div>

    <!-- Table Card -->
    <div class="card table-card">
        <div class="table-responsive">
            <table class="table align-middle mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Created</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($messages as $msg)
                    <tr>
                        <td>{{ $msg->id }}</td>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->email }}</td>
                        <td class="text-muted">
                            {{ Str::limit($msg->subject, 45) }}
                        </td>
                        <td class="text-muted">
                            {{ $msg->created_at->format('d M Y') }}
                        </td>
                        <td class="text-end">
                            <div class="action-buttons">
                                <a href="{{ route('admin.contact_messages.show', $msg->id) }}"
                                   class="btn btn-view">
                                    View
                                </a>

                                <form action="{{ route('admin.contact_messages.destroy', $msg->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-delete"
                                            onclick="return confirm('Delete this message?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            No messages found
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    @if($messages->hasPages())
    <div class="d-flex justify-content-between align-items-center mt-4">
        <small class="text-muted">
            Showing {{ $messages->firstItem() }} – {{ $messages->lastItem() }}
            of {{ $messages->total() }}
        </small>
        {{ $messages->links() }}
    </div>
    @endif

</div>

<style>
/* ===============================
   TABLE LAYOUT (CRITICAL FIX)
================================ */
.table {
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
}

/* Column widths */
.table th:nth-child(1) { width: 6%; }   /* ID */
.table th:nth-child(2) { width: 12%; }  /* Name */
.table th:nth-child(3) { width: 26%; }  /* Email */
.table th:nth-child(4) { width: 20%; }  /* Subject */
.table th:nth-child(5) { width: 14%; }  /* Created */
.table th:nth-child(6) { width: 22%; }  /* Action */

/* ===============================
   CARD STYLE
================================ */
.table-card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
}

/* ===============================
   TABLE HEADER
================================ */
.table thead {
    background: linear-gradient(135deg, #4A3F6B 0%, #8C79B9 100%);
}

.table thead th {
    color: #fff;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .5px;
    padding: 16px 18px;
    text-transform: uppercase;
    border: 1px solid #4A3F6B;
}

/* ===============================
   TABLE BODY
================================ */
.table tbody td {
    padding: 14px 18px;
    border: 1px solid #4A3F6B;
    font-size: 16px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.table tbody tr:hover {
    background: #fafafa;
}

.table tbody tr:last-child td {
    border-bottom: 1px solid #4A3F6B;
}

/* ===============================
   ACTION BUTTONS (FIXED)
================================ */
.action-buttons {
    display: flex;
    justify-content: flex-end;
    gap: 8px;
}

.action-buttons form {
    margin: 0;
}

/* ===============================
   BUTTONS
================================ */
.btn-view {
    background: #4A3F6B;
    color: #fff;
    padding: 7px 16px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
    border: none;
}

.btn-view:hover {
    background: #372f52;
    color: #fff;
}

.btn-delete {
    background: #8C79B9;
    color: #fff;
    padding: 7px 16px;
    border-radius: 6px;
    font-size: 13px;
    font-weight: 600;
    border: none;
}

.btn-delete:hover {
    background: #7563a8;
}

/* ===============================
   MOBILE
================================ */
@media (max-width: 768px) {
    .table thead {
        display: none;
    }

    .table tbody tr {
        display: block;
        margin-bottom: 12px;
        border: 1px solid #4A3F6B;
        border-radius: 12px;
    }

    .table tbody td {
        display: flex;
        justify-content: space-between;
        white-space: normal;
        border: none;
        border-bottom: 1px solid #4A3F6B;
    }

    .table tbody td:last-child {
        border-bottom: none;
    }
}
</style>
@endsection
