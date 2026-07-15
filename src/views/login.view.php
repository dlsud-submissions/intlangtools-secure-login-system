<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= APP_NAME ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="src/views/assets/css/style.css">
</head>

<body>

    <div class="login-container">

        <div class="login-card">

            <h1><?= APP_NAME ?></h1>

            <p class="subtitle">
                Please sign in to continue.
            </p>

            <?php if (!empty($error)): ?>

                <div class="alert">
                    <?= htmlspecialchars($error) ?>
                </div>

            <?php endif; ?>

            <form
                id="loginForm"
                action=""
                method="POST"
                novalidate
            >

                <div class="form-group">

                    <label for="username">
                        Username
                    </label>

                    <input
                        type="text"
                        minlength="3"
                        maxlength="50"
                        id="username"
                        name="username"
                        placeholder="Enter your username"
                        autocomplete="username"
                        required
                    >

                    <small class="error" id="usernameError"></small>

                </div>

                <div class="form-group">

                    <label for="password">
                        Password
                    </label>

                    <div class="password-group">

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        minlength="8"
                        maxlength="255"
                        required
                    >

                        <button
                            type="button"
                            id="togglePassword"
                            class="toggle-password"
                        >
                            Show
                        </button>

                    </div>

                    <small class="error" id="passwordError"></small>

                </div>

                <button
                    type="submit"
                    class="login-button"
                >
                    Login
                </button>

            </form>

            <p class="auth-link">

                Don't have an account?

                <a href="register.php">
                    Register here
                </a>

            </p>

        </div>

    </div>

    <script src="src/views/assets/js/validation.js"></script>

</body>

</html>
