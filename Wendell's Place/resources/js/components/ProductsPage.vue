<template>
  <div class="products-page">
    <h1>Guitar Parts & Repair Services</h1>
    <p class="subtitle">Everything you need to keep your instrument in perfect condition</p>

    <section>
      <h2>Guitar Parts</h2>
      <div class="grid">
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Electronics</h3>
          <ul>
            <li>Pickups (Single-coil, Humbucker)</li>
            <li>Potentiometers & Capacitors</li>
            <li>Switches & Jacks</li>
            <li>Complete Wiring Harnesses</li>
          </ul>
        </div>
        
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Hardware</h3>
          <ul>
            <li>Bridges & Tailpieces</li>
            <li>Tuning Machines</li>
            <li>Nuts & Saddles</li>
            <li>Truss Rods</li>
          </ul>
        </div>
        
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Woods & Materials</h3>
          <ul>
            <li>Neck Blanks</li>
            <li>Body Wood</li>
            <li>Fretboard Materials</li>
            <li>Binding & Inlays</li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <h2>Repair Services</h2>
      <div class="grid">
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Setup & Adjustment</h3>
          <p>Professional setup including action adjustment, intonation, and truss rod adjustment.</p>
          <p class="price">Starting at ₱4,200</p>
        </div>
        
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Fret Work</h3>
          <p>Fret leveling, crowning, polishing, and complete refrets for optimal playability.</p>
          <p class="price">Starting at ₱11,200</p>
        </div>
        
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Electronics Repair</h3>
          <p>Troubleshooting and repair of all electronic components, pickups, and wiring.</p>
          <p class="price">Starting at ₱2,800</p>
        </div>
        
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Structural Repairs</h3>
          <p>Crack repairs, neck resets, and headstock repairs with expert craftsmanship.</p>
          <p class="price">Starting at ₱8,400</p>
        </div>
        
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Refinishing</h3>
          <p>Complete or partial refinishing services with nitrocellulose or polyurethane.</p>
          <p class="price">Custom Quote</p>
        </div>
        
        <div class="card">
          <div class="card-image">✓</div>
          <h3>Custom Modifications</h3>
          <p>Pickup changes, hardware upgrades, and custom modifications to suit your needs.</p>
          <p class="price">Starting at ₱5,600</p>
        </div>
      </div>
    </section>

    <section class="cta-section">
      <h2>Need a Custom Quote?</h2>
      <p>Contact us today to discuss your specific repair or parts needs.</p>
      <router-link to="/contact" class="btn">Get in Touch</router-link>
    </section>
  </div>
</template>

<script>
export default {
  name: 'ProductsPage'
}
</script>

<style scoped>
.products-page {
  width: 100%;
}

.subtitle {
  text-align: center;
  font-size: 1.2rem;
  color: #444;
  margin-bottom: 3rem;
}

body.dark-mode .subtitle {
  color: #e5e5e5;
}

.card-image {
  width: 50px;
  height: 50px;
  background: #dc2626;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 1.5rem;
  font-weight: bold;
  margin: 0 auto 1rem;
}

.price {
  font-weight: bold;
  color: #dc2626;
  margin-top: 1rem;
  font-size: 1.1rem;
}

.cta-section {
  text-align: center;
  background: #f9fafb;
  padding: 3rem;
  border-radius: 8px;
  margin-top: 3rem;
}

.cta-section h2 {
  margin-bottom: 1rem;
}

.cta-section p {
  margin-bottom: 2rem;
  font-size: 1.1rem;
}
</style>
