@extends('layouts.app')

@section('title', 'About Us - Wendell\'s Place')

@section('content')
<div class="hero" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
    <h1>About Wendell's Place</h1>
    <p>Expert guitar repair and parts sourcing since the beginning</p>
</div>

<section class="card">
    <h2>Our Story</h2>
    <p style="font-size: 1.1rem;">
        Wendell's Place was founded by a passionate guitarist and luthier with a simple mission: to provide 
        exceptional guitar repair services and source the finest parts for musicians who demand the best. 
        What started as a small workshop has grown into a trusted destination for guitarists of all levels.
    </p>
    <p style="font-size: 1.1rem;">
        Over the years, we've repaired hundreds of guitars, from vintage treasures to modern masterpieces. 
        Our expertise spans acoustic and electric guitars, basses, and more. We treat every instrument with 
        the care and precision it deserves, because we understand the special bond between a musician and their guitar.
    </p>
</section>

<section>
    <h2 style="text-align: center; margin-bottom: 2rem;">Our Values</h2>
    
    <div class="grid">
        <div class="card">
            <h3>🎸 Craftsmanship</h3>
            <p>Every repair is performed with meticulous attention to detail. We treat your guitar as if it were our own prized instrument.</p>
        </div>
        
        <div class="card">
            <h3>🤝 Honesty</h3>
            <p>We provide transparent assessments and fair pricing. You'll always know what needs to be done and why.</p>
        </div>
        
        <div class="card">
            <h3>💡 Expertise</h3>
            <p>Years of experience in guitar repair, electronics, and lutherie ensure your instrument is in capable hands.</p>
        </div>
        
        <div class="card">
            <h3>⭐ Passion</h3>
            <p>We're musicians too. We understand the importance of your instrument and work to exceed your expectations.</p>
        </div>
        
        <div class="card">
            <h3>🎶 Community</h3>
            <p>Supporting local musicians and the music community is at the heart of what we do.</p>
        </div>
        
        <div class="card">
            <h3>📊 Continuous Learning</h3>
            <p>We stay current with the latest techniques and technologies to provide the best service possible.</p>
        </div>
    </div>
</section>

<section class="card" style="margin-top: 3rem;">
    <h2>Our Mission</h2>
    <p style="font-size: 1.2rem; font-weight: 500; color: #2563eb; margin-bottom: 1.5rem;">
        To keep musicians playing by providing expert guitar repair services and sourcing the finest parts, 
        all while maintaining the highest standards of craftsmanship and customer care.
    </p>
</section>

<section class="card">
    <h2>Why Choose Us?</h2>
    <div style="display: grid; gap: 1.5rem; margin-top: 1.5rem;">
        <div>
            <h3 style="margin-bottom: 0.5rem;">✨ Experienced Luthier</h3>
            <p>Years of hands-on experience repairing all types of guitars, from vintage classics to modern instruments.</p>
        </div>
        <div>
            <h3 style="margin-bottom: 0.5rem;">🔧 Full-Service Shop</h3>
            <p>From simple setups to complex repairs, we handle everything in-house with professional tools and equipment.</p>
        </div>
        <div>
            <h3 style="margin-bottom: 0.5rem;">⚡ Quality Parts Network</h3>
            <p>Access to premium parts from top manufacturers worldwide. If we don't have it, we can source it.</p>
        </div>
        <div>
            <h3 style="margin-bottom: 0.5rem;">💼 Fair & Transparent</h3>
            <p>Detailed estimates before work begins, honest assessments, and no surprise charges.</p>
        </div>
    </div>
</section>

<section style="background: #fff; padding: 3rem; border-radius: 8px; margin-top: 3rem; text-align: center;">
    <h2>Bring Your Guitar Back to Life</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">
        Ready to get your guitar playing like it should? We'd love to help.
    </p>
    <a href="{{ route('contact') }}" class="btn">Schedule a Repair</a>
</section>
@endsection
