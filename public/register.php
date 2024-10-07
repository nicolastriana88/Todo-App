<?php

require_once '../src/controllers/RegisterController.php';
require_once '../src/models/User.php';

use App\Controllers\RegisterController;

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$controller = new RegisterController();
$response = $controller->register($data);

echo json_encode($response);