<?php
session_start();

// Jika pengguna belum login, langsung arahkan ke halaman index


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    // Logout pengguna
    session_destroy();

    // Redirect sesuai peran pengguna
    if ($_SESSION['user_role'] === 'user') {
        header("Location: Aindex.php");
    } else {
        header("Location: index.php");
    }
    exit;
}
?>

<!DOCTYPE html>
<html>
  <style>
    /* style.css */
.logout-container {
    text-align: center;
    margin-top: 100px;
}

h2 {
    font-size: 24px;
}

input[type="submit"] {
    background-color: #ff0000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}

a {
    text-decoration: none;
    color: #000;
    margin-left: 10px;
    font-weight: bold;
}

  </style>
<head>
    <title>Logout</title>
</head>
<body>
    <h2>Apakah Anda yakin akan logout?</h2>
    <form method="post">
        <input type="submit" name="logout" value="Ya">
        <a href="javascript:history.back()">Tidak</a>
    </form>
</body>
</html>
