<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Noto Sans Thai", sans-serif;
            --primary-color: #73f3ad;
            --primary-color-dark: #5fe3c5;
            background-image: linear-gradient(to right,
                    var(--primary-color-dark),
                    var(--primary-color));
        }

        .container {
            max-width: 400px;
            margin-top: 100px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
            left: 500px;
        }

        h2 {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            text-align: left;
            display: block;
        }

        .form-control {
            margin-bottom: 15px;
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .btn-primary {
            width: 100%;
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        a {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector("form");
            form.addEventListener("submit", function(event) {
                const username = form.querySelector("input[name='username']").value;
                const password = form.querySelector("input[name='password']").value;
                if (username.length < 5 || password.length < 5) {
                    event.preventDefault();
                    alert("Username and password must be at least 5 characters long.");
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="login_check.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" maxlength="10" class="form-control" placeholder="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="password" required>
            </div>
            <?php
            if (isset($_SESSION["error"])) {
                echo '<div class="error">' . $_SESSION["error"] . '</div>';
            }
            ?>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="register.php">Register</a>
    </div>
</body>

</html>