<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .login-container {
            width: 300px;
            margin: 100px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $validUsername = 'admin';
        $validPassword = 'admin';

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == $validUsername && $password == $validPassword) {
            header('Location: Aindex.php');
            exit;
        } else {
            echo '<div class="login-container">';
            echo '<h2>Login</h2>';
            echo '<p>Login gagal. Silakan coba lagi.</p>';
            echo '<form action="" method="POST">';
            echo '<label for="username">Username:</label>';
            echo '<input type="text" id="username" name="username" required><br><br>';
            echo '<label for="password">Password:</label>';
            echo '<input type="password" id="password" name="password" required><br><br>';
            echo '<input type="submit" value="Login">';
            echo '</form>';
            echo '</div>';
        }
    } else {
        echo '<div class="login-container">';
        echo '<h2>Login</h2>';
        echo '<form action="" method="POST">';
        echo '<label for="username">Username:</label>';
        echo '<input type="text" id="username" name="username" required><br><br>';
        echo '<label for="password">Password:</label>';
        echo '<input type="password" id="password" name="password" required><br><br>';
        echo '<input type="submit" value="Login">';
        echo '</form>';
        echo '</div>';
    }
    ?>
</body>
</html>
