<template>
  <div class="about-page">
    <h1>About Wendell's Place</h1>
    <p class="subtitle">Your Trusted Partner in Guitar Care</p>

    <section class="story-section">
      <h2>Our Story</h2>
      <p>
        Founded with a passion for guitars and a commitment to quality craftsmanship, Wendell's Place has been serving musicians 
        for over a decade. What started as a small repair shop has grown into a full-service guitar repair and parts sourcing 
        operation, trusted by musicians across the region.
      </p>
      <p>
        Our expertise spans all types of guitars—from vintage acoustic instruments to modern electric models. We understand 
        that your guitar is more than just an instrument; it's an extension of your musical voice. That's why we treat every 
        repair with the care and attention it deserves.
      </p>
    </section>

    <section>
      <h2>Our Values</h2>
      <div class="grid">
        <div class="card">
          <h3>Quality Craftsmanship</h3>
          <p>Every repair is performed with meticulous attention to detail and years of experience.</p>
        </div>
        
        <div class="card">
          <h3>Honest Service</h3>
          <p>We provide transparent pricing and honest assessments. You'll always know what you're paying for.</p>
        </div>
        
        <div class="card">
          <h3>Customer First</h3>
          <p>Your satisfaction is our priority. We work closely with you to ensure the best results.</p>
        </div>
        
        <div class="card">
          <h3>Continuous Learning</h3>
          <p>We stay updated with the latest techniques and technologies in guitar repair and modification.</p>
        </div>
      </div>
    </section>

    <section class="mission-section">
      <h2>Our Mission</h2>
      <p>
        To provide exceptional guitar repair and parts sourcing services that help musicians achieve their best sound. 
        We believe that a well-maintained instrument inspires creativity and enhances performance. Our mission is to keep 
        your guitar in optimal condition so you can focus on making music.
      </p>
    </section>

    <section>
      <h2>Why Choose Us?</h2>
      <div class="features-list">
        <div class="feature-item">
          <span class="feature-icon">✓</span>
          <div>
            <h4>Experienced Technicians</h4>
            <p>Over 10 years of combined experience in guitar repair and restoration</p>
          </div>
        </div>
        
        <div class="feature-item">
          <span class="feature-icon">✓</span>
          <div>
            <h4>Quality Parts</h4>
            <p>We source only the best parts from reputable manufacturers worldwide</p>
          </div>
        </div>
        
        <div class="feature-item">
          <span class="feature-icon">✓</span>
          <div>
            <h4>Fair Pricing</h4>
            <p>Competitive rates with no hidden fees or surprise charges</p>
          </div>
        </div>
        
        <div class="feature-item">
          <span class="feature-icon">✓</span>
          <div>
            <h4>Quick Turnaround</h4>
            <p>Most repairs completed within 1-2 weeks, with rush service available</p>
          </div>
        </div>
      </div>
    </section>

    <section class="cta-section">
      <h2>Ready to Get Started?</h2>
      <p>Let's discuss how we can help with your guitar repair or parts needs.</p>
      <router-link to="/contact" class="btn">Contact Us</router-link>
    </section>
  </div>
</template>

<script>
export default {
  name: 'AboutPage'
}
</script>

<style scoped>
.about-page {
  width: 100%;
}

.subtitle {
  text-align: center;
  font-size: 1.2rem;
  color: #666;
  margin-bottom: 3rem;
}

.story-section {
  background: #f9fafb;
  padding: 2rem;
  border-radius: 8px;
  margin-bottom: 3rem;
}

.story-section p {
  margin-bottom: 1rem;
  line-height: 1.8;
}

.mission-section {
  background: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 3rem;
  border-radius: 8px;
  margin: 3rem 0;
  text-align: center;
}

.mission-section h2 {
  color: white;
  margin-bottom: 1.5rem;
}

.mission-section p {
  font-size: 1.1rem;
  line-height: 1.8;
}

.features-list {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.feature-item {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  padding: 1.5rem;
  background: rgba(249, 250, 251, 0.7);
  border-radius: 8px;
}

.feature-icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 2rem;
  height: 2rem;
  background: #dc2626;
  color: white;
  border-radius: 50%;
  flex-shrink: 0;
  font-weight: bold;
}

.feature-item h4 {
  margin: 0 0 0.5rem 0;
  color: #1e293b;
}

.feature-item p {
  margin: 0;
  color: #666;
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
