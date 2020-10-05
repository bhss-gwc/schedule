<?php
include("includes/common.inc");
include("includes/db.inc");
?>

<h2>Club Info</h2>

<?php

$clubname = "";
if(isset($_GET['club'])){
  $_GET['club'];
}

$query = "SELECT * FROM introduce_responses WHERE role='club'";
if(isset($clubname) and $clubname != ""){
  $query = "SELECT * FROM introduce_responses WHERE clubname ='". $clubname ."'";
}

$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table border='1' width='50%' bgcolor = '#D2B4DE'><tr>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Name</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Sponsor</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Sponsor Email</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Location</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Edit</th>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubname']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubsponsorname']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubsponsoremail']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubmeetinglocation']}</td>";
    if(isset($_SESSION['club-name']) and $row['clubname']==$_SESSION['club-name']){
        echo "<td style=\"font-family: Arial, Helvetica, sans-serif;\"><a href=\"editclubinfo.php?id={$row['id']}\">Edit</a></td>";
    } else {
        echo "<td style=\"font-family: Arial, Helvetica, sans-serif;\">&nbsp;</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}


?>

<?php
include("includes/footer.inc");
?>
