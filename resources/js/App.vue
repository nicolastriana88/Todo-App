<template>
    <div id="app">
      <router-view></router-view>
    </div>
  </template>
  
  <script>

  export default {
    name: 'App',       // este es el nombre del componente
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