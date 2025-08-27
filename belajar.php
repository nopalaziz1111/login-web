<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Halaman Belajar</h2>
    <p>Pilih mata pelajaran:</p>

    <div class="grid">
        <a href="matematika.php" class="card">Matematika</a>
        <a href="ips.php" class="card">IPS</a>
        <a href="seni.php" class="card">Seni Budaya</a>
        <a href="sejarah.php" class="card">Sejarah</a>
        <a href="informatika.php" class="card">Informatika</a>
        <a href="ipa.php" class="card">IPA</a>
    </div>
    <div class="logout">
        <a href="logout.php"><button>Logout</button></a>
    </div>
</div>
