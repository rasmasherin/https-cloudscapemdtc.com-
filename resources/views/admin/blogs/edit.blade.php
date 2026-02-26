@extends('admin.layouts.app')

@section('content')
<style>
    body {
        background: #f4f2f8;
    }

    .edit-page {
        max-width: 900px;
        margin: 40px auto;
        padding: 0 16px;
    }

    .page-title {
        font-size: 28px;
        font-weight: 700;
        color: #4A3F6B;
        margin-bottom: 24px;
    }

    .card {
        background: #ffffff;
        border-radius: 16px;
        padding: 28px;
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    }

    .form-group {
        margin-bottom: 18px;
    }

    label {
        display: block;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: 6px;
        color: #4A3F6B;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 12px 14px;
        border-radius: 10px;
        border: 1px solid #d6cfee;
        font-size: 14px;
        outline: none;
        transition: 0.2s ease;
    }

    input[type="text"]:focus,
    textarea:focus {
        border-color: #6D5AA5;
        box-shadow: 0 0 0 2px rgba(109,90,165,0.15);
    }

    textarea {
        min-height: 120px;
        resize: vertical;
    }

    .image-preview {
        margin-top: 12px;
    }

    .image-preview img {
        border-radius: 10px;
        border: 1px solid #ddd;
    }

    .actions {
        margin-top: 24px;
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .btn {
        padding: 10px 20px;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        text-decoration: none;
        transition: 0.25s ease;
    }

    .btn-save {
        background: linear-gradient(135deg, #4A3F6B, #6D5AA5);
        color: #fff;
    }

    .btn-save:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(74,63,107,0.3);
    }

    .btn-back {
        background: #e6dff5;
        color: #4A3F6B;
    }

    .btn-back:hover {
        background: #4A3F6B;
        color: #fff;
    }
</style>

<div class="edit-page">

    <h2 class="page-title">Edit Blog</h2>

    <div class="card">
        <form method="POST"
              action="{{ route('admin.blogs.update', $blog->id) }}"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Title</label>
                <input type="text"
                       name="title"
                       value="{{ old('title', $blog->title) }}"
                       placeholder="Blog title">
            </div>

            <div class="form-group">
                <label>Category</label>
                <input type="text"
                       name="category"
                       value="{{ old('category', $blog->category) }}"
                       placeholder="Category">
            </div>

            <div class="form-group">
                <label>Excerpt</label>
                <textarea name="excerpt"
                          placeholder="Short description">{{ old('excerpt', $blog->excerpt) }}</textarea>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea name="content"
                          placeholder="Full blog content"
                          style="min-height:180px;">{{ old('content', $blog->content) }}</textarea>
            </div>

            <div class="form-group">
                <label>Featured Image</label>
                <input type="file" name="image">
            </div>

            @if($blog->image)
                <div class="image-preview">
                    <label>Current Image</label><br>
                    <img src="{{ asset('storage/'.$blog->image) }}" width="160">
                </div>
            @endif

            <div class="actions">
                <button type="submit" class="btn btn-save">
                    Update Blog
                </button>

                <a href="{{ route('admin.blogs.index') }}"
                   class="btn btn-back">
                    ← Back to Blogs
                </a>
            </div>

        </form>
    </div>

</div>
@endsection
