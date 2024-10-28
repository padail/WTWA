<?php
include('conection.php');
if ($_GET) {
    $id = intval($_GET['id']);
    $data = mysqli_query($mysql, 'SELECT * FROM bukutamu WHERE idBukuTamu ='.$id.'');
    // $id = $_GET['id'];
    // $data = mysqli_query($mysql,"select * from Kategori WHERE idBukuTamu ='.$id.");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>

<body>
    <h4>BUKU TAMU : </h4>
    <form action="tambahBukuTamu.php" method="post">
        
    <?php
        if ($_GET) : 
            while ($row = $data->fetch_array()) { ?>
            <input type="hidden" name="id" value="<?= $id; ?>">
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama" size="25" maxlength="50" value="<?=$row['nama'] ?? null;?>"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" size="25" maxlength="50" value="<?=$row['email'] ?? null;?>"></td>
            </tr>
            <tr>
                <td>Komentar : </td>
                <td><textarea name="komentar" rows="5"><?=$row['komentar'] ?? null;?></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    <?php } else: ?>
    <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama" size="25" maxlength="50" value="<?=$row['nama'] ?? null;?>"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" size="25" maxlength="50" value="<?=$row['email'] ?? null;?>"></td>
            </tr>
            <tr>
                <td>Komentar : </td>
                <td><textarea name="komentar" rows="5"><?=$row['komentar'] ?? null;?></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
        <?php endif; ?>
    </form>
</body>

</html>