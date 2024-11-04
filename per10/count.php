<?php
session_start();

// Cek apakah sesi 'hitungan' sudah ada
if (isset($_SESSION['hitungan'])) {
    // Tambah 1 ke sesi 'hitungan'
    $_SESSION['hitungan'] += 1;
} else {
    // Setel sesi 'hitungan' ke 1 untuk kunjungan pertama
    $_SESSION['hitungan'] = 1;
}
session_destroy();
?>
<html>

<head>
    <title>Demo session 1 </title>
</head>

<body>
    <h1> Demo Session RESET NILAI </h1>
    <p> Anda telah mengakses halaman ini sebanyak : <?= $_SESSION['hitungan']; ?> kali </p>
</body>

</html>