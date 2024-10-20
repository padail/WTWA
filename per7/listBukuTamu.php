<?php
include('conection.php');
$data = mysqli_query($mysql, 'select * from bukuTamu');
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