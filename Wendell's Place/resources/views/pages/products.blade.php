@extends('layouts.app')

@section('title', 'Products & Services - Wendell\'s Place')

@section('content')
<div class="hero" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
    <h1>Repair Services & Parts</h1>
    <p>Professional guitar repair and premium parts sourcing</p>
</div>

<section>
    <h2>Guitar Parts</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">Premium guitar parts sourced from the best manufacturers worldwide.</p>
    
    <div class="grid">
        <div class="card">
            <h3>🎸 Electronics</h3>
            <p>High-quality pickups, pots, switches, and wiring components for any guitar.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Single coil & humbucker pickups</li>
                <li>Potentiometers & capacitors</li>
                <li>Pre-wired harnesses</li>
            </ul>
            <div style="margin-top: 1.5rem;">
                <a href="{{ route('contact') }}" class="btn">Order Parts</a>
            </div>
        </div>
        
        <div class="card">
            <h3>🔩 Hardware</h3>
            <p>Bridges, tuners, tailpieces, and all the hardware you need.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Tremolo & fixed bridges</li>
                <li>Locking & vintage tuners</li>
                <li>Nuts, saddles, & string trees</li>
            </ul>
            <div style="margin-top: 1.5rem;">
                <a href="{{ route('contact') }}" class="btn">Order Parts</a>
            </div>
        </div>
        
        <div class="card">
            <h3>🪵 Woods & Bodies</h3>
            <p>Premium tonewoods, necks, and bodies for custom builds and replacements.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Solid body blanks</li>
                <li>Maple & rosewood necks</li>
                <li>Exotic wood options</li>
            </ul>
            <div style="margin-top: 1.5rem;">
                <a href="{{ route('contact') }}" class="btn">Order Parts</a>
            </div>
        </div>
    </div>
</section>

<section style="margin-top: 4rem;">
    <h2>Repair Services</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">Expert repair and restoration services for all types of guitars.</p>
    
    <div class="grid">
        <div class="card">
            <h3>🔧 Setup & Adjustment</h3>
            <p>Professional setup to optimize playability and tone.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Truss rod adjustment</li>
                <li>Action & intonation setup</li>
                <li>Fret dressing</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>🎸 Electronics Repair</h3>
            <p>Fix wiring issues, replace pickups, and upgrade electronics.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Pickup replacement</li>
                <li>Rewiring & shielding</li>
                <li>Switch & pot repair</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>🪵 Structural Repairs</h3>
            <p>Expert repairs for cracks, breaks, and structural damage.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Crack repair & binding</li>
                <li>Neck reset</li>
                <li>Headstock repair</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>🎨 Refinishing</h3>
            <p>Restore or customize your guitar's finish to like-new condition.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Complete refinishing</li>
                <li>Touch-up work</li>
                <li>Custom colors & finishes</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>🔩 Hardware Installation</h3>
            <p>Professional installation of new hardware and upgrades.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Bridge installation</li>
                <li>Tuner replacement</li>
                <li>Nut & saddle work</li>
            </ul>
        </div>
        
        <div class="card">
            <h3>⚡ Custom Modifications</h3>
            <p>Personalize your guitar with custom mods and upgrades.</p>
            <ul style="margin-left: 1.5rem; margin-top: 1rem;">
                <li>Pickup routing</li>
                <li>Coil splitting</li>
                <li>Custom wiring</li>
            </ul>
        </div>
    </div>
</section>

<section style="background: #fff; padding: 3rem; border-radius: 8px; margin-top: 3rem; text-align: center;">
    <h2>Need a Repair Estimate?</h2>
    <p style="font-size: 1.1rem; margin-bottom: 2rem;">Get a free quote for your guitar repair or parts order.</p>
    <a href="{{ route('contact') }}" class="btn">Request a Quote</a>
</section>
@endsection
