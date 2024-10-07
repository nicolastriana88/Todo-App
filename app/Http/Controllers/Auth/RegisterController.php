<?php

namespace App\Controllers;

use App\Models\User;

class RegisterController
{
    public function register($data)
    {
        $username = $data['name'];
        $email = $data['email'];
        $password = $data['password'];

        // Validar los datos
        if (empty($name) || empty($password) || empty($email)) {
            return ['status' => 'error', 'message' => 'Username and password are required'];
        }

        // Crear un nuevo usuario
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = password_hash($password, PASSWORD_BCRYPT);
        $user->save();

        return ['status' => 'success', 'message' => 'User registered successfully'];
    }
}