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

        <div class="card social-media-card">
          <h3>Follow Us</h3>
          <div class="social-icons">
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </a>
            <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
              </svg>
            </a>
            <a href="https://x.com" target="_blank" rel="noopener noreferrer" aria-label="X (Twitter)">
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
              </svg>
            </a>
          </div>
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
  color: #444;
  margin-bottom: 3rem;
}

body.dark-mode .subtitle {
  color: #e5e5e5;
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
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

.social-media-card .social-icons {
  display: flex;
  justify-content: center;
  gap: 1.5rem;
  margin-top: 1rem;
}

.social-media-card .social-icons a {
  color: #1e293b;
  display: flex;
  align-items: center;
  transition: color 0.3s, transform 0.2s;
}

body.dark-mode .social-media-card .social-icons a {
  color: #e5e5e5;
}

.social-media-card .social-icons a:hover {
  color: #dc2626;
  transform: scale(1.15);
}
</style>
