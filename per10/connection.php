<?php 
$hostname       = 'localhost';
$username       = 'root';
$password       = '';
$namaDatabase   = 'db_pert10';

$mysql = new mysqli($hostname,$username,$password,$namaDatabase);

if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}
?>