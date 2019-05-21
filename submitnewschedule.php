<?php
include("includes/header.inc");

$currentmonth = date("n");
$currentdate = date("j");

?>

<h2>Submit a New Schedule</h2>
This form is for creating an entirely new bell schedule for a certain day.<br><br><br>

  1. Select the month and day you are setting the schedule for:<br><br>
  <form action = "handlersubmitnewschedule.php" method="POST">

  <?php
  echo '<SELECT name = "month">';
  if($currentmonth <= 8 and $currentmonth > 5){
    echo '<option value = "08">Aug</option>';
  }
  if($currentmonth <= 9 and $currentmonth > 5){
    echo '<option value = "09">Sep</option>';
  }
  if($currentmonth <= 10 and $currentmonth > 5){
    echo '<option value = "10">Oct</option>';
  }
  if($currentmonth <= 11 and $currentmonth > 5){
    echo '<option value = "11">Nov</option>';
  }
  if($currentmonth <= 12 and $currentmonth > 5){
    echo '<option value = "12">Dec</option>';
  }
  if($currentmonth <= 1){
    echo '<option value = "01">Jan</option>';
  }
  if($currentmonth <= 2){
    echo '<option value = "02">Feb</option>';
  }
  if($currentmonth <= 3){
    echo '<option value = "03">Mar</option>';
  }
  if($currentmonth <= 4){
    echo '<option value = "04">Apr</option>';
  }
  if($currentmonth <= 5){
    echo '<option value = "05">May</option>';
  }


echo '</select>';

echo '<SELECT name = "date">';
  for ($i = 1; $i < 32; $i++){
    echo '<option value = "' . $i . '">' . $i . '</option>';
  }
echo '</select>';

  ?>

<br><br>2. Name of new schedule type (ex: ISTEP math part 1):<br><br>
<input type = "text" name = "newscheduletype"/><br>

<br>3. Insert bell schedule times:<br><br>
1st period:
<input type = "time" name = "1stperiodstart"/> - <input type = "time" name = "1stperiodstop"/><br><br>
2nd period:
<input type = "time" name = "2ndperiodstart"/> - <input type = "time" name = "2ndperiodstop"/><br><br>
SRT/P+:
<input type = "time" name = "srtperiodstart"/> - <input type = "time" name = "srtperiodstop"/><br><br>
3rd period:
<input type = "time" name = "3rdperiodstart"/> - <input type = "time" name = "3rdperiodstop"/><br><br>
4th period:
<input type = "time" name = "4thperiodstart"/> - <input type = "time" name = "4thperiodstop"/><br><br>
5th period:
<input type = "time" name = "5thperiodstart"/> - <input type = "time" name = "5thperiodstop"/><br><br>

3. Submit when finished:
<input type = "submit" value = "submit" /><br><br>

 		</form>

<?php
include("includes/footer.inc");
?>
