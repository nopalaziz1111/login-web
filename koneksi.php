<?php
$host = "localhost";
$user = "root"; // ganti sesuai MySQL
$pass = "";
$dbname = "login_system";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

