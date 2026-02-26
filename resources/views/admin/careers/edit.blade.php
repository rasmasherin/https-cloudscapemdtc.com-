@extends('admin.layouts.app')

@section('content')
<div class="minimal-container">
    <div class="content-wrapper">

        <!-- Header -->
        <div class="page-header">
            <h1>Edit Career Position</h1>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.careers.update', $career->id) }}" method="POST" class="minimal-form">
            @csrf
            @method('PUT')

            <div class="form-grid">

                <!-- Job Title -->
                <div class="form-field full-width">
                    <label>Job Title</label>
                    <input type="text"
                           name="job_title"
                           value="{{ old('job_title', $career->job_title) }}"
                           placeholder="Senior Software Engineer"
                           required>
                </div>

                <!-- Location -->
                <div class="form-field">
                    <label>Location</label>
                    <input type="text"
                           name="location"
                           value="{{ old('location', $career->location) }}"
                           placeholder="New York, NY"
                           required>
                </div>

                <!-- Job Type -->
                <div class="form-field">
                    <label>Job Type</label>
                    <select name="job_type" required>
                        <option value="">Select type</option>
                        <option value="Full Time" {{ $career->job_type == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                        <option value="Part Time" {{ $career->job_type == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                        <option value="Contract" {{ $career->job_type == 'Contract' ? 'selected' : '' }}>Contract</option>
                    </select>
                </div>

                <!-- Experience -->
                <div class="form-field">
                    <label>Experience</label>
                    <input type="text"
                           name="experience"
                           value="{{ old('experience', $career->experience) }}"
                           placeholder="3-5 years"
                           required>
                </div>

                <!-- Qualification -->
                <div class="form-field">
                    <label>Qualification</label>
                    <input type="text"
                           name="qualification"
                           value="{{ old('qualification', $career->qualification) }}"
                           placeholder="Bachelor's Degree"
                           required>
                </div>

                <!-- Status Toggle -->
                <div class="form-field">
                    <label>Status</label>

                    <div class="status-toggle">
                        <input type="checkbox"
                               id="status"
                               name="status"
                               value="1"
                               {{ old('status', $career->status) == 1 ? 'checked' : '' }}>
                        <label for="status" class="toggle-label">
                            <span class="toggle-text active">Active</span>
                            <span class="toggle-text inactive">Inactive</span>
                        </label>
                    </div>
                </div>

                <!-- Skills -->
                <div class="form-field full-width">
                    <label>Skills</label>
                    <input type="text"
                           name="skills"
                           value="{{ old('skills', $career->skills) }}"
                           placeholder="Laravel, PHP, MySQL, JavaScript"
                           required>
                    <span class="hint">Separate with commas</span>
                </div>

                <!-- Description -->
                <div class="form-field full-width">
                    <label>Job Description</label>
                    <textarea name="description"
                              rows="8"
                              placeholder="Describe the role, responsibilities, and requirements..."
                              required>{{ old('description', $career->description) }}</textarea>
                </div>

            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('admin.careers.index') }}" class="btn-secondary">Cancel</a>
                <button type="submit" class="btn-primary">Update Position</button>
            </div>

            <!-- Back Button -->
            <a href="{{ route('admin.careers.index') }}" class="back-button">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                <span>Back to Careers</span>
            </a>

        </form>

    </div>
</div>

<style>
/* Layout */
.minimal-container {
    min-height: 100vh;
    background: #fafafa;
    padding: 40px 0;
}

.content-wrapper {
    max-width: 800px;
    margin: auto;
}

/* Header */
.page-header h1 {
    font-size: 32px;
    font-weight: 600;
    margin-bottom: 32px;
}

/* Form */
.minimal-form {
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.form-field {
    display: flex;
    flex-direction: column;
}

.full-width {
    grid-column: 1 / -1;
}

/* Labels */
label {
    font-size: 16px;
    font-weight: 500;
    margin-bottom: 8px;
}

/* Inputs */
input, select, textarea {
    padding: 12px 16px;
    border-radius: 6px;
    border: 1px solid #e0e0e0;
    font-size: 15px;
}

textarea {
    resize: vertical;
}

/* Status Toggle */
.status-toggle {
    width: 110px;
}

.status-toggle input {
    display: none;
}

.toggle-label {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #e0e0e0;
    border-radius: 30px;
    padding: 4px;
    height: 40px;
    cursor: pointer;
    position: relative;
}

.toggle-label::before {
    content: "";
    position: absolute;
    width: 48px;
    height: 32px;
    background: #fff;
    border-radius: 20px;
    top: 4px;
    left: 4px;
    transition: all 0.3s ease;
}

.toggle-text {
    font-size: 13px;
    width: 50%;
    text-align: center;
    z-index: 2;
    color: #666;
}

.status-toggle input:checked + .toggle-label {
    background: #8875B4;
}

.status-toggle input:checked + .toggle-label::before {
    transform: translateX(54px);
}

.status-toggle input:checked + .toggle-label .active {
    color: #fff;
}

/* Actions */
.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 12px;
    margin-top: 32px;
    border-top: 1px solid #f0f0f0;
    padding-top: 32px;
}

.btn-primary {
    background: #8875B4;
    color: #fff;
    padding: 12px 24px;
    border-radius: 6px;
    border: none;
}

.btn-secondary {
    background: #3F355D;
    color: #fff;
    padding: 12px 24px;
    border-radius: 6px;
    text-decoration: none;
}

/* Back Button */
.back-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-top: 24px;
    background: #3F355D;
    color: #fff;
    padding: 10px 18px;
    border-radius: 6px;
    text-decoration: none;
}
</style>
@endsection
