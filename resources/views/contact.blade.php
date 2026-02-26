@extends('layouts.app')
@section('content')

@include('topper')
@include('navigation')

<!-- ================= HEADER ================= -->
<div class="position-relative overflow-hidden" 
     style="background: linear-gradient(135deg, #E6DFF5 0%, #D4C8ED 100%); padding: 80px 0 60px;">
    
    <div class="container text-center position-relative" style="z-index: 2;">
        <h1 class="display-4 fw-bold mb-3" style="color: #4A3F6B;">
            Get In Touch
        </h1>
        <p class="lead mb-0" 
           style="max-width: 600px; margin: 0 auto; color: #6B5B8C;">
            We'd love to hear from you. Send us a message and we'll respond as soon as possible.
        </p>
    </div>
</div>


<!-- ================= CONTACT CARDS ================= -->
<div class="container" style="margin-top: -50px; position: relative; z-index: 10;">
    <div class="row g-3 mb-5 justify-content-center">

        <!-- WhatsApp -->
        <div class="col-md-6 col-lg-4">
            <a href="https://wa.me/917994341956" target="_blank" class="text-decoration-none">
                <div class="card border-0 h-100 text-center p-4"
                     style="box-shadow: 0 6px 25px rgba(186,167,223,0.15); border-radius: 15px;">
                    <div class="mb-3">
                        <i class="fab fa-whatsapp fa-2x" style="color:#BAA7DF;"></i>
                    </div>
                    <h5 class="fw-bold" style="color:#4A3F6B;">WhatsApp</h5>
                    <p class="mb-0" style="color:#7B68A6;">+91 79943 41956</p>
                </div>
            </a>
        </div>

        <!-- Email -->
        <div class="col-md-6 col-lg-4">
            <a href="mailto:cloudscapemdtc@gmail.com" class="text-decoration-none">
                <div class="card border-0 h-100 text-center p-4"
                     style="box-shadow: 0 6px 25px rgba(186,167,223,0.15); border-radius: 15px;">
                    <div class="mb-3">
                        <i class="fa fa-envelope fa-2x" style="color:#BAA7DF;"></i>
                    </div>
                    <h5 class="fw-bold" style="color:#4A3F6B;">Email</h5>
                    <p class="mb-0" style="color:#7B68A6;">cloudscapemdtc@gmail.com</p>
                </div>
            </a>
        </div>

        <!-- Location -->
        <div class="col-md-6 col-lg-4">
            <a href="https://www.google.com/maps/search/Cloudscape+Multidisciplinary+Therapy+Centre"
               target="_blank" class="text-decoration-none">
                <div class="card border-0 h-100 text-center p-4"
                     style="box-shadow: 0 6px 25px rgba(186,167,223,0.15); border-radius: 15px;">
                    <div class="mb-3">
                        <i class="fa fa-map-marker-alt fa-2x" style="color:#BAA7DF;"></i>
                    </div>
                    <h5 class="fw-bold" style="color:#4A3F6B;">Clinic Location</h5>
                    <p class="mb-0" style="color:#7B68A6;">
                        Naikap, Kumbla, Kasaragod, Kerala 671321
                    </p>
                </div>
            </a>
        </div>

    </div>


   <form action="{{ route('contact.submit') }}" method="POST">
    @csrf

    <div class="row g-3">

        <!-- Name -->
        <div class="col-md-6">
            <input type="text" name="name"
                   class="form-control @error('name') is-invalid @enderror"
                   placeholder="Your Name" value="{{ old('name') }}">
            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <input type="email" name="email"
                   class="form-control @error('email') is-invalid @enderror"
                   placeholder="Email Address" value="{{ old('email') }}">
            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

       
       <!-- Phone Number -->
<div class="col-md-6">
    <input type="text" name="phone"
           class="form-control @error('phone') is-invalid @enderror"
           placeholder="Phone Number (10-15 digits)"
           value="{{ old('phone') }}" required>
    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>


        <!-- Subject -->
        <div class="col-md-6">
            <input type="text" name="subject"
                   class="form-control"
                   placeholder="Subject" value="{{ old('subject') }}">
        </div>

        <!-- Message -->
        <div class="col-12">
            <textarea name="message" rows="5"
                      class="form-control @error('message') is-invalid @enderror"
                      placeholder="Write your message...">{{ old('message') }}</textarea>
            @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <!-- Submit Button -->
        <div class="col-12 text-end">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-paper-plane me-2"></i> Send Message
            </button>
        </div>

    </div>
</form>


  <!-- ================= MAP ================= -->
<div class="row mt-5">
    <div class="col-12">
        <div class="card border-0 overflow-hidden"
             style="height:400px; border-radius:10px;
                    box-shadow: 0 8px 30px rgba(186,167,223,0.12);">

            <iframe 
                src="https://www.google.com/maps?q=Cloudscape+Multidisciplinary+Therapy+Centre,+Kumbla,+Kasaragod,+Kerala&output=embed"
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>

        </div>
    </div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const phoneInput = document.querySelector('input[name="phone"]');
    const form = phoneInput.closest('form');

    // Force only digits while typing
    phoneInput.addEventListener('input', function () {
        this.value = this.value.replace(/\D/g, ''); // Remove non-digits
        if (this.value.length > 15) this.value = this.value.slice(0, 15); // Max 15 digits
    });

    // Validate on form submit
    form.addEventListener('submit', function (e) {
        const phone = phoneInput.value.trim();

        if (!/^\d{10,15}$/.test(phone)) {
            e.preventDefault(); // Stop form submission
            alert("Phone number must be **10 to 15 digits only**.");
            phoneInput.focus();
        }
    });

});
</script>


@include('footer')
@endsection
