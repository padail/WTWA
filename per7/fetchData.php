<?php 
include('conection.php');
$data = mysqli_query($mysql,'select * from Kategori');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FetchData</title>
</head>
<body>
    <h4>FETCH ROW ASOSIATIF : </h4>
    <?php while ($row2 = $data->fetch_row()) { ?>
        <p>id Kategori <?= $row2['idKategori']; ?> dengan nama Kategori : <?= $row2[1];?></p>
    <?php }; ?>
</body>
</html>