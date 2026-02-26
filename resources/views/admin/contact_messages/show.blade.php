@extends('admin.layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">

    <h1 class="page-title mb-4">View Message</h1>

    <div class="card message-card">
        <div class="message-row">
            <span class="label">Name</span>
            <span class="value">{{ $contactMessage->name }}</span>
        </div>

        <div class="message-row">
            <span class="label">Company</span>
            <span class="value">{{ $contactMessage->company }}</span>
        </div>

        <div class="message-row">
            <span class="label">Email</span>
            <span class="value">{{ $contactMessage->email }}</span>
        </div>

        <div class="message-row">
            <span class="label">Phone</span>
            <span class="value">{{ $contactMessage->phone }}</span>
        </div>

        <div class="message-row">
            <span class="label">Subject</span>
            <span class="value">{{ $contactMessage->subject }}</span>
        </div>

        <div class="message-row message-box">
            <span class="label">Message</span>
            <div class="value message-text">
                {{ $contactMessage->message }}
            </div>
        </div>

        <div class="message-row">
            <span class="label">Sent At</span>
            <span class="value">
                {{ $contactMessage->created_at->format('d M Y H:i') }}
            </span>
        </div>
    </div>

    <div class="mt-4 d-flex gap-3">
        <a href="{{ route('admin.contact_messages.index') }}" class="btn-styled btn-back">
            <i class="fas fa-arrow-left me-2"></i>Back to Messages
        </a>
    </div>

</div>

<style>
/* ===============================
   PAGE TITLE
================================ */
.page-title {
    color: #4A3F6B;
    font-weight: 800;
    letter-spacing: .5px;
}

/* ===============================
   CARD
================================ */
.message-card {
    border: none;
    border-radius: 16px;
    padding: 30px;
    background: #fff;
    box-shadow: 0 12px 30px rgba(0,0,0,.08);
}

/* ===============================
   ROWS
================================ */
.message-row {
    display: flex;
    align-items: flex-start;
    padding: 14px 0;
    border-bottom: 1px solid #eee;
}

.message-row:last-child {
    border-bottom: none;
}

/* ===============================
   LABELS & VALUES
================================ */
.label {
    width: 160px;
    font-weight: 700;
    color: #4A3F6B;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: .6px;
}

.value {
    flex: 1;
    font-size: 16px;
    color: #333;
}

/* ===============================
   MESSAGE BOX
================================ */
.message-box .message-text {
    background: #f8f7fc;
    padding: 18px;
    border-radius: 12px;
    border-left: 5px solid #4A3F6B;
    font-size: 16px;
    line-height: 1.7;
}

/* ===============================
   BUTTONS
================================ */
.btn-styled {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 12px 26px;
    font-size: 15px;
    font-weight: 600;
    border: none;
    border-radius: 10px;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
}

.btn-styled:hover {
    transform: translateY(-2px);
}

.btn-back {
    background: linear-gradient(135deg, #4A3F6B 0%, #8C79B9 100%);
    color: #fff;
}

.btn-back:hover {
    background: linear-gradient(135deg, #372f52 0%, #6f5fa3 100%);
    color: #fff;
}

.btn-styled i {
    font-size: 18px;
}

/* ===============================
   MOBILE
================================ */
@media (max-width: 768px) {
    .message-row {
        flex-direction: column;
        gap: 6px;
    }

    .label {
        width: 100%;
    }

    .btn-styled {
        width: 100%;
    }
}
</style>
@endsection
