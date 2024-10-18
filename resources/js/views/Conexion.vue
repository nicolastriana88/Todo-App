<template>
        <div>
    <h1>Verificar Conexión</h1>
    <button @click="verificar">Verificar Conexión</button>
    <p v-if="message">{{ message }}</p>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      message: ''
    };
  },
  methods: {
    async verificar() {
      try {
        const response = await axios.get('http://localhost:8000/api/register');
        this.message = response.data.message;
      } catch (error) {
        console.error('Error durante la conexión:', error);
        this.message = 'Error durante la conexión';
      }
    }
  }
};
</script>