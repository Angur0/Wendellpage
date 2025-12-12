import './bootstrap';
import { createApp } from 'vue';
import router from './router';
import App from './components/App.vue';

// Create and mount Vue app
const app = createApp(App);
app.use(router);
app.mount('#app');

