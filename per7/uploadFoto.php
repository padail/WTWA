<?php
include('conection.php');
  ?>
<form action="uploadFoto.php" method="post" enctype="multipart/form-data">
    <label for="file">Nama:</label>
    <input type="text" name="nama"><br>
    <label for="file">gambar:</label>
    <input type="file" name="file" id="file"><br>
    <input type="submit" name="submit" value="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"])) {
        $allowedExts = array("gif", "jpeg", "jpg", "png");
        $temp = explode(".", $_FILES["file"]["name"]);
        $extension  = end($temp);
        $nama       = $_POST['nama'];
        $namaFile   = $_FILES["file"]["name"];

        $sql = 'INSERT INTO gambar (nama, namaFile) VALUES ("' . $nama . '", "' . $namaFile . '")';
        $act       = mysqli_query($mysql,$sql);


        if 
        (
            (
                ($_FILES["file"]["type"] == "image/gif")
                || ($_FILES["file"]["type"] == "image/jpeg")
                || ($_FILES["file"]["type"] == "image/jpg")
                || ($_FILES["file"]["type"] == "image/png")
                && ($_FILES["file"]["size"] < 2000000)
                && in_array($extension, $allowedExts)
            )
        ) 
        {
            if ($_FILES["file"]["error"] > 0) {
                echo "Error: " . $_FILES["file"]["error"] . "<br>";
            } else {
                echo "Upload: " . $_FILES["file"]["name"] . "<br>";
                echo "Type: " . $_FILES["file"]["type"] . "<br>";
                echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                echo "Stored in: " . $_FILES["file"]["tmp_name"] . "<br>";
                if ( file_exists("upload/" . $_FILES["file"]["name"]))
                {
                    echo $_FILES["file"]["name"]. "already exists.";
                } else
                {
                    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/".$_FILES["file"]["name"]);
                    echo "stored in: upload/".$_FILES["file"]["name"];
                }
            }
        } else {
            echo "Invalid file.";
        }
        if ($act){
            ?>
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="refresh" content="5; url=listGambar.php">
                <title>Halaman Redirect</title>
            </head>
                <h1 style="color: green;">Data sukses di simpan. Anda akan dialihkan dalam 5 detik...</h1>
                <p>Jika tidak dialihkan, silakan <a href="listGambar.php">klik di sini</a>.</p>
            <?php }; ?>
<?php    } else {
        echo "No file uploaded.";
    }
}
?>