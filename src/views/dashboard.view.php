<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Dashboard</title>

    <link rel="stylesheet" href="src/views/assets/css/style.css">

</head>

<body>

    <div class="dashboard-container">

        <div class="dashboard-card">

            <h1>
                Welcome,
                <?= htmlspecialchars($_SESSION["user"]["username"]) ?>!
            </h1>

            <p>
                You have successfully logged in.
            </p>

            <a
                href="logout.php"
                class="logout-button"
            >
                Logout
            </a>

        </div>

    </div>

</body>

</html>
