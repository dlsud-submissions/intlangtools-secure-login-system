<?php

require_once __DIR__ . "/../controllers/session.controller.php";
require_once __DIR__ . "/../controllers/auth.controller.php";
require_once __DIR__ . "/../db/connect.php";

redirectIfAuthenticated();

$error = "";
$success = "";

if (isset($_SESSION["success"])) {

    $success = $_SESSION["success"];

    unset($_SESSION["success"]);

}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $controller = new AuthController($pdo);

    $result = $controller->login(
        $_POST["username"] ?? "",
        $_POST["password"] ?? ""
    );

    if ($result["success"]) {

        header("Location: dashboard.php");
        exit;

    }

    $error = $result["message"];
}
