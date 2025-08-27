<?php
include 'koneksi.php';

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM user WHERE username='$username'");
    if ($check->num_rows > 0) {
        $message = "Username sudah terdaftar!";
    } else {
        if ($conn->query("INSERT INTO user (username, password) VALUES ('$username', '$password')")) {
            $message = "Pendaftaran berhasil! <a href='login.php'>Login sekarang</a>";
        } else {
            $message = "Terjadi kesalahan!";
        }
    }
}
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <h2>Daftar Akun</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Daftar</button>
    </form>
    <p><?= $message ?></p>
    <p>Sudah punya akun? <a href="login.php">Login</a></p>
</div>



