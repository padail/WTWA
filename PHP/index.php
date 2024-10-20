
<?php
$myfile = fopen("pens.txt", "w") or die("unable to open file !");
$txt = "politeknik elektronika negri surabya,";
fwrite($myfile,$txt);
$txt = "kampus pens, sukolilo, surabaya 60111";
fwrite($myfile,$txt);
fclose($myfile);
?>

<?php
$myfile = fopen("pens.txt","r") or die("unable to open file !");
echo fread($myfile,filesize("pens.txt"));
fclose($myfile);
?>
