<?php
include("includes/common.inc");
include("includes/db.inc")
?>

<h2 align=center>Club Meetings</h2>

<style>
#meetings {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

#meetings td, #meetings th {
  border: 1px solid #ddd;
  padding: 8px;
}

#meetings th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: 'center';
  background-color: #9400c9;
  color: white;
}
</style>

<?php

$today = date("Y-m-d");

$query = "SELECT * FROM meetings WHERE meetingdate >= '$today' ORDER by meetingdate";
$result = mysqli_query($dbconnector, $query);
if (mysqli_num_rows($result) > 0) {
  echo "<table id='meetings' border='1' align=center width='70%' bgcolor='#D2B4DE'><tr>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Meeting Date</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Name</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Start Time</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Stop Time</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Location</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Description</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Edit</th>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    if($row['meetingdate'] == '') continue;
    $time_in_12_hour_format_start  = date("g:i a", strtotime($row['starttime']));
    $time_in_12_hour_format_stop  = date("g:i a", strtotime($row['stoptime']));
    echo "<tr>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['meetingdate']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\"><a href=\"displayclubinfo.php?club={$row['clubname']}\">{$row['clubname']}</a></td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$time_in_12_hour_format_start}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$time_in_12_hour_format_stop}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubmeetinglocation']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubmeetingdescription']}</td>";
    if(isset($_SESSION['club-name']) and $row['clubname']==$_SESSION['club-name']){
        echo "<td style=\"font-family: Arial, Helvetica, sans-serif;\"><a href=\"editclubmeeting.php?id={$row['id']}\">Edit</a></td>";
    } else {
        echo "<td style=\"font-family: Arial, Helvetica, sans-serif;\">&nbsp;</td>";
    }
    
   echo "</tr>";
  }
  echo "</table>";
}
?>

<br>

<?php
//if the user is logged in as a specific club, they can add a club meeting to the schedule
if(isset($_SESSION['club-name'])){
  if(isset($_SESSION['role']) && $_SESSION['role']!='officer'){
//  echo "You are logged into the club account for <b>" . $_SESSION['club-name'] . "</b>";
//  echo "<br>";
    echo "<p align=center><b><a href=\"meetings.php\">Add Club Meeting Entry</a></b></p>";
  }
}

?>

<?php
include("includes/footer.inc");
?>
