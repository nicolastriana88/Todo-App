<?php

namespace App\Models;

use Users;

class User
{
    public $id;
    public $email;
    public $name;
    public $password;

    public function save()
    {
        $db = static::getDB();
        $stmt = $db->prepare('INSERT INTO users (name, password) VALUES (:name, :password)');
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

    public static function findByemail($email)
    {
        $db = static::getDB();
        $stmt = $db->prepare('SELECT * FROM users WHERE email = email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
        return $stmt->fetch();
    }

    protected static function getDB()
    {
        $dsn = 'mysql:host=localhost;dbname=todo_app;charset=utf8';
        $db = new PDO($dsn, 'postgres', 'admin');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}