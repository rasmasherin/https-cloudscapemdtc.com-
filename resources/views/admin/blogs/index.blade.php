@extends('admin.layouts.app')

@section('content')
<style>
    body {
        background: #f4f2f8;
    }

    .admin-page {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 16px;
    }

    /* HEADER */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 24px;
    }

    .page-header h2 {
        font-size: 26px;
        font-weight: 700;
        color: #4A3F6B;
    }

    .btn-add {
        background: linear-gradient(135deg, #4A3F6B, #6D5AA5);
        color: #fff;
        padding: 10px 18px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.25s ease;
    }

    .btn-add:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(74,63,107,0.25);
    }

    /* CARD */
    .card {
        background: #fff;
        border-radius: 14px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        overflow: hidden;
    }

    /* TABLE */
    table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #4A3F6B;
    }

    thead {
        background: #E6DFF5;
    }

    tbody {
        background: #E6DFF5; /* ✅ TABLE BODY BACKGROUND */
    }

    th, td {
        padding: 14px 16px;
        border: 1px solid #4A3F6B;
        font-size: 14px;
    }

    th {
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
    }

    tbody tr:hover {
        background: #E6DFF5;
    }

    /* STATUS BADGE */
    .status {
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 700;
    }

    .status.active {
        background: #e6f4ea;
        color: #1e7e34;
    }

    .status.inactive {
        background: #fdecea;
        color: #b02a37;
    }

    /* ACTION BUTTONS */
    .actions {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .btn-action {
        padding: 6px 14px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        text-decoration: none;
        transition: all .2s ease;
    }

    .btn-edit {
        background: #af9bdd;
        color: #4A3F6B;
    }

    .btn-edit:hover {
        background: #4A3F6B;
        color: #fff;
    }

    .btn-delete {
        background: #7466a1;
        color: #ffffff;
    }

    .btn-delete:hover {
        background: #4A3F6B;
        color: #fff;
    }

    .btn-active {
        background: #4A3F6B;
        color: #ffffff;
    }

    .btn-active:hover {
        background: #655c7e;
        color: #fff;
    }

    .btn-inactive {
        background: #726b87;
        color: #ffffff;
    }

    .btn-inactive:hover {
        background: #4A3F6B;
        color: #fff;
    }

    .empty {
        padding: 40px;
        text-align: center;
        color: #6b7280;
    }
</style>

<div class="admin-page">

    <div class="page-header">
        <h2>Blogs</h2>
        <a href="{{ route('admin.blogs.create') }}" class="btn-add">+ Add Blog</a>
    </div>

    <div class="card">
        @if($blogs->count())
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th width="260">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $index => $blog)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->category }}</td>
                            <td>
                                <span class="status {{ $blog->status ? 'active' : 'inactive' }}">
                                    {{ $blog->status ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="actions">

                                    <form action="{{ route('admin.blogs.toggleStatus', $blog->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit"
                                            class="btn-action {{ $blog->status ? 'btn-inactive' : 'btn-active' }}">
                                            {{ $blog->status ? 'Deactivate' : 'Activate' }}
                                        </button>
                                    </form>

                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                       class="btn-action btn-edit">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn-action btn-delete"
                                                onclick="return confirm('Delete this blog permanently?')">
                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="empty">No blogs found.</div>
        @endif
    </div>

</div>
@endsection
