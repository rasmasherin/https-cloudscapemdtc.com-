@extends('layouts.app')

@section('content')

@include('topper')
@include('navigation')
@include('hero')
@include('video')
@include('about_home')
@include('services_home')
@include('support')
@include('testimonial')
@include('appointment')
@include('faq')
@include('believe')
@include('footer')

<!-- Consultation Popup -->
<div class="modal fade" id="consultationPopup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
        <div class="modal-content border-0 rounded-4 shadow">
            <div class="modal-body p-4 position-relative text-center">

                <button type="button"
                    class="btn-close position-absolute top-0 end-0 m-3"
                    data-bs-dismiss="modal"></button>

                <!-- Logo -->
                <div class="mb-4">
                    <img src="{{ asset('img/cloudlogo.png') }}"
                         alt="Therapy Clinic Logo"
                         style="max-height: 80px;">
                </div>

                <h4 class="fw-bold mb-2">
                    Book Your Consultation
                </h4>

                <p class="text-muted small mb-4">
                    Compassionate, evidence-based therapy tailored to support
                    your emotional and developmental well-being.
                </p>

                <form id="consultationForm">
                    @csrf

                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold small">
                            Parent / Client Name*
                        </label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold small">
                            Phone Number*
                        </label>
                        <input type="text" name="phone" class="form-control" placeholder="10 to 15 digits" required>
                    </div>

                    <div class="mb-4 text-start">
                        <label class="form-label fw-semibold small">
                            Email Address (Optional)
                        </label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div id="formMessage" class="small mb-3 text-danger"></div>

                    <div class="d-grid">
                        <button type="submit"
                            class="btn btn-primary rounded-pill py-2">
                            Request Appointment
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('consultationForm');
    if (!form) return;

    // Force only numbers while typing
    const phoneInput = form.querySelector('input[name="phone"]');
    phoneInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, ''); // Remove non-digits
        if (this.value.length > 15) this.value = this.value.slice(0, 15); // Max 15 digits
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const name  = form.querySelector('input[name="name"]').value.trim();
        const phone = phoneInput.value.trim();
        const email = form.querySelector('input[name="email"]').value.trim();

        // Validate length strictly
        if (phone.length < 10 || phone.length > 15) {
            document.getElementById('formMessage').innerText =
                "Phone number must be between 10 and 15 digits.";
            return;
        }

        const whatsappNumber = "917994341956";

        let message =
`Hello,

I would like to request a consultation appointment. Please find my details below:

Name: ${name}
Phone Number: ${phone}`;

        if (email !== "") {
            message += `\nEmail Address: ${email}`;
        }

        const whatsappURL =
            `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

        window.open(whatsappURL, '_blank', 'noopener,noreferrer');

        // Hide the modal
        const modal = bootstrap.Modal.getInstance(
            document.getElementById('consultationPopup')
        );
        if (modal) modal.hide();

        form.reset();
        document.getElementById('formMessage').innerText = "";
    });

    // Show modal after page load
    setTimeout(() => {
        new bootstrap.Modal(
            document.getElementById('consultationPopup')
        ).show();
    }, 800);

});
</script>

@endsection
