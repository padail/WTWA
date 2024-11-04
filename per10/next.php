<?php
session_start();
?>
<HTML>

<BODY>
    <H2> Anda memasuki halaman kedua </H2>
    <?php
    echo "Nama anda " . $_SESSION["nama"] . "<br>";
    echo "Umur Anda saat ini adalah " . $_SESSION["umur"] . " tahun<BR>";
    echo "Alamat email Anda adalah " . $_SESSION["email"] . "<BR>";
    ?>
    <A HREF="data.php"> Klik disini </A> untuk menuju ke halaman
    awal.
    <?
    //untuk menghapus variabel session di server 
    session_destroy();
    ?>
</BODY>

</HTML>