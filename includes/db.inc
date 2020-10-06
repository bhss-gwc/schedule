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

$counter = 0;
$sql = "UPDATE counter SET counter = counter+1 WHERE id = 1";
if(preg_match('/displaytodaysbellschedule.php/',$_SERVER['SCRIPT_NAME'])){
  $dbconnector->query($sql);
}

$sql = "SELECT counter FROM counter WHERE id = 1";
$result = $dbconnector->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $counter = $row["counter"];
  }
} else {
  echo "no results";
}
?>

