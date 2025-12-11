@extends('layouts.app')

@section('title', 'Home - Wendell\'s Place')

@section('content')
<div class="hero">
    <h1>Welcome to Wendell's Place</h1>
    <p>Your trusted partner for quality products and exceptional services</p>
    <div style="margin-top: 2rem;">
        <a href="{{ route('products') }}" class="btn" style="margin-right: 1rem;">Explore Products</a>
        <a href="{{ route('contact') }}" class="btn btn-outline">Get in Touch</a>
    </div>
</div>

<section>
    <h2 style="text-align: center; margin-bottom: 3rem;">Why Choose Us?</h2>
    
    <div class="grid">
        <div class="card">
            <h3>🎯 Quality First</h3>
            <p>We prioritize quality in everything we do, ensuring you receive only the best products and services.</p>
        </div>
        
        <div class="card">
            <h3>💼 Professional Service</h3>
            <p>Our experienced team is dedicated to providing professional and reliable service to meet your needs.</p>
        </div>
        
        <div class="card">
            <h3>🤝 Customer Focused</h3>
            <p>Your satisfaction is our priority. We work closely with you to deliver exactly what you need.</p>
        </div>
        
        <div class="card">
            <h3>⚡ Fast Delivery</h3>
            <p>We understand your time is valuable. Count on us for prompt and efficient service delivery.</p>
        </div>
        
        <div class="card">
            <h3>💰 Competitive Pricing</h3>
            <p>Get the best value for your investment with our competitive pricing and transparent quotes.</p>
        </div>
        
        <div class="card">
            <h3>🔧 Support</h3>
            <p>Our dedicated support team is always ready to assist you with any questions or concerns.</p>
        </div>
    </div>
</section>

<section style="background: #fff; padding: 3rem; border-radius: 8px; margin-top: 3rem; text-align: center;">
    <h2>Ready to Get Started?</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">Discover what Wendell's Place can do for you today.</p>
    <a href="{{ route('contact') }}" class="btn">Contact Us Now</a>
</section>
@endsection
