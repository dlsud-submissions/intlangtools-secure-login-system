<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function requireLogin(): void
{
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit;
    }
}

function redirectIfAuthenticated(): void
{
    if (isset($_SESSION["user"])) {
        header("Location: dashboard.php");
        exit;
    }
}
