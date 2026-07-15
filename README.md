# intlangtools-secure-login-system

A Secure Login System developed using PHP, MySQL, JavaScript, and CSS.

## Features

- User authentication
- Session-based login
- Protected dashboard
- Logout functionality
- Password hashing (MD5)
- Prepared statements using PDO
- Client-side validation
- Server-side validation
- Responsive modern interface
- Password visibility toggle

---

## Technologies Used

- PHP 8+
- MySQL
- HTML5
- CSS3
- JavaScript (ES6)

---

## Project Structure

```text
src
├── config
├── controllers
├── db
├── models
├── routes
└── views
```

---

## Installation

1. Install XAMPP.

2. Start:

- Apache
- MySQL

3. Copy the project into:

```
C:\xampp\htdocs\
```

4. Open phpMyAdmin.

5. Create a database named:

```
secure_login_db
```

6. Import:

```
src/db/secure_login_db.sql
```

7. Visit:

```
http://localhost/intlangtools-secure-login-system/
```

---

## Default Account

Username

```
admin
```

Password

```
Admin123
```

---

## Security Features

- PDO prepared statements
- Session authentication
- Input trimming
- Client-side validation
- Server-side validation
- Password strength validation
- Protected routes

> **Note:** MD5 is used only because it is explicitly required by the laboratory activity. In production applications, use `password_hash()` and `password_verify()` instead.

---

## Author

Matthew E. Sta. Ana
