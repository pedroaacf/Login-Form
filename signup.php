<?php
    session_start();
    include("db.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password) && !is_numeric($email)) 
        {

            $query = "insert into form (name, age, email, password) values ('$user_name', '$age', '$email', '$password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register') </script>";
        } else
        {
            echo "<script type='text/javascript'> alert('Please enter valid information') </script>";
        }
    }
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
        <main>
            <div class="container min-vh-100 d-flex justify-content-center align-items-center text-center">
                <form method="POST" class="needs-validation" novalidate>
                    <h1 class="h3 mb-4 mx-5 fw-normal">Please Sign Up</h1>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" min="1" oninput="this.value = 
                        !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" class="form-control" id="age" name="age" placeholder="20" required>
                        <label for="age">Age</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" minlength="5" required>
                        <label for="password">Password</label>
                        <div class="invalid-feedback">
                            Please provide a password with at least 5 letters.
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
                        <label for="confirmPassword">Confirm Password</label>
                        <div class="invalid-feedback">
                            The password is not equal.
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-4 mb-3" type="submit">Sign Up</button>
                    <a href="login.php">Already have an account?</a>
                </form>
            </div>
        </main>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <script>
            (function () {
                'use strict'

                var forms = document.querySelectorAll('.needs-validation')
                
                Array.from(forms).forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity() || !checkPasswordMatch()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })

                function checkPasswordMatch() {
                    var password = document.getElementById('password').value;
                    var confirmPassword = document.getElementById('confirmPassword').value;

                    if (password !== confirmPassword) {
                        document.getElementById('confirmPassword').setCustomValidity("Passwords do not match");
                        return false;
                    } else {
                        document.getElementById('confirmPassword').setCustomValidity('');
                        return true;
                    }
                }

                document.getElementById('password').addEventListener('input', checkPasswordMatch);
                document.getElementById('confirmPassword').addEventListener('input', checkPasswordMatch);

            })();
        </script>

    </body>
</html>
