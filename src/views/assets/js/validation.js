const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");

/*
|--------------------------------------------------------------------------
| Password Toggle
|--------------------------------------------------------------------------
*/

document.querySelectorAll(".toggle-password").forEach((button) => {
  button.addEventListener("click", () => {
    let input = button.previousElementSibling;

    if (input.type === "password") {
      input.type = "text";
      button.textContent = "Hide";
    } else {
      input.type = "password";
      button.textContent = "Show";
    }
  });
});

/*
|--------------------------------------------------------------------------
| Login Validation
|--------------------------------------------------------------------------
*/

if (loginForm) {
  loginForm.addEventListener("submit", (event) => {
    const username = document.getElementById("username");
    const password = document.getElementById("password");

    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");

    usernameError.textContent = "";
    passwordError.textContent = "";

    let valid = true;

    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === "") {
      usernameError.textContent = "Username is required.";
      valid = false;
    }

    if (passwordValue === "") {
      passwordError.textContent = "Password is required.";
      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });
}

/*
|--------------------------------------------------------------------------
| Registration Validation
|--------------------------------------------------------------------------
*/

if (registerForm) {
  registerForm.addEventListener("submit", (event) => {
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    const confirmPassword = document.getElementById("confirm_password");

    const usernameError = document.getElementById("usernameError");
    const passwordError = document.getElementById("passwordError");
    const confirmPasswordError = document.getElementById(
      "confirmPasswordError",
    );

    usernameError.textContent = "";
    passwordError.textContent = "";
    confirmPasswordError.textContent = "";

    let valid = true;

    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();
    const confirmValue = confirmPassword.value.trim();

    if (usernameValue.length < 3) {
      usernameError.textContent = "Username must be at least 3 characters.";

      valid = false;
    }

    if (passwordValue.length < 8) {
      passwordError.textContent = "Password must be at least 8 characters.";

      valid = false;
    } else if (!/[A-Z]/.test(passwordValue)) {
      passwordError.textContent = "Password must contain an uppercase letter.";

      valid = false;
    } else if (!/[a-z]/.test(passwordValue)) {
      passwordError.textContent = "Password must contain a lowercase letter.";

      valid = false;
    } else if (!/[0-9]/.test(passwordValue)) {
      passwordError.textContent = "Password must contain a number.";

      valid = false;
    }

    if (passwordValue !== confirmValue) {
      confirmPasswordError.textContent = "Passwords do not match.";

      valid = false;
    }

    if (!valid) {
      event.preventDefault();
    }
  });
}
