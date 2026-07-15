<?php

require_once __DIR__ . "/src/controllers/auth.controller.php";
require_once __DIR__ . "/src/controllers/session.controller.php";
require_once __DIR__ . "/src/db/connect.php";

$controller = new AuthController($pdo);

$controller->logout();

header("Location: login.php");
exit;
