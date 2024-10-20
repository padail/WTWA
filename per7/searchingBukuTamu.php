<?php
include('conection.php');
if ($_POST){
    $data = mysqli_query($mysql, 'select * from bukuTamu where '. $_POST["jenis"].' like "%'.$_POST["cari"].'%"');    
}else{
    $data = mysqli_query($mysql, 'select * from bukuTamu');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FetchData</title>
    <style>
        .dataBuku,
        .dataBuku th,
        .dataBuku td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <h4>LIST BUKU TAMU : </h4>
    <form action="" method="POST">
        <table>
            <tr>
                <td><p>search : </p></td>
                <td>
                    <select name="jenis" id="">
                        <option value="nama">nama</option>
                        <option value="email">email</option>
                    </select>
                </td>
                <td><input type="text" name="cari" placeholder="masukkan kata kunci"></td>
                <td><input type="submit" value="cari"></td>
            </tr>
        </table>
    </form>

    <table class="dataBuku">
        <thead>
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Komentar</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            while ($row = $data->fetch_array()) { ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['komentar']; ?></td>
                </tr>
            <?php $no++;
            }; ?>
        </tbody>
    </table>
</body>
</html>