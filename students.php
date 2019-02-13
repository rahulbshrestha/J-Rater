<?php
// Port you need to connect with MariaDB
$DB_HOST = '0.0.0.0:3306';
$UName = 'rashrestha';
$Pass = 'YsSAm5Aa';
$DB_Name = 'wry';

$connect = mysqli_connect($DB_HOST, $UName, $Pass, $DB_Name) or die("Failed to
connect to MySQL: " . mysqli_error());
?>

