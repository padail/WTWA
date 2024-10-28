<?php
include('conection.php');


$id       = $_POST['id'] ?? null;
$nama       = $_POST['nama'] ?? null;
$email      = $_POST['email'] ?? null;
$komentar   = $_POST['komentar'] ?? null;

if (!$id) {
    $sql = 'INSERT INTO bukuTamu (nama, email, komentar) VALUES ("' . $nama . '", "' . $email . '", "' . $komentar . '")';
} else {
    $sql = 'UPDATE bukuTamu SET nama = "' . $nama . '", email = "' . $email . '", komentar = "' . $komentar . '" WHERE idBukuTamu = ' . $id;
}
$act       = mysqli_query($mysql,$sql);
if ($act){
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