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
    <h1>INI PESANAN</h1>
    selamat datang <?= $_SESSION['nama']; ?><br>

    <form action="prosesPesanan.php" method="POST">
        <h3>SILAHKAN PESAN MAKANAN DAN MINUMAN :</h3>
        <h5>MAKANAN</h5>
        <input type="radio" name="makanan" value="AYAM MALAY"> AYAM MALAY
        <input type="radio" name="makanan" value="GADO GADO"> GADO GADO
        <h5>MINUMAN</h5>
        <input type="radio" name="minuman" value="ES OYEN"> ES OYEN
        <input type="radio" name="minuman" value="AIR PUTIH"> AIR PUTIH
        <br><br>
        <INPUT TYPE="submit" VALUE="Submit">
        <br><br>
    </form>
    <a href="logout.php">logOut...</a>
</body>
</html>