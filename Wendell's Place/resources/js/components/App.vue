<template>
  <div class="app-container">
    <header>
      <div class="container">
        <nav>
          <router-link to="/" class="logo">
            <img src="/images/erasebg-transformed.ico" alt="Wendell's Place Logo" class="logo-icon">
            Wendell's Place
          </router-link>
          <div style="display: flex; align-items: center;">
            <ul class="nav-links">
              <li><router-link to="/">Home</router-link></li>
              <li><router-link to="/products">Products & Services</router-link></li>
              <li><router-link to="/about">About Us</router-link></li>
              <li><router-link to="/contact">Contact</router-link></li>
            </ul>
            <button class="dark-mode-toggle" @click="toggleDarkMode">
              {{ darkMode ? '☀️ Light' : '🌙 Dark' }}
            </button>
          </div>
        </nav>
      </div>
    </header>

    <main>
      <div class="container">
        <router-view></router-view>
      </div>
    </main>

    <footer>
      <div class="container">
        <p>&copy; {{ currentYear }} Wendell's Place. All rights reserved.</p>
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      darkMode: false,
      currentYear: new Date().getFullYear()
    }
  },
  mounted() {
    // Check for saved dark mode preference
    if (localStorage.getItem('darkMode') === 'enabled') {
      this.darkMode = true;
      document.body.classList.add('dark-mode');
    }
  },
  methods: {
    toggleDarkMode() {
      this.darkMode = !this.darkMode;
      document.body.classList.toggle('dark-mode');
      
      if (this.darkMode) {
        localStorage.setItem('darkMode', 'enabled');
      } else {
        localStorage.setItem('darkMode', 'disabled');
      }
    }
  }
}
</script>

<style scoped>
.app-container {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

main {
  flex: 1;
}
</style>
