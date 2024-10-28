<?php
include('conection.php');


$id         = $_GET['id'] ?? null;
$sql        = "DELETE from bukuTamu WHERE idBukuTamu =".$id;

$act       = mysqli_query($mysql,$sql);
if ($act){
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5; url=listBukuTamu.php">
    <title>Halaman Redirect</title>
</head>
    <h1 style="color: green;">Data sukses di Hapus. Anda akan dialihkan dalam 5 detik...</h1>
    <p>Jika tidak dialihkan, silakan <a href="listBukuTamu.php">klik di sini</a>.</p>
<?php }; ?>