@extends('layouts.app')

@section('title', 'Contact Us - Wendell\'s Place')

@section('content')
<div class="hero" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you. Get in touch with us today!</p>
</div>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-bottom: 3rem;">
    <section class="card">
        <h2>Send Us a Message</h2>
        <p style="margin-bottom: 2rem;">Fill out the form below and we'll get back to you as soon as possible.</p>
        
        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" required placeholder="John Doe">
            </div>
            
            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required placeholder="john@example.com">
            </div>
            
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+1 (555) 123-4567">
            </div>
            
            <div class="form-group">
                <label for="subject">Subject *</label>
                <input type="text" id="subject" name="subject" required placeholder="How can we help?">
            </div>
            
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" required placeholder="Tell us more about your inquiry..."></textarea>
            </div>
            
            <button type="submit" class="btn" style="width: 100%; cursor: pointer; border: none;">Send Message</button>
        </form>
    </section>
    
    <section>
        <div class="card">
            <h2>Contact Information</h2>
            <p>Reach out to us through any of the following channels:</p>
            
            <div style="margin-top: 2rem;">
                <div style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">📍 Address</h3>
                    <p style="color: #666;">123 Main Street<br>Suite 100<br>City, State 12345</p>
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">📞 Phone</h3>
                    <p style="color: #666;">+1 (555) 123-4567</p>
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">✉️ Email</h3>
                    <p style="color: #666;">info@wendellsplace.com</p>
                </div>
                
                <div style="margin-bottom: 1.5rem;">
                    <h3 style="font-size: 1rem; margin-bottom: 0.5rem;">🕒 Business Hours</h3>
                    <p style="color: #666;">
                        Monday - Friday: 9:00 AM - 6:00 PM<br>
                        Saturday: 10:00 AM - 4:00 PM<br>
                        Sunday: Closed
                    </p>
                </div>
            </div>
        </div>
        
        <div class="card" style="margin-top: 2rem;">
            <h3>Quick Response</h3>
            <p>We typically respond to all inquiries within 24 hours during business days.</p>
            <p style="margin-top: 1rem;">For urgent matters, please call us directly at <strong>+1 (555) 123-4567</strong>.</p>
        </div>
    </section>
</div>

<section class="card">
    <h2 style="text-align: center;">Frequently Asked Questions</h2>
    <div style="margin-top: 2rem; display: grid; gap: 1.5rem;">
        <div>
            <h3 style="color: #2563eb; margin-bottom: 0.5rem;">How quickly can you respond to my inquiry?</h3>
            <p>We aim to respond to all inquiries within 24 hours during business days. Urgent matters are prioritized and handled as quickly as possible.</p>
        </div>
        <div>
            <h3 style="color: #2563eb; margin-bottom: 0.5rem;">Do you offer consultations?</h3>
            <p>Yes! We offer free initial consultations to discuss your needs and how we can help. Contact us to schedule your consultation.</p>
        </div>
        <div>
            <h3 style="color: #2563eb; margin-bottom: 0.5rem;">What areas do you serve?</h3>
            <p>We serve clients locally and remotely. Contact us to discuss your specific location and service needs.</p>
        </div>
        <div>
            <h3 style="color: #2563eb; margin-bottom: 0.5rem;">Can I visit your office?</h3>
            <p>Absolutely! We welcome visitors. Please call ahead to schedule an appointment to ensure someone is available to assist you.</p>
        </div>
    </div>
</section>

<section style="background: #fff; padding: 3rem; border-radius: 8px; margin-top: 3rem; text-align: center;">
    <h2>Ready to Start?</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">
        Let's discuss how Wendell's Place can help you achieve your goals.
    </p>
    <a href="{{ route('products') }}" class="btn btn-outline">View Our Services</a>
</section>
@endsection
