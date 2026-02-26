@extends('admin.layouts.app')

@section('content')

<style>
    /* ===== PAGE BACKGROUND ===== */
    .services-container {
        background: #ffffff;
        min-height: 100vh;
        
    }

    /* ===== MAIN CARD (NO WHITE) ===== */
    .services-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 1.5rem;
        box-shadow: none;
    }

    /* ===== HEADER ===== */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .page-title {
        font-size: 1.75rem;
        font-weight: 600;
        color: #111827;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.75rem 1.5rem;
        background: linear-gradient(135deg, #3F355D 0%, #3F355D 100%);
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 500;
    }

    /* ===== TABLE CONTAINER (NO WHITE) ===== */
    .table-container {
        background: transparent;
        border-radius: 12px;
        overflow-x: auto;
    }

    /* ===== TABLE ===== */
    .services-table {
        width: 100%;
        min-width: 900px;
        border-collapse: collapse;
        border: 1px solid #423763;
        background: #E6DFF5;
    }

    .services-table thead {
        background: linear-gradient(135deg, #4A3F6B 0%, #3a2f5b 100%);
    }

    .services-table thead th {
        padding: 0.75rem;
        color: #fff;
        font-size: 0.875rem;
        text-transform: uppercase;
        border-right: 1px solid #423763;
    }

    .services-table th:last-child,
    .services-table td:last-child {
        border-right: none;
    }

    .services-table tbody tr {
        border-bottom: 1px solid #423763;
    }

    .services-table tbody tr:hover {
        background: #d9cff0;
    }

    .services-table td {
        padding: 0.75rem;
        font-size: 0.875rem;
        color: #374151;
        border-right: 1px solid #423763;
        vertical-align: middle;
        background: #E6DFF5;
    }

    /* ===== CONTENT ===== */
    .service-icon {
        width: 45px;
        height: 45px;
        border-radius: 8px;
        border: 2px solid #423763;
        object-fit: cover;
    }

    .service-image {
        width: 70px;
        height: 50px;
        border-radius: 8px;
        border: 2px solid #423763;
        object-fit: cover;
    }

    .features-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .features-list li::before {
        content: "•";
        color: #423763;
        margin-right: 6px;
    }

    .action-buttons {
        display: flex;
        gap: 0.5rem;
    }

    .btn-edit {
        background: #423763;
        color: #fff;
        padding: 0.4rem 0.75rem;
        border-radius: 6px;
        font-size: 0.75rem;
        text-decoration: none;
    }

    .btn-delete {
        background: #8875B4;
        color: #fff;
        padding: 0.4rem 0.75rem;
        border-radius: 6px;
        border: none;
        font-size: 0.75rem;
    }

    .empty-state {
        text-align: center;
        padding: 3rem;
        color: #6b7280;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="services-container">
    <div class="services-card">

        <div class="page-header">
            <h2 class="page-title">Services Management</h2>
            <a href="{{ route('admin.services.create') }}" class="btn-primary">
                <i class="fas fa-plus"></i> Add New Service
            </a>
        </div>

        <div class="table-container">
            <table class="services-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Icon</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Features</th>
                        <th class="text-center">Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                        <tr>
                            <td><strong>{{ $service->id }}</strong></td>

                            <td class="text-center">
                                @if($service->icon)
                                    <img src="{{ asset('storage/'.$service->icon) }}" class="service-icon">
                                @else
                                    <i class="fas fa-image text-muted"></i>
                                @endif
                            </td>

                            <td>{{ $service->title }}</td>
                            <td>{{ Str::limit($service->description, 80) }}</td>

                            <td>
                                @if(!empty($service->features))
                                    <ul class="features-list">
                                        @foreach(array_slice($service->features, 0, 3) as $feature)
                                            <li>{{ $feature }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <em class="text-muted">No features</em>
                                @endif
                            </td>

                            <td class="text-center">
                                @if($service->image)
                                    <img src="{{ asset('storage/'.$service->image) }}" class="service-image">
                                @else
                                    <i class="fas fa-image text-muted"></i>
                                @endif
                            </td>

                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.services.edit',$service->id) }}" class="btn-edit">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>

                                    <form action="{{ route('admin.services.destroy',$service->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-delete" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">
                                <div class="empty-state">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <h5>No Services Found</h5>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
