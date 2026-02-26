@extends('admin.layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f3f4f6;
}

/* Container */
.edit-container {
    min-height: 100vh;
    padding: 1.5rem;
}

/* Header */


.page-title {
    font-size: 1.4rem;
    font-weight: 600;
    color: #111827;
    display: flex;
    align-items: center;
    gap: 0.4rem;
}

.page-title i {
    color: #3F355D;
    font-size: 1.2rem;
}

/* Card */
.edit-card {
    background: #E6DFF5;
    max-width: 640px;
   
    padding: 1.75rem;
    border-radius: 14px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.05);
}

/* Error */
.alert-error {
    background: #fee2e2;
    color: #b91c1c;
    border-radius: 10px;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    font-size: 0.85rem;
}

/* Form */
.form-group {
    margin-bottom: 1.25rem;
}

label {
    font-weight: 600;
    color: #374151;
    font-size: 0.85rem;
    margin-bottom: 0.3rem;
    display: block;
}

input[type="text"],
input[type="number"],
textarea,
input[type="file"] {
    width: 100%;
    padding: 0.55rem 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    background: #f9fafb;
    font-size: 0.85rem;
}

input:focus,
textarea:focus {
    outline: none;
    background: #fff;
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59,130,246,0.1);
}

textarea {
    min-height: 90px;
    resize: vertical;
}

/* Images */
.preview-img {
    margin-top: 0.4rem;
    max-width: 90px;
    border-radius: 8px;
    border: 1px solid #e5e7eb;
}

/* Features */
.feature-item {
    display: flex;
    gap: 0.4rem;
    margin-bottom: 0.4rem;
}

.remove-btn {
    background: #4A3F6B;
    border: none;
    color: #fff;
    padding: 0.35rem 0.55rem;
    border-radius: 6px;
    font-size: 0.75rem;
    cursor: pointer;
}

.add-feature-btn {
    background: #4A3F6B;
    color: #fff;
    border: none;
    padding: 0.45rem 0.85rem;
    border-radius: 8px;
    font-size: 0.8rem;
    cursor: pointer;
    margin-top: 0.4rem;
}

/* Actions */
.form-actions {
    display: flex;
    gap: 0.75rem;
    margin-top: 1.5rem;
    flex-wrap: wrap;
}

.btn-update {
    background: #4A3F6B;
    color: #fff;
    border: none;
    padding: 0.55rem 1.5rem;
    border-radius: 8px;
    font-size: 0.85rem;
    font-weight: 600;
    cursor: pointer;
}

.btn-cancel {
    background: #8875B4;
    border: 1px solid #d1d5db;
    padding: 0.55rem 1.3rem;
    border-radius: 8px;
    text-decoration: none;
    color: #ffffff;
    font-size: 0.85rem;
}

.btn-back {
    background: #64548b;
    color: #fff;
    padding: 0.55rem 1.3rem;
    border-radius: 8px;
    text-decoration: none;
    font-size: 0.85rem;
}
</style>

<div class="edit-container">

    <div class="edit-header">
        <h2 class="page-title">
            <i class="fas fa-edit"></i> Edit Service
        </h2>
    </div>

    <div class="edit-card">

        @if ($errors->any())
            <div class="alert-error">
                <strong>Please fix the following:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST"
              action="{{ route('admin.services.update', $service->id) }}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" value="{{ old('title',$service->title) }}" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" required>{{ old('description',$service->description) }}</textarea>
            </div>

            <div class="form-group">
                <label>Icon Image</label>
                <input type="file" name="icon" accept="image/*">
                @if($service->icon)
                    <img src="{{ asset('storage/'.$service->icon) }}" class="preview-img">
                @endif
            </div>

            <div class="form-group">
                <label>Features</label>
                <div id="features-wrapper">
                    @foreach($service->features ?? [] as $feature)
                        <div class="feature-item">
                            <input type="text" name="features[]" value="{{ $feature }}">
                            <button type="button" class="remove-btn" onclick="this.parentElement.remove()">✕</button>
                        </div>
                    @endforeach
                </div>
                <button type="button" class="add-feature-btn" onclick="addFeature()">+ Add Feature</button>
            </div>

            <div class="form-group">
                <label>Display Order</label>
                <input type="number" name="display_order" value="{{ old('display_order',$service->display_order) }}">
            </div>

            <div class="form-group">
                <label>Service Image</label>
                <input type="file" name="image" accept="image/*">
                @if($service->image)
                    <img src="{{ asset('storage/'.$service->image) }}" class="preview-img">
                @endif
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-update">
                    <i class="fas fa-save"></i> Update
                </button>

                <a href="{{ route('admin.services.index') }}" class="btn-cancel">
                    Cancel
                </a>

                <a href="{{ route('admin.services.index') }}" class="btn-back">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </form>

    </div>
</div>

<script>
function addFeature(){
    const wrapper = document.getElementById('features-wrapper');
    const div = document.createElement('div');
    div.className = 'feature-item';
    div.innerHTML = `
        <input type="text" name="features[]" placeholder="Feature">
        <button type="button" class="remove-btn" onclick="this.parentElement.remove()">✕</button>
    `;
    wrapper.appendChild(div);
}
</script>

@endsection
