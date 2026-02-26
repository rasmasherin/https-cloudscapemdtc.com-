@extends('admin.layouts.app')

@section('content')

<style>
/* ===== PAGE BACKGROUND ===== */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #ffffff;
 
}

/* ===== FORM WRAPPER ===== */
.form-wrapper {
    min-height: 100vh;
   
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

/* ===== FORM CONTAINER (PURPLE BG) ===== */
.form-container {
    width: 100%;
    max-width: 700px;
    background: #E6DFF5;
    padding: 2rem;
    border-radius: 14px;
    border: 1px solid #cbbfe9;
    box-shadow: none;
}

/* ===== HEADER ===== */
.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.page-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #111;
}

/* ===== FORM ELEMENTS ===== */
.form-group {
    margin-bottom: 1rem;
}

.form-label {
    font-weight: 500;
    margin-bottom: 0.25rem;
    display: block;
    color: #333;
}

.form-label .required {
    color: #ef4444;
}

.form-input,
.form-textarea,
.form-file,
.feature-input {
    width: 100%;
    padding: 0.5rem 0.75rem;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-size: 0.9rem;
    background: #ffffff;
}

.form-input:focus,
.form-textarea:focus,
.feature-input:focus {
    outline: none;
    border-color: #423763;
}

.form-textarea {
    resize: vertical;
    min-height: 80px;
}

/* ===== FEATURES ===== */
.features-section {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.feature-item {
    display: flex;
    gap: 0.5rem;
    align-items: center;
}

.btn-remove-feature {
    background: #eee;
    border: none;
    padding: 0.35rem 0.5rem;
    border-radius: 4px;
    cursor: pointer;
}

.btn-remove-feature:hover {
    background: #ddd;
}

.btn-add-feature {
    background: #423763;
    color: #fff;
    border: none;
    padding: 0.4rem 0.8rem;
    border-radius: 5px;
    font-size: 0.85rem;
    cursor: pointer;
}

.btn-add-feature:hover {
    background: #2f2548;
}

/* ===== FILE PREVIEW ===== */
.file-preview img {
    max-width: 180px;
    border-radius: 6px;
    margin-top: 0.5rem;
    border: 1px solid #d1d5db;
}

/* ===== ACTION BUTTONS ===== */
.form-actions {
    display: flex;
    gap: 1rem;
    margin-top: 1.5rem;
}

.btn-submit {
    background: #3F355D;
    color: white;
    border: none;
    padding: 0.6rem 1.5rem;
    border-radius: 6px;
    font-weight: 500;
    cursor: pointer;
}

.btn-submit:hover {
    background: #645889;
}

.btn-cancel,
.btn-back {
    background: #6D5AA5;
    color: #ffffff;
    border: none;
    padding: 0.6rem 1.5rem;
    border-radius: 6px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.btn-cancel:hover,
.btn-back:hover {
    background: #8d79c9;
}

/* ===== ERROR MESSAGE ===== */
.alert-error {
    background: #fee2e2;
    color: #b91c1c;
    border-radius: 6px;
    padding: 0.8rem;
    margin-bottom: 1rem;
    font-size: 0.9rem;
}

.alert-error ul {
    padding-left: 1.2rem;
    margin: 0.5rem 0 0 0;
}

/* ===== MOBILE ===== */
@media (max-width: 640px) {
    .form-actions {
        flex-direction: column;
    }

    .btn-submit,
    .btn-cancel,
    .btn-back {
        width: 100%;
    }
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<div class="form-wrapper">
    <div class="form-container">

        <div class="form-header">
            <h2 class="page-title">Add Service</h2>
            <a href="{{ route('admin.services.index') }}" class="btn-back">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>

        @if ($errors->any())
            <div class="alert-error">
                <strong><i class="fas fa-exclamation-circle"></i> Fix errors:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.services.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label class="form-label">Title <span class="required">*</span></label>
                <input type="text" name="title" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">Description <span class="required">*</span></label>
                <textarea name="description" class="form-textarea" required></textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Icon</label>
                <input type="file" name="icon" class="form-file" accept="image/*" onchange="previewImage(this,'icon-preview')">
                <div id="icon-preview" class="file-preview"></div>
            </div>

            <div class="form-group">
                <label class="form-label">Features</label>
                <div class="features-section" id="features-wrapper">
                    <div class="feature-item">
                        <input type="text" name="features[]" class="feature-input" placeholder="Enter feature">
                        <button type="button" class="btn-remove-feature" onclick="removeFeature(this)" style="display:none;">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <button type="button" class="btn-add-feature" onclick="addFeature()">
                    <i class="fas fa-plus"></i> Add Feature
                </button>
            </div>

            <div class="form-group">
                <label class="form-label">Display Order</label>
                <input type="number" name="display_order" class="form-input" value="0" min="0" style="max-width:150px;">
            </div>

            <div class="form-group">
                <label class="form-label">Service Image</label>
                <input type="file" name="image" class="form-file" accept="image/*" onchange="previewImage(this,'image-preview')">
                <div id="image-preview" class="file-preview"></div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-submit"><i class="fas fa-save"></i> Save</button>
                <a href="{{ route('admin.services.index') }}" class="btn-cancel"><i class="fas fa-times"></i> Cancel</a>
            </div>
        </form>

    </div>
</div>

<script>
function addFeature() {
    const wrapper = document.getElementById('features-wrapper');
    const div = document.createElement('div');
    div.className = 'feature-item';
    div.innerHTML = `
        <input type="text" name="features[]" class="feature-input" placeholder="Enter feature">
        <button type="button" class="btn-remove-feature" onclick="removeFeature(this)">
            <i class="fas fa-times"></i>
        </button>
    `;
    wrapper.appendChild(div);
    updateRemoveButtons();
}

function removeFeature(button) {
    button.closest('.feature-item').remove();
    updateRemoveButtons();
}

function updateRemoveButtons() {
    const items = document.querySelectorAll('.feature-item');
    items.forEach(item => {
        const btn = item.querySelector('.btn-remove-feature');
        btn.style.display = items.length > 1 ? 'flex' : 'none';
    });
}

function previewImage(input, id) {
    const preview = document.getElementById(id);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            preview.innerHTML = `<img src="${e.target.result}" alt="Preview">`;
        };
        reader.readAsDataURL(input.files[0]);
    } else {
        preview.innerHTML = '';
    }
}

document.addEventListener('DOMContentLoaded', updateRemoveButtons);
</script>

@endsection
