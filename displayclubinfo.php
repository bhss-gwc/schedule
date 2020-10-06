<?php
include("includes/common.inc");
include("includes/db.inc");
?>

<h2 align=center>Club Info</h2>

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

$clubname = "";
if(isset($_GET['club'])){
  $clubname = $_GET['club'];
}

$query = "SELECT * FROM introduce_responses WHERE role='club'";
if(isset($clubname) and $clubname != ""){
  $query = "SELECT * FROM introduce_responses WHERE clubname ='". $clubname ."'";
}

$result = mysqli_query($dbconnector, $query);

if (mysqli_num_rows($result) > 0) {
  echo "<table id='meetings' border='1' align=center width='70%' bgcolor = '#D2B4DE'><tr>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Name</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Sponsor</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Sponsor Email</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Leader</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Club Communication</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Location</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Edit</th>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubname']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubsponsorname']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubsponsoremail']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubleadername']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['clubcommunication']}</td>
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


// echo $query;
?>

<?php
include("includes/footer.inc");
?>
