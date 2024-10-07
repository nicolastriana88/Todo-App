<?php

require_once '../src/controllers/LoginController.php';
require_once '../src/models/User.php';

use App\Controllers\LoginController;

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$controller = new LoginController();
$response = $controller->login($data);

echo json_encode($response);