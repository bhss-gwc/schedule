<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bhss_schedule";


//echo $today;

//exit(0);
$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

if (!$dbconnector) {
    die("DB Connection Error" . mysqli_connect_error());
}
?>

