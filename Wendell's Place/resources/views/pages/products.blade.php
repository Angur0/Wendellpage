@extends('layouts.app')

@section('title', 'Products & Services - Wendell\'s Place')

@section('content')
<div class="hero" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
    <h1>Products & Services</h1>
    <p>Discover our comprehensive range of offerings tailored to your needs</p>
</div>

<section>
    <h2>Our Products</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">We offer a wide selection of high-quality products designed to meet your requirements.</p>
    
    <div class="grid">
        <div class="card">
            <h3>Premium Product Line</h3>
            <p>Our flagship products featuring cutting-edge technology and superior craftsmanship.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>High-quality materials</li>
                <li>Innovative design</li>
                <li>Long-lasting durability</li>
            </ul>
            <div style="margin-top: 1.5rem;">
                <a href="{{ route('contact') }}" class="btn">Learn More</a>
            </div>
        </div>
        
        <div class="card">
            <h3>Standard Solutions</h3>
            <p>Reliable and cost-effective products perfect for everyday needs.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Affordable pricing</li>
                <li>Proven reliability</li>
                <li>Easy to use</li>
            </ul>
            <div style="margin-top: 1.5rem;">
                <a href="{{ route('contact') }}" class="btn">Learn More</a>
            </div>
        </div>
        
        <div class="card">
            <h3>Custom Products</h3>
            <p>Tailored solutions designed specifically for your unique requirements.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Customizable options</li>
                <li>Personalized service</li>
                <li>Flexible configurations</li>
            </ul>
            <div style="margin-top: 1.5rem;">
                <a href="{{ route('contact') }}" class="btn">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section style="margin-top: 4rem;">
    <h2>Our Services</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">Professional services delivered by our experienced team.</p>
    
    <div class="grid">
        <div class="card">
            <h3>🔧 Consulting</h3>
            <p>Expert guidance to help you make informed decisions and achieve your goals.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Strategic planning</li>
                <li>Technical expertise</li>
                <li>Implementation support</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>🛠️ Installation & Setup</h3>
            <p>Professional installation services ensuring optimal performance from day one.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>On-site installation</li>
                <li>Configuration</li>
                <li>Training provided</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>🔍 Maintenance & Support</h3>
            <p>Ongoing support to keep your systems running smoothly and efficiently.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Regular maintenance</li>
                <li>Technical support</li>
                <li>Emergency assistance</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>📊 Analysis & Optimization</h3>
            <p>Data-driven insights to improve performance and maximize efficiency.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Performance analysis</li>
                <li>Optimization strategies</li>
                <li>Detailed reporting</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>🎓 Training Programs</h3>
            <p>Comprehensive training to help your team get the most from our solutions.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Customized training</li>
                <li>Hands-on workshops</li>
                <li>Ongoing education</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>🚀 Project Management</h3>
            <p>End-to-end project management ensuring successful delivery every time.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Timeline management</li>
                <li>Resource allocation</li>
                <li>Quality assurance</li>
            </ul>
        </div>
    </div>
</section>

<section style="background: #fff; padding: 3rem; border-radius: 8px; margin-top: 3rem; text-align: center;">
    <h2>Need a Custom Solution?</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">We're here to create the perfect solution for your specific needs.</p>
    <a href="{{ route('contact') }}" class="btn">Request a Quote</a>
</section>
@endsection
