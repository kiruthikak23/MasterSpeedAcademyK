<?php
require 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($name === "" || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 8) {
        $message = "Enter valid details. Password must be at least 8 characters.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare(
            "INSERT INTO users (name, email, password) VALUES (?, ?, ?)"
        );
        $stmt->bind_param("sss", $name, $email, $hashedPassword);

        if ($stmt->execute()) {
            $message = "Registration successful! You can now login.";
        } else {
            $message = $stmt->errno === 1062
                ? "This email is already registered."
                : "Registration failed. Please try again.";
        }

        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Master Speed Academy</title>
</head>
<body style="font-family:Arial;text-align:center;background:#eee;padding:30px">
    <h1>Master Speed Academy</h1>
    <h2>Create Account</h2>

    <p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>

    <form method="POST">
        <input name="name" type="text" placeholder="Your Name" required>
        <br><br>
        <input name="email" type="email" placeholder="Your Email" required>
        <br><br>
        <input name="password" type="password"
               placeholder="Password (8 characters minimum)"
               minlength="8" required>
        <br><br>
        <button type="submit">Register</button>
    </form>

    <p><a href="login.php">Go to Login</a></p>
    <a href="index.php">Back to Home</a>
</body>
</html>