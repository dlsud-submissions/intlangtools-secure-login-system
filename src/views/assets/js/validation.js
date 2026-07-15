const form = document.getElementById("loginForm");

if (form) {
  const username = document.getElementById("username");
  const password = document.getElementById("password");

  const usernameError = document.getElementById("usernameError");
  const passwordError = document.getElementById("passwordError");

  const togglePassword = document.getElementById("togglePassword");

  /*
    |--------------------------------------------------------------------------
    | Show / Hide Password
    |--------------------------------------------------------------------------
    */

  togglePassword.addEventListener("click", () => {
    if (password.type === "password") {
      password.type = "text";
      togglePassword.textContent = "Hide";
    } else {
      password.type = "password";
      togglePassword.textContent = "Show";
    }
  });

  /*
    |--------------------------------------------------------------------------
    | Validation
    |--------------------------------------------------------------------------
    */

  form.addEventListener("submit", (event) => {
    usernameError.textContent = "";
    passwordError.textContent = "";

    let isValid = true;

    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    // Username

    if (usernameValue === "") {
      usernameError.textContent = "Username is required.";

      isValid = false;
    }

    // Password

    if (passwordValue === "") {
      passwordError.textContent = "Password is required.";

      isValid = false;
    } else {
      if (passwordValue.length < 8) {
        passwordError.textContent = "Password must be at least 8 characters.";

        isValid = false;
      } else if (!/[A-Z]/.test(passwordValue)) {
        passwordError.textContent =
          "Password must contain an uppercase letter.";

        isValid = false;
      } else if (!/[a-z]/.test(passwordValue)) {
        passwordError.textContent = "Password must contain a lowercase letter.";

        isValid = false;
      } else if (!/[0-9]/.test(passwordValue)) {
        passwordError.textContent = "Password must contain a number.";

        isValid = false;
      }
    }

    if (!isValid) {
      event.preventDefault();
    }
  });

  /*
    |--------------------------------------------------------------------------
    | Trim Leading/Trailing Spaces
    |--------------------------------------------------------------------------
    */

  username.addEventListener("blur", () => {
    username.value = username.value.trim();
  });

  password.addEventListener("blur", () => {
    password.value = password.value.trim();
  });
}
