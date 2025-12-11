@extends('layouts.app')

@section('title', 'About Us - Wendell\'s Place')

@section('content')
<div class="hero" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
    <h1>About Wendell's Place</h1>
    <p>Your trusted partner in excellence since the beginning</p>
</div>

<section class="card">
    <h2>Our Story</h2>
    <p style="font-size: 1.1rem;">
        Wendell's Place was founded with a simple mission: to provide exceptional products and services 
        that make a real difference in our customers' lives. From our humble beginnings to where we are 
        today, we've remained committed to quality, integrity, and customer satisfaction.
    </p>
    <p style="font-size: 1.1rem;">
        Over the years, we've grown into a trusted name in the industry, serving countless satisfied 
        customers and building lasting relationships. Our success is built on a foundation of hard work, 
        dedication, and an unwavering commitment to excellence.
    </p>
</section>

<section>
    <h2 style="text-align: center; margin-bottom: 2rem;">Our Values</h2>
    
    <div class="grid">
        <div class="card">
            <h3>🎯 Excellence</h3>
            <p>We strive for excellence in everything we do, from product development to customer service. Our commitment to quality is unwavering.</p>
        </div>
        
        <div class="card">
            <h3>🤝 Integrity</h3>
            <p>We conduct our business with honesty, transparency, and ethical practices. Your trust is our most valuable asset.</p>
        </div>
        
        <div class="card">
            <h3>💡 Innovation</h3>
            <p>We embrace innovation and continuously seek new ways to improve our products and services to better serve you.</p>
        </div>
        
        <div class="card">
            <h3>🌟 Customer First</h3>
            <p>Your satisfaction drives everything we do. We listen to your needs and work tirelessly to exceed your expectations.</p>
        </div>
        
        <div class="card">
            <h3>🌍 Community</h3>
            <p>We believe in giving back to our community and being a responsible corporate citizen in everything we do.</p>
        </div>
        
        <div class="card">
            <h3>📈 Growth</h3>
            <p>We're committed to continuous improvement and growth, both for our business and for the people we serve.</p>
        </div>
    </div>
</section>

<section class="card" style="margin-top: 3rem;">
    <h2>Our Mission</h2>
    <p style="font-size: 1.2rem; font-weight: 500; color: #2563eb; margin-bottom: 1.5rem;">
        To deliver exceptional products and services that exceed expectations while building lasting relationships based on trust, quality, and mutual success.
    </p>
</section>

<section class="card">
    <h2>Why Work With Us?</h2>
    <div style="display: grid; gap: 1.5rem; margin-top: 1.5rem;">
        <div>
            <h3 style="margin-bottom: 0.5rem;">✨ Proven Track Record</h3>
            <p>Years of experience and countless satisfied customers speak to our reliability and expertise.</p>
        </div>
        <div>
            <h3 style="margin-bottom: 0.5rem;">🔧 Expert Team</h3>
            <p>Our skilled professionals bring knowledge, experience, and dedication to every project.</p>
        </div>
        <div>
            <h3 style="margin-bottom: 0.5rem;">⚡ Fast Response</h3>
            <p>We understand the importance of timely service and are always ready to assist you promptly.</p>
        </div>
        <div>
            <h3 style="margin-bottom: 0.5rem;">💼 Comprehensive Solutions</h3>
            <p>From initial consultation to ongoing support, we provide complete solutions for your needs.</p>
        </div>
    </div>
</section>

<section style="background: #fff; padding: 3rem; border-radius: 8px; margin-top: 3rem; text-align: center;">
    <h2>Let's Work Together</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">
        Ready to experience the Wendell's Place difference? We'd love to hear from you.
    </p>
    <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
</section>
@endsection
