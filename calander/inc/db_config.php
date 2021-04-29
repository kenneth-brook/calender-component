<?php



$hostname='https://coastalgeorgiadb.365dtm.com';
$username="coastalgeorgiadb";
$password="Seabreeze#1";
$dbname="coastalgeorgiadb";


$connection = mysqli_connect($hostname, $username, $password);
mysqli_set_charset($connection, 'utf8');
mysqli_select_db($connection, $dbname);






?> 




