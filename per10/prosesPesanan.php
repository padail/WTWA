<?php
session_start();
if ($_SESSION['suksesLogin'] != true) {
    // Jika belum login, arahkan ke halaman login
    header("Location: formLogin.php");
    exit; // Hentikan eksekusi skrip
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>HAI <?= $_SESSION['nama']; ?> berikut pesanan anda: </h3>
    <p>Makanan : <?= $_POST['makanan']; ?></p>
    <p>minuman : <?= $_POST['minuman']; ?></p>
    <h3>TERIMAKASIH TELAH MEMESAN</h3>
    <br>
    <a href="logout.php">Keluar...</a>
</body>
</html>