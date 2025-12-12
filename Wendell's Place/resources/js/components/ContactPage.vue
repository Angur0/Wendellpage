<template>
  <div class="contact-page">
    <h1>Contact Us</h1>
    <p class="subtitle">Get in touch for repairs, parts, or any questions</p>

    <div class="contact-grid">
      <div class="contact-form-section">
        <h2>Send Us a Message</h2>
        <form @submit.prevent="handleSubmit" class="contact-form">
          <div class="form-group">
            <label for="name">Name *</label>
            <input 
              type="text" 
              id="name" 
              v-model="form.name" 
              required
              placeholder="Your name"
            >
          </div>

          <div class="form-group">
            <label for="email">Email *</label>
            <input 
              type="email" 
              id="email" 
              v-model="form.email" 
              required
              placeholder="your.email@example.com"
            >
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input 
              type="tel" 
              id="phone" 
              v-model="form.phone"
              placeholder="(555) 123-4567"
            >
          </div>

          <div class="form-group">
            <label for="guitar-type">Guitar Type</label>
            <select id="guitar-type" v-model="form.guitarType">
              <option value="">Select guitar type</option>
              <option value="acoustic">Acoustic</option>
              <option value="electric">Electric</option>
              <option value="bass">Bass</option>
              <option value="classical">Classical</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group">
            <label for="service">Service Needed</label>
            <select id="service" v-model="form.service">
              <option value="">Select a service</option>
              <option value="setup">Setup & Adjustment</option>
              <option value="fretwork">Fret Work</option>
              <option value="electronics">Electronics Repair</option>
              <option value="structural">Structural Repair</option>
              <option value="refinishing">Refinishing</option>
              <option value="modification">Custom Modification</option>
              <option value="parts">Parts Inquiry</option>
              <option value="other">Other</option>
            </select>
          </div>

          <div class="form-group">
            <label for="message">Message *</label>
            <textarea 
              id="message" 
              v-model="form.message" 
              rows="5" 
              required
              placeholder="Tell us about your repair needs or questions..."
            ></textarea>
          </div>

          <button type="submit" class="btn btn-primary" :disabled="isSubmitting">
            {{ isSubmitting ? 'Sending...' : 'Send Message' }}
          </button>

          <div v-if="submitMessage" :class="['submit-message', submitSuccess ? 'success' : 'error']">
            {{ submitMessage }}
          </div>
        </form>
      </div>

      <div class="contact-info-section">
        <div class="card">
          <h3>📍 Location</h3>
          <p>123 Music Street<br>Guitar City, GC 12345</p>
        </div>

        <div class="card">
          <h3>📞 Phone</h3>
          <p>(555) 123-4567</p>
        </div>

        <div class="card">
          <h3>✉️ Email</h3>
          <p>info@wendellsplace.com</p>
        </div>

        <div class="card">
          <h3>🕐 Hours</h3>
          <p>
            Monday - Friday: 9:00 AM - 6:00 PM<br>
            Saturday: 10:00 AM - 4:00 PM<br>
            Sunday: Closed
          </p>
        </div>

        <div class="card faq-section">
          <h3>❓ Quick FAQs</h3>
          <div class="faq-item">
            <strong>How long do repairs take?</strong>
            <p>Most repairs are completed within 1-2 weeks. Rush service available.</p>
          </div>
          <div class="faq-item">
            <strong>Do you offer estimates?</strong>
            <p>Yes! Free estimates for all repair work before we start.</p>
          </div>
          <div class="faq-item">
            <strong>Can you order specific parts?</strong>
            <p>Absolutely! We can source parts from manufacturers worldwide.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ContactPage',
  data() {
    return {
      form: {
        name: '',
        email: '',
        phone: '',
        guitarType: '',
        service: '',
        message: ''
      },
      isSubmitting: false,
      submitMessage: '',
      submitSuccess: false
    }
  },
  methods: {
    async handleSubmit() {
      this.isSubmitting = true;
      this.submitMessage = '';

      try {
        const response = await fetch('/api/contact', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
          },
          body: JSON.stringify(this.form)
        });

        const data = await response.json();

        if (response.ok && data.success) {
          this.submitSuccess = true;
          this.submitMessage = data.message;
          
          // Reset form
          this.form = {
            name: '',
            email: '',
            phone: '',
            guitarType: '',
            service: '',
            message: ''
          };

          // Clear message after 5 seconds
          setTimeout(() => {
            this.submitMessage = '';
          }, 5000);
        } else {
          this.submitSuccess = false;
          this.submitMessage = data.errors ? 'Please check your form fields.' : 'An error occurred. Please try again.';
        }
      } catch (error) {
        this.submitSuccess = false;
        this.submitMessage = 'An error occurred. Please try again.';
      } finally {
        this.isSubmitting = false;
      }
    }
  }
}
</script>

<style scoped>
.contact-page {
  width: 100%;
}

.subtitle {
  text-align: center;
  font-size: 1.2rem;
  color: #666;
  margin-bottom: 3rem;
}

.contact-grid {
  display: grid;
  grid-template-columns: 2fr 1fr;
  gap: 2rem;
  margin-top: 2rem;
}

@media (max-width: 768px) {
  .contact-grid {
    grid-template-columns: 1fr;
  }
}

.contact-form-section {
  background: #f9fafb;
  padding: 2rem;
  border-radius: 8px;
}

.contact-form {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.form-group label {
  font-weight: 500;
  color: #1e293b;
}

.form-group input,
.form-group select,
.form-group textarea {
  padding: 0.75rem;
  border: 1px solid #e2e8f0;
  border-radius: 4px;
  font-size: 1rem;
  font-family: inherit;
  transition: border-color 0.2s;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
  outline: none;
  border-color: #2563eb;
}

.btn-primary {
  background: #2563eb;
  color: white;
  padding: 1rem 2rem;
  border: none;
  border-radius: 4px;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: background 0.2s;
}

.btn-primary:hover:not(:disabled) {
  background: #1d4ed8;
}

.btn-primary:disabled {
  opacity: 0.6;
  cursor: not-allowed;
}

.submit-message {
  padding: 1rem;
  border-radius: 4px;
  text-align: center;
}

.submit-message.success {
  background: #dcfce7;
  color: #166534;
  border: 1px solid #86efac;
}

.submit-message.error {
  background: #fee2e2;
  color: #991b1b;
  border: 1px solid #fca5a5;
}

.contact-info-section {
  display: flex;
  flex-direction: column;
  gap: 1rem;
}

.faq-section {
  margin-top: 1rem;
}

.faq-item {
  margin-bottom: 1rem;
}

.faq-item:last-child {
  margin-bottom: 0;
}

.faq-item strong {
  display: block;
  margin-bottom: 0.25rem;
  color: #1e293b;
}

body.dark-mode .faq-item strong {
  color: #ffffff;
}

.faq-item p {
  margin: 0;
  color: #666;
  font-size: 0.95rem;
  font-style: italic;
}

body.dark-mode .faq-item p {
  color: #ffffff;
}
</style>
