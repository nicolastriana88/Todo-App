<?php

namespace App\Controllers;

use App\Models\User;

class LoginController
{
    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        // Validar los datos
        if (empty($email) || empty($password)) {
            return ['status' => 'error', 'message' => 'Eemail and password are required'];
        }

        // Buscar el usuario en la base de datos
        $email = Users::findByemail($email);

        if ($users && password_verify($password, $users->password)) {
            // Iniciar sesión
            session_start();
            $_SESSION['users_id'] = $users->id;

            return ['status' => 'success', 'message' => 'User logged in successfully'];
        }

        return ['status' => 'error', 'message' => 'Invalid credentials'];
    }
}