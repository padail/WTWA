<?php
include('conection.php');
$data = mysqli_query($mysql, 'select * from bukuTamu');

if($_GET){
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FetchData</title>
    <style>
        table,
        th,
        td {
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
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Komentar</th>
                <th colspan="2">Act.</th>
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
                    <td><a href="bukuTamu.php?id=<?= $row['idBukuTamu']; ?>">Update</a></td>
                    <td><a href="delete.php?id=<?= $row['idBukuTamu']; ?>" onclick="return confirm('yakin mau di apus?')">Delete</a></td>
                </tr>
            <?php $no++;
            }; ?>

        </tbody>
    </table>
</body>

</html>