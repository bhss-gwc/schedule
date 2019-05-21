<?php
include("includes/header.inc");

$schedule_type = $_GET['schedule_type'];

// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bhss_schedule";

$dbconnector = mysqli_connect($servername, $username, $password, $dbname);

if (!$dbconnector) {
    die("DB Connection Error" . mysqli_connect_error());
}

$query = "SELECT * FROM schedulechange WHERE schedule_type = '". $schedule_type ."'";
$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table border='1' width='25%' bgcolor = '#D2B4DE'><tr>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Period</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Start Time</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Stop Time</th>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['period']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">".substr($row['start'],0,5)."</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">".substr($row['stop'],0,5)."</td>
    </tr>";
  }
  echo "</table>";
}


?>

<?php
include("includes/footer.inc");
?>
