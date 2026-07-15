<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= APP_NAME ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="src/views/assets/css/style.css"
    >

</head>

<body>

<div class="login-container">

    <div class="login-card">

        <h1>Create Account</h1>

        <p class="subtitle">
            Register to use the Secure Login System.
        </p>

        <?php if (!empty($error)): ?>

            <div class="alert">
                <?= htmlspecialchars($error) ?>
            </div>

        <?php endif; ?>

        <form
            id="registerForm"
            method="POST"
            novalidate
        >

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    minlength="3"
                    maxlength="50"
                    required
                >

                <small
                    class="error"
                    id="usernameError"
                ></small>

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

                <small
                    class="error"
                    id="passwordError"
                ></small>

            </div>

            <div class="form-group">

                <label for="confirm_password">
                    Confirm Password
                </label>

                <input
                    type="password"
                    id="confirm_password"
                    name="confirm_password"
                    minlength="8"
                    maxlength="255"
                    required
                >

                <small
                    class="error"
                    id="confirmPasswordError"
                ></small>

            </div>

            <button
                class="login-button"
                type="submit"
            >
                Register
            </button>

        </form>

        <p class="auth-link">

            Already have an account?

            <a href="login.php">
                Login here
            </a>

        </p>

    </div>

</div>

<script src="src/views/assets/js/validation.js"></script>

</body>

</html>
