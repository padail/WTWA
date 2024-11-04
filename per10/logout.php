<?php 
session_start();
session_destroy();
 ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3; url=formLogin.php">
    <title>Halaman Redirect</title>
</head>
    <h1 style="color: green;">sukses LogOut. Anda akan dialihkan dalam 3 detik...</h1>
    <p>Jika tidak dialihkan, silakan <a href="formLogin.php">klik di sini</a>.</p>