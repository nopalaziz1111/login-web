<?php
include 'koneksi.php';
session_start();

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = $conn->query("SELECT * FROM user WHERE username='$username'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Ambil password dari database
        $db_password = $row["password"];
        
        // Cek apakah password di database adalah hash atau plain text
        if (password_verify($password, $db_password) || $db_password === $password) {
            $_SESSION["username"] = $username;
            header("Location: home.php");
            exit();
        } else {
            $message = "Password salah!";
        }
    } else {
        $message = "Username tidak ditemukan!";
    }
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p><?= $message ?></p>
    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
</div>