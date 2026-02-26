<!-- @extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <h2 class="section-heading">Get in Touch</h2>
    <p style="text-align: center; max-width: 800px; margin: 0 auto 3rem; color: #666; font-size: 1.1rem;">
        We'd love to hear from you! Whether you have questions about our services, want to schedule a consultation, or simply need guidance, our team is here to help.
    </p>

    <div class="contact-info">
        <div class="info-card">
            <div style="font-size: 2.5rem; color: #9370db; margin-bottom: 1rem;">📍</div>
            <h3>Visit Us</h3>
            <p>123 Therapy Lane<br>Care City, CC 12345</p>
        </div>

        <div class="info-card">
            <div style="font-size: 2.5rem; color: #9370db; margin-bottom: 1rem;">📞</div>
            <h3>Call Us</h3>
            <p>Phone: (555) 123-4567<br>Fax: (555) 123-4568</p>
        </div>

        <div class="info-card">
            <div style="font-size: 2.5rem; color: #9370db; margin-bottom: 1rem;">✉️</div>
            <h3>Email Us</h3>
            <p>info@clouscape.com<br>support@clouscape.com</p>
        </div>

        <div class="info-card">
            <div style="font-size: 2.5rem; color: #9370db; margin-bottom: 1rem;">🕐</div>
            <h3>Office Hours</h3>
            <p>Mon-Fri: 8:00 AM - 6:00 PM<br>Sat: 9:00 AM - 2:00 PM</p>
        </div>
    </div>

    <div class="contact-form">
        <h3 style="color: #4b0082; margin-bottom: 2rem; text-align: center;">Send Us a Message</h3>
        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="parent_name">Parent/Guardian Name *</label>
                <input type="text" id="parent_name" name="parent_name" required>
            </div>

            <div class="form-group">
                <label for="baby_name">Baby's Name *</label>
                <input type="text" id="baby_name" name="baby_name" required>
            </div>

            <div class="form-group">
                <label for="baby_age">Baby's Age *</label>
                <input type="text" id="baby_age" name="baby_age" placeholder="e.g., 6 months" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number *</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="service">Service Interested In *</label>
                <select id="service" name="service" required>
                    <option value="">Select a service...</option>
                    <option value="speech">Speech & Language Therapy</option>
                    <option value="occupational">Occupational Therapy</option>
                    <option value="physiotherapy">Physiotherapy</option>
                    <option value="behaviour">Behaviour Therapy</option>
                    <option value="multiple">Multiple Services</option>
                    <option value="consultation">Initial Consultation</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Tell Us About Your Concerns *</label>
                <textarea id="message" name="message" required placeholder="Please describe any developmental concerns or questions you have..."></textarea>
            </div>

            <div class="form-group">
                <label for="preferred_contact">Preferred Contact Method</label>
                <select id="preferred_contact" name="preferred_contact">
                    <option value="phone">Phone</option>
                    <option value="email">Email</option>
                    <option value="either">Either</option>
                </select>
            </div>

            <button type="submit" class="submit-button">Submit Inquiry</button>
        </form>
    </div>

    <section class="about-content" style="margin-top: 3rem;">
        <h3>What Happens Next?</h3>
        <p>After you submit your inquiry, a member of our team will reach out to you within 24 hours (during business days) to discuss your needs and schedule an initial consultation. During this consultation, we'll:</p>
        <ul class="features-list">
            <li>Discuss your baby's developmental history and current concerns</li>
            <li>Explain our services and how they can benefit your baby</li>
            <li>Answer any questions you may have about our approach</li>
            <li>Develop a personalized care plan if you decide to move forward</li>
        </ul>
        <p>We look forward to partnering with you on your baby's developmental journey!</p>
    </section>
</div>
@endsection -->