<?php
include './config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($query->execute([$username, $email, $password])) {
        echo "Registrasi berhasil. <a href='login.php'>Login</a>";
    } else {
        echo "Terjadi kesalahan. Coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login_register.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Register</button>
        </form>
        <a href="login.php">Sudah punya akun? Login di sini</a>
    </div>
</body>
</html>
