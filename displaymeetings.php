<?php
include("includes/header.inc");
?>

<h2>Club Meetings</h2>

<?php

// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhss_schedule";

$today = date("Y-m-d");

$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

if (!$dbconnector) {
    die("DB Connection Error" . mysqli_connect_error());
}

$query = "SELECT * FROM meetings ORDER by meetingdate WHERE meetingdate >= $today";
$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table border='1' width='50%' bgcolor='#D2B4DE'><tr>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Meeting Date</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Start Time</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Stop Time</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Location</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Name</th>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    if($row['meetingdate'] == '') continue;
    echo "<tr>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['meetingdate']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['starttime']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['stoptime']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubmeetinglocation']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\"><a href=\"displayclubinfo.php?club={$row['clubname']}\">{$row['clubname']}</a></td>
    </tr>";
  }
  echo "</table>";
}

?>

<?php
include("includes/footer.inc");
?>
