@extends('layouts.app')

@section('title', 'Contact Us - Wendell\'s Place')

@section('content')
<div class="hero" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
    <h1>Get Your Repair Started</h1>
    <p>Contact us for repairs, parts orders, or general inquiries</p>
</div>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-bottom: 3rem;">
    <section class="card">
        <h2>Request a Repair or Quote</h2>
        <p style="margin-bottom: 2rem;">Tell us about your guitar and what you need done. We'll respond within 24 hours.</p>
        
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
                <input type="text" id="subject" name="subject" required placeholder="e.g., Setup, Pickup Installation, Parts Order">
            </div>
            
            <div class="form-group">
                <label for="message">Message *</label>
                <textarea id="message" name="message" required placeholder="Describe your guitar (make/model) and what needs to be done..."></textarea>
            </div>
            
            <button type="submit" class="btn" style="width: 100%; cursor: pointer; border: none;">Submit Request</button>
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
            <h3>Drop-Off & Pickup</h3>
            <p>Prefer to drop off your guitar in person? Visit us during business hours. No appointment needed for drop-offs!</p>
            <p style="margin-top: 1rem;">For urgent repairs, please call us directly at <strong>+1 (555) 123-4567</strong>.</p>
        </div>
    </section>
</div>

<section class="card">
    <h2 style="text-align: center;">Frequently Asked Questions</h2>
    <div style="margin-top: 2rem; display: grid; gap: 1.5rem;">
        <div>
            <h3 style="color: #2563eb; margin-bottom: 0.5rem;">How long does a typical repair take?</h3>
            <p>Most repairs are completed within 1-2 weeks. Simple setups can often be done same-day or next-day. Rush service is available for urgent needs.</p>
        </div>
        <div>
            <h3 style="color: #2563eb; margin-bottom: 0.5rem;">Do you provide free estimates?</h3>
            <p>Yes! We offer free estimates for all repairs. We'll assess your guitar and provide a detailed quote before starting any work.</p>
        </div>
        <div>
            <h3 style="color: #2563eb; margin-bottom: 0.5rem;">What types of guitars do you work on?</h3>
            <p>We repair all types: electric, acoustic, bass, classical, and vintage instruments. If you have a special case, give us a call to discuss.</p>
        </div>
        <div>
            <h3 style="color: #2563eb; margin-bottom: 0.5rem;">Can you order specific parts for my guitar?</h3>
            <p>Absolutely! We source parts from manufacturers worldwide. Tell us what you need and we'll find it for you.</p>
        </div>
    </div>
</section>

<section style="background: #fff; padding: 3rem; border-radius: 8px; margin-top: 3rem; text-align: center;">
    <h2>Ready to Get Started?</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">
        Let's get your guitar playing at its best.
    </p>
    <a href="{{ route('products') }}" class="btn btn-outline">View Our Services</a>
</section>
@endsection
