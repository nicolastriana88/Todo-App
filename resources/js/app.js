import { createApp } from 'vue';
import App from './App.vue';
import router from './router/index.js';
import axios from 'axios';

axios.defaults.baseURL = 'http://localhost:8000'; // Cambia esto a la URL de tu servidor PHP

createApp(App).use(router).mount('#app');