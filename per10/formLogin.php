<?php include('connection.php'); 
session_start();
$data = mysqli_query($mysql, 'select * from login');
$email = [];
$password = [];
while ($row = $data->fetch_array()) { 
    $email[] = $row['email'];
    $password[] = $row['password'];
}
if($_POST):
    $inputEmail = $_POST['email'];
    $inputPassword = $_POST['password'];

    if(in_array($inputEmail,$email) AND in_array($inputPassword,$password)):
        $_SESSION['suksesLogin'] = true;
        $_SESSION['nama'] = $_POST['email'];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3; url=pesanan.php">
    <title>Halaman Redirect</title>
</head>
    <h1 style="color: green;">sukses Login. Anda akan dialihkan dalam 3 detik...</h1>
    <p>Jika tidak dialihkan, silakan <a href="pesanan.php">klik di sini</a>.</p>

<?php 
    else:
?>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3; url=formLogin.php">
    <title>Halaman Redirect</title>
</head>
    <h1 style="color: red;">GAGAL Login. Anda akan dialihkan dalam 3 detik...</h1>
    <p>Jika tidak dialihkan, silakan <a href="FormLogin.php">klik di sini</a>.</p>  
<?php 
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>SILAHKAN MELAKUKAN LOGIN :</h2>
    <form action="" method="POST">
        <pre>
            <input type="text" placeholder="email" name="email"><br>
            <input type="password" placeholder="password" name="password"><br>
            <INPUT TYPE="submit" VALUE="Submit">
        </pre>
    </form>
</body>

</html>