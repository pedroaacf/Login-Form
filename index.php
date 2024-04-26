<?php
    session_start();
    include("db.php");
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body class="bg-body-tertiary">
        <div class="container min-vh-100 d-flex justify-content-center align-items-center text-center">
            <div class="row">
                <div class="col">
                    <h1 class="mb-5">Welcome <?php echo $_SESSION['user_name']; ?></h1>
                    <h2 class="mb-5">You are <?php echo $_SESSION['user_age']; ?> years old</h2>
                    <a href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </body>

</html>