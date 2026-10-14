<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

$name = $_SESSION["user_name"] ?? "Student";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Master Speed Academy</title>
</head>
<body style="font-family:Arial;text-align:center;background:#eef2ff;padding:30px">

    <h1>Welcome to Master Speed Academy!</h1>

    <h2>
        Hello, <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>!
    </h2>

    <p>Welcome to your student dashboard.</p>

    <a href="practice.php"
       style="background:#667eea;color:white;padding:12px 20px;
       text-decoration:none;border-radius:8px;display:inline-block">
       Start Typing Practice
    </a>

    <br><br>

    <a href="logout.php">Logout</a>

</body>
</html>