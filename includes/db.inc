<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bhss_schedule";


//echo $today;

//exit(0);
// $dbconnector = mysqli_connect($servername, $username, $password, $dbname);
$dbconnector = new mysqli($servername, $username, $password, $dbname);

if ($dbconnector->connect_error) {
    die("DB Connection Error: " . $dbconnector->connect_error);
}
?>

