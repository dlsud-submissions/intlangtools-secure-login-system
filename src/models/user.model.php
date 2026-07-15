<?php

require_once __DIR__ . "/../db/connect.php";

class User
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findByUsername(string $username)
    {
        $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute([
            ":username" => $username
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function verifyLogin(string $username, string $password)
    {
        $user = $this->findByUsername($username);

        if (!$user) {
            return false;
        }

        if ($user["password"] !== md5($password)) {
            return false;
        }

        return $user;
    }
}
