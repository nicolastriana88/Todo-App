// router/index.js
import { createRouter, createWebHistory } from 'vue-router';

import Register from '../views/Register.vue';
import Login from '../views/Login.vue';
import Home from '../views/Home.vue';
import Tasks from '../views/Tasks.vue';

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