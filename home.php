<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>
<link rel="stylesheet" href="style.css">

<div class="container">
    
    <h2>Selamat datang, <?= $_SESSION["username"] ?>!</h2>
    <p>Anda berhasil login.</p>
    <a href="belajar.php"><button>masuk pelajaran</button></a>
    
    

</div>

