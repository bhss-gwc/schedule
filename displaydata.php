<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "icecream";

$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

if (!$dbconnector) {
    die("DB Connection Error" . mysqli_connect_error());
}

$query = "SELECT * FROM responses";
$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table><tr><th>Firstname</th><th>Lastname</th><th>Flavor</th><th>Toppings</th></tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['firstname']}</td><td>{$row['lastname']}</td><td>{$row['flavor']}</td><td>{$row['topping']}<td></tr>";
  }
  echo "</table>";
}


?>
</body>
</html>
