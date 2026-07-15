<?php

require_once __DIR__ . "/../db/connect.php";
require_once __DIR__ . "/../models/user.model.php";

class AuthController
{
    private User $userModel;

    public function __construct(PDO $pdo)
    {
        $this->userModel = new User($pdo);
    }

    public function login(string $username, string $password): array
    {
        $username = htmlspecialchars(trim($username));
        $password = trim($password);

        if ($username === "" || $password === "") {
            return [
                "success" => false,
                "message" => "Username and password are required."
            ];
        }

        if (strlen($username) < 3) {

            return [
                "success" => false,
                "message" => "Username is too short."
            ];

        }

        if (strlen($password) < 8) {

            return [
                "success" => false,
                "message" => "Password is too short."
            ];

        }

        $user = $this->userModel->verifyLogin($username, $password);

        if (!$user) {
            return [
                "success" => false,
                "message" => "Invalid username or password."
            ];
        }

        $_SESSION["user"] = [
            "id" => $user["id"],
            "username" => $user["username"]
        ];

        return [
            "success" => true
        ];
    }

    public function logout(): void
    {
        session_unset();
        session_destroy();
    }
}
