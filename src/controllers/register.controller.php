<?php

require_once __DIR__ . "/../db/connect.php";
require_once __DIR__ . "/../models/user.model.php";

class RegisterController
{
    private User $userModel;

    public function __construct(PDO $pdo)
    {
        $this->userModel = new User($pdo);
    }

    public function register(
        string $username,
        string $password,
        string $confirmPassword
    ): array {

        $username = htmlspecialchars(trim($username));
        $password = trim($password);
        $confirmPassword = trim($confirmPassword);

        if (
            $username === "" ||
            $password === "" ||
            $confirmPassword === ""
        ) {

            return [
                "success" => false,
                "message" => "All fields are required."
            ];

        }

        if (strlen($username) < 3) {

            return [
                "success" => false,
                "message" => "Username must be at least 3 characters."
            ];

        }

        if (strlen($password) < 8) {

            return [
                "success" => false,
                "message" => "Password must be at least 8 characters."
            ];

        }

        if ($password !== $confirmPassword) {

            return [
                "success" => false,
                "message" => "Passwords do not match."
            ];

        }

        if ($this->userModel->usernameExists($username)) {

            return [
                "success" => false,
                "message" => "Username already exists."
            ];

        }

        $this->userModel->createUser(
            $username,
            $password
        );

        return [
            "success" => true,
            "message" => "Registration successful. You may now log in."
        ];
    }
}
