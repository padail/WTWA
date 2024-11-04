<?php 
session_start(); 
$nama   = $_POST["nama"]; 
$umur   = $_POST["umur"]; 
$email  = $_POST["email"]; 
// $waktu  = $_POST["waktu"]; 
$_SESSION["nama"] = $nama; 
$_SESSION["umur"] = $umur; 
$_SESSION["email"] = $email; 
?> 
<HTML> 
<BODY> 

<H1> Hallo <?=  $_SESSION["nama"];?> </H1> 
<H2> Selamat Datang Di Situs Kami </H2> 
<?php
echo "Umur Anda saat ini adalah ".$_SESSION["umur"]."tahun <BR>"; 
echo "Alamat email Anda adalah ".$_SESSION["email"]."<BR>"; 
?> 
<BR> 
<A HREF="next.php"> Klik di sini </A> untuk 
menuju ke halaman berikut. 
</BODY> 
</HTML>