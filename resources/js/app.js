import { createApp } from 'vue'; // Aquí se importa la función createApp
import App from './App.vue'; // Aquí se importa el componente principal de Vue
import router from './router/index.js'; // Aquí se importa el enrutador
import store from './store/index.js'; // Aquí se importa el almacenamiento de estado vuex
import axios from 'axios'; // Aquí se importa axios

axios.defaults.baseURL = 'http://localhost:8000'; // Cambia esto a la URL de tu servidor PHP

createApp(App) // Aquí se crea la aplicación de Vue
  .use(router)
  .use(store)  // Aquí se instala el enrutador
  .mount('#app');            // Aquí se monta la aplicación en el elemento con el ID 'app'