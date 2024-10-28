<?php
include('conection.php');
$data = mysqli_query($mysql, 'select * from gambar');

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
    <h4>LIST BIODATA : </h4>
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            while ($row = $data->fetch_array()) { ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><img src="upload/<?= $row['namaFile']; ?>" alt="" width="100"></td>
                </tr>
            <?php $no++;
            }; ?>

        </tbody>
    </table>
</body>

</html>