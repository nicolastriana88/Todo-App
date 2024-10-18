<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/probarcon', function () {
    return response()->json(['message' => 'Conexión exitosa'], 200);
});