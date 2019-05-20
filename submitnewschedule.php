<?php
include("includes/header.inc");
?>

<h2>Submit a New Schedule</h2>
<form action = "handlerschedulechange.php" method="POST">

  Select the month and day you are setting the schedule for:
  <form action = "handlerday_selector.php" method="POST">

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


  echo '<p>
    Choose which schedule to apply for that day:
  </p>';

  ?>

Name of schedule type:
<input type = "text" name = "nameofscheduletype"/><br>
1st period: (example: 8-8:50 am)<br>
<input type = "text" name = "1stperiod"/><br><br>
2nd period: <br>
<input type = "text" name = "2ndperiod"/><br><br>
3rd period: <br>
<input type = "text" name = "3rdperiod"/><br><br>
4th period: <br>
<input type = "text" name = "4thperiod"/><br><br>
5th period: <br>
<input type = "text" name = "5thperiod"/><br><br>

<input type = "submit" value = "submit" /><br>

 		</form>

<?php
include("includes/footer.inc");
?>
