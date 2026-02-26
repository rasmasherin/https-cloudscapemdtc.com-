@extends('admin.layouts.app')

@section('content')
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f3f4f6;
    }

    .form-container {
        max-width: 800px;
        margin: 2rem auto;
        background: #fff;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 6px 18px rgba(6, 6, 6, 0.08);
    }

    .form-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .form-header h2 {
        font-size: 1.75rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #111827;
    }

    .btn-back {
        background: #8C79B9;
        color: #fff;
        padding: 0.6rem 1.2rem;
        border-radius: 8px;
        font-size: 0.9rem;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        transition: 0.2s;
    }

    .btn-back:hover {
        background: #a08eca;
    }

    .form-group {
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: #374151;
    }

    .form-input,
    .form-textarea,
    .form-select {
        padding: 0.75rem 1rem;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        font-size: 1rem;
        transition: 0.2s;
    }

    .form-input:focus,
    .form-textarea:focus,
    .form-select:focus {
        outline: none;
        border-color: #6366f1;
        box-shadow: 0 0 0 3px rgba(99,102,241,0.2);
    }

    .form-textarea {
        resize: vertical;
    }

    .form-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1rem;
    }

    .form-actions {
        margin-top: 1.5rem;
        display: flex;
        gap: 1rem;
    }

    .btn-submit {
        background: #3F355D;
        color: #fff;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.2s;
    }

    .btn-submit:hover {
        background: #5d4e8b;
    }

    .btn-cancel {
        background: #6D5AA5;
        color: #fdfeff;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    /* ===== Toggle Switch ===== */
    .toggle-wrapper {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-top: 8px;
    }

    .toggle-switch {
        position: relative;
        width: 56px;
        height: 30px;
    }

    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .toggle-slider {
        position: absolute;
        cursor: pointer;
        inset: 0;
        background: #d1d5db;
        border-radius: 30px;
        transition: 0.3s;
    }

    .toggle-slider::before {
        content: "";
        position: absolute;
        height: 22px;
        width: 22px;
        left: 4px;
        bottom: 4px;
        background: white;
        border-radius: 50%;
        transition: 0.3s;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .toggle-switch input:checked + .toggle-slider {
        background: #6366f1;
    }

    .toggle-switch input:checked + .toggle-slider::before {
        transform: translateX(26px);
    }

    .toggle-label-text {
        font-size: 0.95rem;
        font-weight: 500;
        color: #374151;
    }

    @media (max-width: 600px) {
        .form-actions {
            flex-direction: column;
        }
        .btn-submit, .btn-cancel {
            width: 100%;
        }
    }
</style>

<div class="form-container">

    <!-- Header -->
    <div class="form-header">
        <h2><i class="fas fa-briefcase"></i> Add Career</h2>
        <a href="{{ route('admin.careers.index') }}" class="btn-back">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </div>

    <form action="{{ route('admin.careers.store') }}" method="POST">
        @csrf

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Job Title *</label>
                <input type="text" name="title" class="form-input" required>
            </div>

            <div class="form-group">
                <label class="form-label">Location</label>
                <input type="text" name="location" class="form-input">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Job Type</label>
                <select name="job_type" class="form-select">
                    <option>Full Time</option>
                    <option>Part Time</option>
                    <option>Contract</option>
                    <option>Internship</option>
                </select>
            </div>

            <div class="form-group">
                <label class="form-label">Experience</label>
                <input type="text" name="experience" class="form-input">
            </div>

            <div class="form-group">
                <label class="form-label">Qualification</label>
                <input type="text" name="qualification" class="form-input">
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Skills</label>
            <input type="text" name="skills" class="form-input">
        </div>

        <!-- STATUS TOGGLE -->
        <div class="form-group">
            <label class="form-label">Status</label>
            <div class="toggle-wrapper">
                <label class="toggle-switch">
                    <input type="checkbox" name="status" value="1" checked>
                    <span class="toggle-slider"></span>
                </label>
                <span class="toggle-label-text">Active</span>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Job Description *</label>
            <textarea name="description" rows="5" class="form-textarea" required></textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-submit">Save Career</button>
            <a href="{{ route('admin.careers.index') }}" class="btn-cancel">Cancel</a>
        </div>

    </form>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
