<?php
include("includes/header.inc");

$currentmonth = date("n");
$currentdate = date("j");

$admin_username = "admin";
  if(!(isset($_COOKIE['club-name']) && $_COOKIE['club-name'] == $admin_username)){
    echo "You don't have permission to view this page.";
    return;
  }
?>

<h2>Submit a New Schedule</h2>
This form is for creating an entirely new bell schedule for a certain day.<br><br><br>

1. Name of new schedule type (ex: ISTEP math part 1):<br><br>
<input type = "text" name = "newscheduletype"/><br>

<br>2. Insert bell schedule times:<br><br>
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
