<?php
include("includes/header.inc");
?>

<h2>Club Info</h2>

<?php

$clubname = $_GET['club'];

// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhss_schedule";

$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

if (!$dbconnector) {
    die("DB Connection Error" . mysqli_connect_error());
}

$query = "SELECT * FROM introduce_responses WHERE clubname ='". $clubname ."'";
$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table border='1' width='50%' bgcolor = '#D2B4DE'><tr>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Name</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Sponsor</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Sponsor Email</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Location</th>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubname']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubsponsorname']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubsponsoremail']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubmeetinglocation']}</td>
    </tr>";
  }
  echo "</table>";
}


?>

<?php
include("includes/footer.inc");
?>
