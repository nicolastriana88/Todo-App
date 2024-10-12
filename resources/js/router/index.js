// router/index.js
import { createRouter, createWebHistory } from 'vue-router';  // Aquí se importan las funciones createRouter y createWebHistory


import Home from '../views/Home.vue';     // Aquí se importa el componente Home
import Register from '../views/Register.vue';      // Aquí se importa el componente Register
import Login from '../views/Login.vue';       // Aquí se importa el componente Login
import Tasks from '../views/Tasks.vue';         // Aquí se importa el componente Tasks

const routes = [
  { path: '/', component: Home },
  { path: '/register', component: Register },
  { path: '/login', component: Login },
  { path: '/Tasks', name: 'Tasks', component: Tasks },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;