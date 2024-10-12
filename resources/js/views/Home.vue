<template>
    <div>
      <h1>Bienvenido a la aplicación de tareas Todo App.</h1>
      <p v-if="!isAuthenticated">
        por favor inicia sesión o regístrate para continuar.
      </p>
      <router-link v-if="!isAuthenticated" to="/login">
        <button class="login-button">Iniciar sesión</button>
      </router-link>
      <router-link v-if="!isAuthenticated" to="/register">
        <button class="register-button">Registrarse</button>
      </router-link>
      <p v-else>
        ¡Bienvenido! {{ User.name }} Has iniciado sesión correctamente. <button @click="logout">Cerrar sesión</button>
      </p>
    </div>
  </template>
  
  <script>
import { mapGetters, mapActions } from 'vuex';

export default {
  name: 'Home',
  computed: {
    ...mapGetters(['isAuthenticated', 'user'])
  },
  methods: {
    ...mapActions(['logout'])
  }
}
  </script>

<style>
h1, p {
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