<template>
    <div id="app">
      <nav>
        <router-link class="register-button" to="/register">Registrarse</router-link> 
        <router-link class="login-button" to="/login">Iniciar Sesion</router-link>
      </nav>
      <router-view></router-view>
    </div>
  </template>
  
  <script>
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