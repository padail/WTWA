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
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama" size="25" maxlength="50"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" size="25" maxlength="50"></td>
            </tr>
            <tr>
                <td>Komentar : </td>
                <td><textarea name="komentar" rows="5"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>