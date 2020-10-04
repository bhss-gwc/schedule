<?php
include("includes/common.inc");
?>

<h2>Weird Bell Schedules</h2>

<?php


$query = "SELECT * FROM weirdschedules ORDER by day asc";
$result = mysqli_query($dbconnector, $query);
//$str = substr($result, 0, 5);


if (mysqli_num_rows($result) > 0) {
  echo "<table border='1' width='25%' bgcolor = '#D2B4DE'><tr>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Date</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Event</th>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['month']} {$row['day']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\"><a href=\"displayweirdbellschedule.php?schedule_type={$row['schedule_type']}\">{$row['schedule_type']}</a></td>
    </tr>";
  }
  echo "</table>";
}


?>

<?php
include("includes/footer.inc");
?>
