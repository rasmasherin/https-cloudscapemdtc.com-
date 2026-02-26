<body>

<style>
/* ===== FORM VISIBILITY IMPROVEMENTS ===== */
#appointmentFormWrapper {
    background: #ffffff;
    border-radius: 18px;
    box-shadow: 0 12px 35px rgba(74, 63, 107, 0.15);
}

/* Inputs & Selects */
#appointmentFormWrapper .form-control,
#appointmentFormWrapper .form-select {
    background-color: #ffffff !important;
    border: 1.6px solid #d6cdee;
    font-size: 0.95rem;
    color: #2d2440;
    transition: all 0.25s ease;
}

/* Placeholder */
#appointmentFormWrapper .form-control::placeholder {
    color: #9a8fb8;
    opacity: 1;
}

/* Focus state */
#appointmentFormWrapper .form-control:focus,
#appointmentFormWrapper .form-select:focus {
    border-color: #937acc;
    box-shadow: 0 0 0 4px rgba(147, 122, 204, 0.2);
    outline: none;
}

/* Hover */
#appointmentFormWrapper .form-control:hover,
#appointmentFormWrapper .form-select:hover {
    border-color: #b8a4d4;
}

/* Labels */
#appointmentFormWrapper .form-label {
    color: #4A3F6B;
    font-weight: 600;
}
</style>

<div class="container-fluid overflow-hidden px-lg-0"
     style="background: linear-gradient(135deg, #937acc 0%, #b8a4d4 100%);">

    <div class="container appointment px-lg-0">
        <div class="row g-0" id="appointment">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">
                <div class="h-100 d-flex align-items-center"
                     style="background: linear-gradient(135deg,#faf9fc,#f3effa);
                            border-radius:18px;
                            box-shadow:0 12px 30px rgba(90,74,111,0.08);">

                    <div class="text-center px-5 py-5 w-100">
                        <p class="text-uppercase fw-semibold mb-3"
                           style="color:#8b7ba8;letter-spacing:2.5px;font-size:0.8rem;">
                            Professional Therapy Services
                        </p>

                        <h1 class="mb-4" style="color:#5a4a6f;font-weight:600;">
                            Building Bonds<br>
                            <span style="color:#937acc;">Through Words</span>
                        </h1>

                        <p style="color:#6f6285;max-width:420px;margin:0 auto;">
                            Compassionate, evidence-based therapy designed to help
                            individuals communicate, connect, and thrive.
                        </p>
                    </div>
                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="col-lg-6">
                <div class="h-100 px-5 py-5 d-flex flex-column justify-content-center"
                     id="appointmentFormWrapper">

                    <div class="mb-4">
                        <h2 style="color:#4A3F6B;font-weight:700;">
                            Schedule Your Appointment
                        </h2>
                        <p style="color:#6b6b6b;font-size:0.95rem;">
                            Complete the form below and our team will contact you within 24 hours
                        </p>
                    </div>

                    <!-- FORM -->
                    <form id="appointmentForm"
                          action="{{ route('appointments.store') }}"
                          method="POST">
                        @csrf

                        <div class="row g-3">

                            <div class="col-sm-6">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="full_name"
                                       class="form-control" required>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email"
                                       class="form-control" required>
                            </div>

                         <div class="col-sm-6">
    <label class="form-label">Phone Number *</label>
    <input type="text" name="phone"
           class="form-control"
           placeholder="Enter 10-15 digits"
           required>
</div>


                            <div class="col-sm-6">
                                <label class="form-label">Age Group *</label>
                                <select name="age_group"
                                        class="form-select" required>
                                    <option disabled selected>Select age...</option>
                                    <option value="Child (0–12)">Child (0–12)</option>
                                    <option value="Teen (13–17)">Teen (13–17)</option>
                                    <option value="Adult (18+)">Adult (18+)</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Service *</label>
                                <select name="service_name"
                                        class="form-select" required>
                                    <option disabled selected>Select service...</option>
                                    <option>Speech & Language Therapy</option>
                                    <option>Occupational Therapy</option>
                                    <option>Psychological Support</option>
                                    <option>Physiotherapy</option>
                                    <option>Developmental Assessments</option>
                                </select>
                            </div>

                            <div class="col-12 mt-4">
                                <button class="btn btn-lg w-100 py-3"
                                        style="background:linear-gradient(135deg,#937acc,#b8a4d4);
                                               color:#fff;font-weight:700;">
                                    Submit Appointment Request
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('appointmentForm');
    if (!form) return;

    const phoneInput = form.phone;

    // Force only digits while typing
    phoneInput.addEventListener('input', function () {
        // Remove non-digit characters
        this.value = this.value.replace(/\D/g, '');
        // Limit to 15 digits
        if (this.value.length > 15) this.value = this.value.slice(0, 15);
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const name    = form.full_name.value.trim();
        const email   = form.email.value.trim();
        const phone   = form.phone.value.trim();
        const age     = form.age_group.value;
        const service = form.service_name.value;

        // Validate phone strictly
        if (!/^\d{10,15}$/.test(phone)) {
            alert("Phone number must be **10 to 15 digits only**.");
            phoneInput.focus();
            return;
        }

        const whatsappNumber = "917994341956";

        const message = `Hello,

A new appointment request has been submitted. Details are as follows:

Name: ${name}
Phone Number: ${phone}
Email Address: ${email}
Age Group: ${age}
Service Requested: ${service}

Please follow up at your convenience.

Kind regards.`;

        window.open(
            `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`,
            '_blank',
            'noopener,noreferrer'
        );

        form.reset(); // Clear the form after submission
    });

});
</script>


</body>
