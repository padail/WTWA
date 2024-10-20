<?php
include('conection.php');


$nama       = $_POST['nama'] ?? null;
$email      = $_POST['email'] ?? null;
$komentar   = $_POST['komentar'] ?? null;
$sqlSave    = 'insert into bukuTamu (nama,email,komentar) values ("'.$nama.'","'.$email.'","'.$komentar.'")';

$save       = mysqli_query($mysql,$sqlSave);
if ($save){
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5; url=bukuTamu.php">
    <title>Halaman Redirect</title>
</head>
    <h1 style="color: green;">Data sukses di simpan. Anda akan dialihkan dalam 5 detik...</h1>
    <p>Jika tidak dialihkan, silakan <a href="bukuTamu.php">klik di sini</a>.</p>
<?php }; ?>