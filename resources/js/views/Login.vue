<template>
    <div class="login-container">
        <h2>Inicio sesion</h2>
        <form @submit.prevent="handleLogin">
            <div class="form-group">
                <label for="email">Correo electronico</label>
                <input type="email" v-model="email" id="email" required />
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" v-model="password" id="password" required />
            </div>
            <button type="submit">Iniciar sesion</button>
            <p>¿No tienes una cuenta? <router-link to="/register">Registrate.</router-link></p>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default{
    data(){
        return{
            email: '',
            password: ''
        };
    },
    methods:{
        async handleLogin(){
            try{
                const response = await axios.post('/api/login', {
                    email: this.email,
                    password: this.password
                });
                console.log(response.data);
            }catch(error){
                console.error(error);
            }
        }
    }
}
</script>

<style scoped>
.login-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>