<?php

require_once __DIR__ . "/../controllers/session.controller.php";
require_once __DIR__ . "/../controllers/register.controller.php";
require_once __DIR__ . "/../db/connect.php";

redirectIfAuthenticated();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $controller = new RegisterController($pdo);

    $result = $controller->register(
        $_POST["username"] ?? "",
        $_POST["password"] ?? "",
        $_POST["confirm_password"] ?? ""
    );

    if ($result["success"]) {

        $_SESSION["success"] =
        "Registration successful. Please log in.";

        header("Location: login.php");
        exit;

    }

    $error = $result["message"];
}
