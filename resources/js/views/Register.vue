<template>
    <div class="register">
        <h2>Register</h2>
        <form @submit.prevent="register">
            <div>
                <label for="name">name:</label>
                <input type="text" v-model="name" id="name" required />
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" v-model="email" id="email" required />
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" v-model="password" id="password" required />
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      name: '',
      email: '',
      password: '',
    };
  },
  methods: {
    async register() {
      try {
        const response = await axios.post('/api/register', {
          name: this.username,
            email: this.email,
          password: this.password,
        });
        console.log(response.data);
      } catch (error) {
        console.error(error);
      }
    },
  },
};
</script>

<style scoped>
.register {
    max-width: 400px;
    margin: 0 auto;
    padding: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.register h2 {
    text-align: center;
}

.register div {
    margin-bottom: 1em;
}

.register label {
    display: block;
    margin-bottom: 0.5em;
}

.register input {
    width: 100%;
    padding: 0.5em;
    box-sizing: border-box;
}

.register button {
    width: 100%;
    padding: 0.7em;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.register button:hover {
    background-color: #0056b3;
}
</style>