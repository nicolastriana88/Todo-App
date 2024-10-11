<template>
    <div id="app">
      <nav>
        
        <router-link class="register-button" to="/register">Registrarse</router-link> 
        <router-link class="login-button" to="/login">Iniciar Sesion</router-link>
        <Tasks></Tasks>
      </nav>
      <router-view></router-view>
    </div>
  </template>
  
  <script>
import Tasks from './views/Tasks.vue';

  export default {
    name: 'App',
  };
  </script>
  
  <style>
  nav {
    text-align: center;
  }
  .register-button {
    margin-right: 10px;
    text-decoration: none;
  }
  .login-button {
    margin-left: 10px;
    text-decoration: none;
  }
  </style>