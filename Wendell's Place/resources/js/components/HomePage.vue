<template>
  <div class="home-page">
    <div class="hero">
      <h1>Welcome to Wendell's Place</h1>
      <p>Expert Guitar Repair & Premium Parts Sourcing</p>
      <div style="margin-top: 2rem;">
        <router-link to="/products" class="btn" style="margin-right: 1rem;">View Services</router-link>
        <router-link to="/contact" class="btn btn-outline">Get in Touch</router-link>
      </div>
    </div>

    <section>
      <h2 style="text-align: center; margin-bottom: 3rem;">Why Choose Us?</h2>
      
      <div class="grid">
        <div class="card">
          <h3>🎸 Expert Repairs</h3>
          <p>Professional guitar repair services with years of experience in restoring instruments to peak performance.</p>
        </div>
        
        <div class="card">
          <h3>🔧 Quality Parts</h3>
          <p>We source only the finest guitar parts and components from trusted suppliers worldwide.</p>
        </div>
        
        <div class="card">
          <h3>⚡ Fast Turnaround</h3>
          <p>Most repairs completed within 1-2 weeks. Rush services available for urgent needs.</p>
        </div>
        
        <div class="card">
          <h3>💰 Fair Pricing</h3>
          <p>Transparent pricing with detailed estimates before any work begins. No hidden fees.</p>
        </div>
        
        <div class="card">
          <h3>🎯 Custom Work</h3>
          <p>From setups to complete rebuilds, we handle custom modifications and upgrades.</p>
        </div>
        
        <div class="card">
          <h3>🤝 Trusted Service</h3>
          <p>Your instrument is in safe hands. We treat every guitar like it's our own.</p>
        </div>
      </div>
    </section>

    <section class="card">
      <GuitarQuoteCalculator />
    </section>

    <section class="cta-section">
      <h2>Ready to Restore Your Guitar?</h2>
      <p class="cta-text">Get your instrument back in perfect playing condition.</p>
      <router-link to="/contact" class="btn">Book a Repair</router-link>
    </section>
  </div>
</template>

<script>
import GuitarQuoteCalculator from './GuitarQuoteCalculator.vue';

export default {
  name: 'HomePage',
  components: {
    GuitarQuoteCalculator
  }
}
</script>

<style scoped>
.home-page {
  width: 100%;
}

.cta-section {
  background: #fff;
  padding: 3rem;
  border-radius: 8px;
  margin-top: 3rem;
  text-align: center;
}

.cta-text {
  font-size: 1.1rem;
  margin-bottom: 2rem;
}
</style>
