<?php
include("includes/common.inc");
include("includes/db.inc");
?>

<h2 align=center>Today's Bell Schedule</h2>

<style>
#meetings {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
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
  
//  if(isset($_SESSION['schedule_type'])){
//    echo "<h3>" . $_SESSION['schedule_type'] . "</h3>";
//  }

$query = "SELECT * FROM schedulechange WHERE newscheduledate = '$today'";
$result = mysqli_query($dbconnector, $query);

$schedule_id = '';
if (mysqli_num_rows($result) == 0) {
  $query = "SELECT * FROM schedulechange WHERE id=1";
  $result = mysqli_query($dbconnector, $query);
} 

echo "<table id='meetings' border='1' align=center width='30%' bgcolor='#D2B4DE'><tr>
  <th colspan='2' style=\"font-family: Arial, Helvetica, sans-serif;\">Period</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Start Time</th>
  <th style=\"font-family: Arial, Helvetica, sans-serif;\">Stop Time</th>
  </tr>";

$table_array = array(1=>0, 2=>0, 3=>0, 4=>0, 8=>0, 9=>0);
while ($row = mysqli_fetch_assoc($result)) {
  echo "<h3 align=center> {$row['schedule_type']} </h3>";
  for($i = 1; $i<=9; $i++){
    if($i == 4) continue;
    $period = $i;
    if($i == 3){
      $period = "srt";
    }
    if($i == 4){
      $period = $i-1;
    }
    if($i == 5){
      $period = "Alunch";
    }
    if($i == 6){
      $period = "Blunch";
    }
    if($i == 7){
      $period = "Clunch";
    }
    if($i > 7){
      $period = $i - 4;
    }
    // print_r($row);
    // die;
    // Was trying to display regular bell schedule (row 1 of schedulechange table).
    // Got no result when id = 1 because of the following if-statement. 
    // It just moves onto continue when there is no entry in
    // the `newscheduledate` field where id = 1.
    // if(isset($row['newscheduledate']) && $row['newscheduledate'] == '') continue;
    $time_12_hr_periodstart  = date("g:i a", strtotime($row[$period . 'periodstart']));
    $time_12_hr_periodstop  = date("g:i a", strtotime($row[$period . 'periodstop']));
    if(! is_numeric($period) and $period != "srt"){
      $period = preg_replace("/lunch/", " lunch", $period);
      $time_12_hr_periodstart = "". $time_12_hr_periodstart;
      $time_12_hr_periodstop = "". $time_12_hr_periodstop;
    }
    $period = (($period == "srt")?"SRT/P+":$period);
    if(array_key_exists($i, $table_array)){
      echo "<tr>
        <td colspan=\"2\" style=\"font-family: Arial, Helvetica, sans-serif;padding-left: 20px; padding-right:20px;\">". $period ."</td>
        <td align='center' style=\"font-family: Arial, Helvetica, sans-serif;\">{$time_12_hr_periodstart}</td>
        <td align='center' style=\"font-family: Arial, Helvetica, sans-serif;\">{$time_12_hr_periodstop}</td>
        </tr>";
    }else{
      echo "<tr>";
      if($i == 5){
         echo  "<td rowspan='3' style=\"font-family: Arial, Helvetica, sans-serif;padding-left: 20px;\">3</td>";
      }
      echo  "<td align='center' style=\"font-family: Arial, Helvetica, sans-serif;\">". $period ."</td>
        <td align='center' style=\"font-family: Arial, Helvetica, sans-serif;\">{$time_12_hr_periodstart}</td>
        <td align='center' style=\"font-family: Arial, Helvetica, sans-serif;\">{$time_12_hr_periodstop}</td>
        </tr>";
    }
  }

  $schedule_id = $row['id'];
  $schedule_type = $row['schedule_type'];
}
//echo $schedule_id;
echo "</table>";
?>

<br>

<?php

if(isset($_SESSION['role']) && $_SESSION['role']=="officer"){
//  if($schedule_id != '1'){ // TODO: after adding this line I got the Google Translate pop up
  if($schedule_type != 'Regular'){ // TODO: after adding this line I got the Google Translate pop up
    echo "<p align=center><b><a href=\"editnewschedule.php?id={$schedule_id}\">Edit Bell Schedule</a></b></p>";
  }
}
?>

<?php
include("includes/footer.inc");
?>

<?php
/*
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
    <td style=\"font-family: Arial, Helvetica, sans-serif;\">{$row['schedule_type']}</td>
    <td style=\"font-family: Arial, Helvetica, sans-serif;\"><a href=\"displayclubinfo.php?club={$row['clubname']}\">{$row['clubname']}</a></td>
    </tr>";
  }
  echo "</table>";
}
 */
?>
