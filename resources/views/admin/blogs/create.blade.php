@extends('admin.layouts.app')

@section('content')
<style>
    body {
        background: #f4f6fb;
    }

    .admin-page {
        max-width: 820px;   /* ⬅ reduced width */
        margin: 30px auto;
        padding: 0 16px;
    }

    .page-title {
        font-size: 26px;   /* smaller title */
        font-weight: 700;
        margin-bottom: 22px;
        color: #111827;
    }

    .card {
        background: #ffffff;
        border-radius: 14px;
        padding: 28px;     /* ⬅ reduced padding */
        box-shadow: 0 8px 22px rgba(0,0,0,0.08);
    }
    

    .form-group {
        margin-bottom: 18px; /* ⬅ tighter spacing */
    }

    label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 6px;
        color: #374151;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 12px 14px;  /* ⬅ reduced input height */
        border-radius: 10px;
        border: 1.5px solid #d1d5db;
        font-size: 14px;
        background: #f9fafb;
        transition: all .2s ease;
    }

    textarea {
        min-height: 110px;   /* ⬅ smaller textarea */
        resize: vertical;
    }

    textarea[name="content"] {
        min-height: 180px;   /* ⬅ reduced content height */
    }

    input:focus,
    textarea:focus {
        outline: none;
        background: #fff;
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99,102,241,0.15);
    }

    input[type="file"] {
        font-size: 14px;
    }

    .actions {
        display: flex;
        gap: 12px;
        margin-top: 24px;
    }

    .btn {
        padding: 11px 22px;   /* ⬅ smaller buttons */
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        border: none;
        transition: all .2s ease;
        text-decoration: none;
    }

    .btn-primary {
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        color: #fff;
        box-shadow: 0 6px 16px rgba(79,70,229,.35);
    }

    .btn-primary:hover {
        transform: translateY(-1px);
        box-shadow: 0 10px 20px rgba(79,70,229,.4);
    }

    .btn-secondary {
        background: #e5e7eb;
        color: #374151;
    }

    .btn-secondary:hover {
        background: #d1d5db;
    }

    .error {
        margin-top: 6px;
        font-size: 12px;
        color: #dc2626;
    }

    @media(max-width: 768px) {
        .admin-page {
            max-width: 100%;
        }
    }
</style>

<div class="admin-page">

    <h2 class="page-title">Add New Blog</h2>

    <div class="card">
        <form method="POST"
              action="{{ route('admin.blogs.store') }}"
              enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Blog Title</label>
                <input type="text" name="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label>Category</label>
                <input type="text" name="category" value="{{ old('category') }}">
            </div>

            <div class="form-group">
                <label>Short Excerpt</label>
                <textarea name="excerpt">{{ old('excerpt') }}</textarea>
            </div>

            <div class="form-group">
                <label>Full Blog Content</label>
                <textarea name="content">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                <label>Featured Image</label>
                <input type="file" name="image">
            </div>

            <div class="actions">
                <button type="submit" class="btn btn-primary">
                    Publish
                </button>

                <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                    Cancel
                </a>
            </div>

        </form>
    </div>

</div>
@endsection
